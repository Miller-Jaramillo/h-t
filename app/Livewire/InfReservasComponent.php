<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class InfReservasComponent extends Component
{



    public function render()
    {
        $rooms =  Room::all();
        return view('livewire.inf-reservas-component', ['rooms' => $rooms]);
    }

}
