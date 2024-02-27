<?php

namespace App\Livewire;

use App\Models\Room;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class TableRoomComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $perPage = '5';
    public $message = '';
    public $search = '';
    public $files = [];
    public $previews = [];
    public $name_room;
    public $description;
    public $no_guest;
    public $no_room;
    public $nigth_guest;

    public $editingRoomId;
    public $showForm = false;

    public function render()
    {
        $rooms = Room::paginate(5);
        return view('livewire.table-room-component', ['rooms' => $rooms]);
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'image|max:2048', // Adjust image validation rules as needed
        ]);

        $this->previews = [];
        foreach ($this->files as $file) {
            $this->previews[] = [
                'url' => $file->temporaryUrl(),
                'type' => Str::startsWith($file->getMimeType(), 'video') ? 'video' : 'image',
            ];
        }
    }

    public function save()
    {
        // Save the files to the database or storage as needed
        // For demonstration purposes, let's just display a success message
        session()->flash('message', 'Files saved successfully!');
        $this->reset();
    }

    public function editRoom($roomId)
    {
        $this->edit($roomId);
        $this->showForm = true;
    }
    public function closeForm()
    {
        $this->showForm = false;
    }

    public function deleteRoom($roomId)
    {
        // Buscar la habitación por su ID
        $room = Room::findOrFail($roomId);

        // Eliminar todos los archivos asociados a la habitación desde el almacenamiento
        foreach ($room->files as $file) {
            Storage::disk('public')->delete($file->ruta);
        }

        // Eliminar la habitación
        $room->delete();

        // Mostrar un mensaje de éxito
        session()->flash('message', '¡La habitación y todos sus archivos asociados han sido eliminados correctamente!');
    }

    public function edit($roomId)
    {
        $room = Room::findOrFail($roomId);
        $this->editingRoomId = $room->id;
        $this->name_room = $room->name;
        $this->description = $room->description;
        $this->no_guest = $room->no_guest;
        $this->no_room = $room->no_room;
        $this->nigth_guest = $room->nigth_guest;
        $this->previews = $room->files
            ->map(function ($file) {
                return [
                    'url' => asset('storage/' . $file->ruta),
                    'type' => Str::startsWith($file->ruta, 'room-photos') ? 'image' : 'video',
                ];
            })
            ->toArray();
    }
    public function update()
    {
        // Validar si hay algún campo vacío
        if (empty($this->name_room) || empty($this->description) || empty($this->no_guest) || empty($this->no_room) || empty($this->nigth_guest)) {
            $this->message = '¡Debes completar todos los campos!';
        } else {
            // Validación de campos
            $this->validate([
                'name_room' => 'required',
                'description' => 'required',
                'no_guest' => 'required|numeric',
                'no_room' => 'required|numeric',
                'nigth_guest' => 'required|numeric',
            ]);

            // Buscar la habitación a editar
            $room = Room::findOrFail($this->editingRoomId);

            // Actualizar los datos de la habitación
            $room->update([
                'name' => $this->name_room,
                'description' => $this->description,
                'no_guest' => $this->no_guest,
                'no_room' => $this->no_room,
                'nigth_guest' => $this->nigth_guest,
            ]);

            // Eliminar las imágenes antiguas de la base de datos y del almacenamiento
            $room->files()->delete();
            foreach ($room->files as $file) {
                Storage::disk('public')->delete($file->ruta);
            }

            // Guardar las nuevas imágenes y eliminar las antiguas
            foreach ($this->files as $file) {
                $path = $file->store('room-photos', 'public');
                $room->files()->create(['ruta' => $path]);
            }

            // Resetear los campos y el ID de edición

            $this->resetInputs();
            $this->message = "¡La habitación {$room->name_room} ha sido actualizada!";
        }
    }

    public function resetInputs()
    {
        $this->name_room = '';
        $this->description = '';
        $this->no_guest = '';
        $this->no_room = '';
        $this->nigth_guest = '';
        $this->files = [];
        $this->previews = [];
    }
}
