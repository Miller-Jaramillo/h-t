<?php

namespace App\Livewire\Administrador\About;

use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUpdateComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $extension;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;
    public $files = [];
    public $previews = [];
    public $slogan;
    public $final_slogan;
    public $description;
    public $status;
    public $phone;
    public $address;
    public $department;
    public $city;
    public $photo_profile;
    public $cover_photo;
    public $message;

    public function mount()
    {
        $about = About::first();

        if ($about) {
            $this->name = $about->name;
            $this->email = $about->email;
            $this->extension = $about->extension;
            $this->whatsapp = $about->whatsapp;
            $this->facebook = $about->facebook;
            $this->instagram = $about->instagram;
            $this->tiktok = $about->tiktok;
            $this->slogan = $about->slogan;
            $this->final_slogan = $about->final_slogan;
            $this->description = $about->description;
            $this->status = $about->status;
            $this->phone = $about->phone;
            $this->address = $about->address;
            $this->department = $about->department;
            $this->city = $about->city;

            $this->previews = $about->hotelFiles
                ->map(function ($file) {
                    return [
                        'url' => asset('storage/' . $file->file_path),
                        'type' => Str::startsWith($file->file_path, 'hotel-files') ? 'image' : 'video',
                    ];
                })
                ->toArray();
        }
    }

    public function render()
    {
        return view('livewire.administrador.about.about-update-component');
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

    public function saveOrUpdate()
    {
        $about = About::firstOrNew();

        // Actualizar los datos del registro
        $about->name = $this->name;
        $about->email = $this->email;
        $about->extension = $this->extension;
        $about->whatsapp = $this->whatsapp;
        $about->facebook = $this->facebook;
        $about->instagram = $this->instagram;
        $about->tiktok = $this->tiktok;
        $about->description = $this->description;
        $about->slogan = $this->slogan;
        $about->final_slogan = $this->final_slogan;
        $about->status = $this->status;
        $about->phone = $this->phone;
        $about->address = $this->address;
        $about->department = $this->department;
        $about->city = $this->city;
        $about->save();

        // Guardar las nuevas imágenes/videos en hotel_files
        if ($this->files) {
            $about->hotelFiles()->delete();
            foreach ($this->files as $file) {
                $path = $file->store('hotel-files', 'public');
                $about->hotelFiles()->create([
                    'file_path' => $path,
                    'file_type' => $file->getMimeType(),
                ]);
            }
        }

        // Mostrar mensaje de éxito
        session()->flash('success', 'Información actualizada correctamente.');

        // Redireccionar a la página de edición
        return redirect()->back();
    }

    public function closeForm()
    {
        return redirect('about-us-admin');
    }
}
