<?php

namespace App\Livewire\Administrador;

use App\Models\User;
use Livewire\Component;

class HomeAdminComponent extends Component
{
    public function render()
    {

        $users = User::all();
        return view('livewire.administrador.home-admin-component', ['users' => $users]);
    }
}
