<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class InfReservasComponent extends Component
{



    public function render()
    {
        $rooms =  Room::all();
        $users = User::all();
        return view('livewire.inf-reservas-component', ['rooms' => $rooms, 'users' => $users]);
    }

}
