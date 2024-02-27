<?php

namespace App\Livewire\Administrador\Services;

use App\Models\Room;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class ServicesAdminComponent extends Component
{
    use WithFileUploads;

    public $showForm;
    public $files = [];
    public $previews = [];
    public $message;


    public function render()
    {
        $rooms = Room::all();
        $services = Service::all();
        return view('livewire.administrador.services.services-admin-component', ['rooms' => $rooms, 'services' => $services]);
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


    public function openShowForm()
    {
        $this->showForm = true;
    }
    public function closeForm()
    {
        $this->showForm = false;
        return redirect('about-us-admin');
    }

    public function deleteService($serviceId)
    {
        // Buscar la habitación por su ID
        $service = Service::findOrFail($serviceId);

        // Eliminar todos los archivos asociados a la habitación desde el almacenamiento
        foreach ($service->services as $file) {
            Storage::disk('public')->delete($file->file_path);
        }

        // Eliminar la habitación
        $service->delete();

        // Mostrar un mensaje de éxito
        session()->flash('message', '¡La habitación y todos sus archivos asociados han sido eliminados correctamente!');
    }









}
