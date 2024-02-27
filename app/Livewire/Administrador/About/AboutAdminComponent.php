<?php

namespace App\Livewire\Administrador\About;

use App\Models\About;
use Livewire\Component;
use Livewire\WithPagination;

class AboutAdminComponent extends Component
{
    use WithPagination;
    public $perPage = '1';
    public $perPageEnviadas = '1';
    public $showFormNuevoAbout;
    public $showAbout = true;

    public $rooms;
    public $message;

    public function render()
    {

        $abouts = About::all();
        return view('livewire.administrador.about.about-admin-component', ['abouts' => $abouts]);
    }

    public function ShowFormNuevoAbout()
    {
        $this->showFormNuevoAbout = true;
        $this->showAbout = false;
    }

    // cmt: Cierra el formulario para agregar un nuevo admin
    public function closeForm()
    {
        $this->showFormNuevoAbout = false;
    }

    public function showAbout()
    {
        $this->showAbout = true;
        $this->showFormNuevoAbout = false;
    }
}
