<?php

namespace App\Livewire;

use Livewire\Component;


use App\Models\File;
use App\Models\Room;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class FormRoomComponent extends Component
{


    use WithFileUploads;

    public $files = [];
    public $previews = [];
    public $name_room;
    public $description;
    public $no_guest;
    public $no_room;
    public $nigth_guest;



    public $message="";


    public function render()
    {
        return view('livewire.form-room-component');
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



    public function submitForm()
    {
        // Validar si hay algún campo vacío
        if (
            empty($this->name_room) ||
            empty($this->description) ||
            empty($this->no_guest) ||
            empty($this->no_room) ||
            empty($this->nigth_guest) ||
            empty($this->files)
        ) {
            $this->message = "¡Debes completar todos los campos!";
        } else {
            // Validación de campos
            $this->validate([
                'name_room' => 'required',
                'description' => 'required',
                'no_guest' => 'required|numeric',
                'no_room' => 'required|numeric',
                'nigth_guest' => 'required|numeric',
                'files.*' => 'image|max:2048',
            ]);

            // Crear la habitación
            $room = Room::create([
                'name' => $this->name_room,
                'description' => $this->description,
                'no_guest' => $this->no_guest,
                'no_room' => $this->no_room,
                'nigth_guest' => $this->nigth_guest,

            ]);


            // Guardar las imágenes en storage y asociarlas a la habitación
            foreach ($this->files as $file) {
                $path = $file->store('room-photos', 'public');
                $room->files()->create(['ruta' => $path]);
            }

            // Resetear los campos
            $this->closeForm();


            $this->message = "¡La habitación {$room->name_room} ha sido publicada!";

        }
    }

    private function resetInputs()
    {
        $this->name_room = "";
        $this->description = "";
        $this->no_guest = "";
        $this->no_room = "";
        $this->nigth_guest = "";
        $this->files = [];
        $this->previews = [];
    }

    public function closeForm()
    {
        return redirect('administrar-habitaciones');
    }

}
