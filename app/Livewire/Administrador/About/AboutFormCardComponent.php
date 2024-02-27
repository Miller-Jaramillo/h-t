<?php

namespace App\Livewire\Administrador\About;

use App\Models\About;
use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;

class AboutFormCardComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;
    public $files = [];
    public $previews = [];
    public $message;


    public function render()
    {
        return view('livewire.administrador.about.about-form-card-component');
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

    public function submitForm()
    {
        // Validar si hay algún campo vacío
        if (empty($this->name) || empty($this->description) || empty($this->files)) {
            $this->message = '¡Debes completar todos los campos!';
        } else {
            // Validación de campos
            $this->validate([
                'name' => 'required',
                'description' => 'required',
                'files.*' => 'image|max:2048',
            ]);

            // Crear la instancia de About
            $about = new About();
            $about->name = $this->name;
            $about->description = $this->description;
            $about->whatsapp = $this->whatsapp;
            $about->facebook = $this->facebook;
            $about->instagram = $this->instagram;
            $about->tiktok = $this->tiktok;
            $about->status = 'Abierto'; // Valor por defecto

            // Guardar la instancia de About
            $about->save();

            foreach ($this->files as $file) {
                $fileType = Str::startsWith($file->getMimeType(), 'video') ? 'video' : 'image';
                $path = $file->store('hotel-files', 'public');
                $about->hotelFiles()->create([
                    'file_path' => $path,
                    'file_type' => $fileType,
                ]);
            }

            

            // Resetear los campos
            $this->reset(['name', 'description', 'whatsapp', 'facebook', 'instagram', 'tiktok', 'files', 'previews']);

            $this->message = "¡El registro ha sido creado!";
        }
    }

}
