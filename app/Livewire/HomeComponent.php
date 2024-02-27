<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{
    public $open;

    public $section;

    public function mount()
    {
        $this->section = 'all'; // Por defecto, muestra la sección "Sobre nosotros"
    }

    public function render()
    {
        $users = User::all();

        $rooms = Room::with('files')->get();
        // No es necesario cargar las habitaciones nuevamente aquí, ya que se hizo en mount()
        return view('livewire.home-component', [
            'rooms' => $rooms,
            'users' => $users,
        ]);
    }
}
