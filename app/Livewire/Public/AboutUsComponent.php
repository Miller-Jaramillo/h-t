<?php

namespace App\Livewire\Public;

use App\Models\About;
use App\Models\User;
use Livewire\Component;

class AboutUsComponent extends Component
{

    public function render()
    {

        $abouts = About::all();
        $users = User::all();
        return view('livewire.public.about-us-component', ['abouts'=>$abouts, 'users'=>$users]);
    }
}
