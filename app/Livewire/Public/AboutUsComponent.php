<?php

namespace App\Livewire\Public;

use App\Models\About;
use Livewire\Component;

class AboutUsComponent extends Component
{

    public function render()
    {

        $abouts = About::all();
        return view('livewire.public.about-us-component', ['abouts'=>$abouts]);
    }
}
