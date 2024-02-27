<?php

namespace App\Livewire\Public;

use App\Models\Room;
use App\Models\Service;
use Livewire\Component;

class ServicesUsComponent extends Component
{
    public function render()
    {
        $rooms =  Room::all();

        $services =  Service::all();
        return view('livewire.public.services-us-component', ['rooms' => $rooms, 'services' => $services]);
    }
}
