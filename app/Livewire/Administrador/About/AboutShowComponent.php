<?php

namespace App\Livewire\Administrador\About;

use App\Models\About;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AboutShowComponent extends Component
{


    use WithFileUploads;

    public $name;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;
    public $files = [];
    public $previews = [];

    public $description;
    public $status;

    public $message;
    public $showForm;
    public $editForm;

    public $editAboutId;


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


    public function render()
    {
        $abouts = About::all();
        $users = User::all();
        return view('livewire.administrador.about.about-show-component', ['abouts' => $abouts, 'users' => $users]);
    }

    public function openShowForm()
    {
        $this->showForm = true;
    }

    public function editAbout($aboutId)
    {
        $this->edit($aboutId);
        $this->editForm = true;
    }

      public function closeForm()
    {
        return redirect('about-us-admin');
    }





    public function edit($aboutId)
    {
        $about = About::findOrFail($aboutId);
        $this->editAboutId = $about->id;
        $this->name = $about->name;
        $this->description = $about->description;


        $this->previews = $about->hotelFiles
            ->map(function ($file) {
                return [
                    'url' => asset('storage/' . $file->file_path),
                    'type' => Str::startsWith($file->file_path, 'hotel-files') ? 'image' : 'video',
                ];
            })
            ->toArray();
    }
    public function update()
    {
        // Validar si hay algún campo vacío
        if (empty($this->name) || empty($this->description))  {
            $this->message = '¡Debes completar todos los campos!';
        } else {
            // Validación de campos
            $this->validate([
                'name' => 'required',
                'description' => 'required',

            ]);

            // Buscar la habitación a editar
            $about = About::findOrFail($this->editAboutId);

            // Actualizar los datos de la habitación
            $about->update([
                'name' => $this->name,
                'description' => $this->description,


            ]);

            // Eliminar las imágenes antiguas de la base de datos y del almacenamiento
            $about->hotelFiles()->delete();
            foreach ($about->hotelFiles as $file) {
                Storage::disk('public')->delete($file->file_path);
            }



            foreach ($this->files as $file) {
                $fileType = Str::startsWith($file->getMimeType(), 'video') ? 'video' : 'image';
                $path = $file->store('hotel-files', 'public');
                $about->hotelFiles()->create([
                    'file_path' => $path,
                    'file_type' => $fileType,
                ]);
            }
            // Resetear los campos y el ID de edición
            return redirect('about-us-admin');

            $this->message = "¡La habitación {$about->name_room} ha sido actualizada!";
        }
    }

}
