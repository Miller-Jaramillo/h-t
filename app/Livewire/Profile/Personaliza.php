<?php

namespace App\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Personaliza extends Component
{

    public $saved = false;

    public $phone;
    public $extension;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $tiktok;
    public $description;
    public $cover_photo;
    public $slogan;
    public $final_slogan;
    public $status;
    public $address;
    public $department;
    public $city;

    public function render()
    {
        return view('livewire.profile.personaliza');
    }



    public function mount()
    {
        $user = Auth::user();
        $this->slogan = $user->slogan;
        $this->final_slogan = $user->final_slogan;
    }

    public function updatePersonaliza()
    {
        $user = Auth::user();
        $user->update([
            'slogan' => $this->slogan,
            'final_slogan' => $this->final_slogan,


        ]);

        $this->saved = true;

        session()->flash('message', 'User updated successfully.');
    }

}
