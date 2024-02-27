<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class HuespedesComponent extends Component
{
    use WithPagination;
    public $perPage = '1';
    public $perPageEnviadas = '1';
    public $showFormNuevoHuesped;
    public $showFormPropuestasAprobadas;

    public $showTablaHuespedes = true;

    public $nombreSeccion = "Mis Propuestas Aprobadas";

    protected $listeners = ['openFormPropuestasEnviadas'];

    public function render()
    {
        return view('livewire.guest.huespedes-component');
    }

     // cmt: Abre el formulario para agregar un nuevo admin
     public function openFormNuevoHuesped()
     {
         $this->showFormNuevoHuesped = true;
         $this->showFormPropuestasAprobadas = false;
         $this->showTablaHuespedes = false;
     }

     // cmt: Cierra el formulario para agregar un nuevo admin
     public function closeForm()
     {
         $this->showFormNuevoHuesped = false;
     }

     public function openTablaHuespedes()
     {
         $this->showTablaHuespedes = true;
         $this->showFormNuevoHuesped = false;
         $this->showFormPropuestasAprobadas = false;
     }

     public function closeFormPropuestasEnviadas()
     {
         $this->showTablaHuespedes = false;

     }


     public function openFormPropuestasAprobadas()
     {
         $this->showFormPropuestasAprobadas = true;
         $this->showFormNuevoHuesped = false;
         $this->showTablaHuespedes = false;
     }

     public function closeFormPropuestasAprobadas()
     {
         $this->showFormPropuestasAprobadas = false;
     }

}




