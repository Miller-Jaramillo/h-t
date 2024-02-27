<?php

namespace App\Livewire\Administrador\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class ServicesFormComponent extends Component
{
    use WithFileUploads;

    public $showForm;
    public $files = [];
    public $previews = [];
    public $message;

    public $name;

    public $description;
    public $happy_message;
    public $status;

    public function render()
    {
        $services = Service::all();

        return view('livewire.administrador.services.services-form-component', ['services' => $services]);
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
            $service = new Service();
            $service->name = $this->name;
            $service->happy_message = $this->happy_message;
            $service->description = $this->description;

            $service->status = 'Disponible'; // Valor por defecto

            // Guardar la instancia de service
            $service->save();

            foreach ($this->files as $file) {
                $fileType = Str::startsWith($file->getMimeType(), 'video') ? 'video' : 'image';
                $path = $file->store('service-files', 'public');
                $service->services()->create([
                    'file_path' => $path,
                    'file_type' => $fileType,
                ]);
            }

            // Resetear los campos
            $this->closeForm();

            $this->message = '¡El registro ha sido creado!';
        }
    }



    public function closeForm()
    {
        $this->showForm = false;
        return redirect('services-admin');
    }
}
