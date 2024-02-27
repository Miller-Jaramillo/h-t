<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\File;
use App\Models\Guest;
use App\Models\Room;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class FormGuestComponent extends Component
{

    use WithFileUploads;

    public $name_guest;
    public $identification;
    public $email;
    public $phone;
    public $message="";


    public function render()
    {
        return view('livewire.guest.form-guest-component');
    }

    public function submitForm()
    {
        // Validar si hay algún campo vacío
        if (
            empty($this->name_guest) ||
            empty($this->identification) ||
            empty($this->email) ||
            empty($this->phone)
        ) {
            $this->message = "¡Debes completar todos los campos!";
        } else {
            // Validación de campos
            $this->validate([
                'name_guest' => 'required',
                'identification' => 'required|numeric',
                'email' => 'required',
                'phone' => 'required|numeric',
            ]);

            // Crear la habitación
            $guest = Guest::create([
                'name' => $this->name_guest,
                'identification' => $this->identification,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);



            // Resetear los campos
            $this->resetInputs();
            $this->closeForm();


         $this->message = "¡El Huesped {$guest->guest} ha sido agregado!";
        }
    }

    private function resetInputs()
    {
        $this->name_guest = "";
        $this->identification = "";
        $this->email = "";
        $this->phone = "";

    }
    public function closeForm()
    {
        return redirect('administrar-huespedes');
    }
}
