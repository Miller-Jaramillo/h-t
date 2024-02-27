<?php

namespace App\Livewire\Guest;

use App\Models\Guest;
use Livewire\Component;
use Livewire\WithPagination;

class TableGuestComponent extends Component
{
    use WithPagination;
    public $perPage = '5';

    public $message = '';

    public function render()
    {

        $guests = Guest::paginate(10);
        return view('livewire.guest.table-guest-component', ['guests' => $guests]);
    }
}
