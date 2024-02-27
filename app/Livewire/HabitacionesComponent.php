<?php

namespace App\Livewire;

use App\Models\File;
use App\Models\Room;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class HabitacionesComponent extends Component
{


    use WithPagination;
    public $perPage = '1';
    public $perPageEnviadas = '1';
    public $showFormNuevaHabitacion;
    public $showFormPropuestasAprobadas;

    public $showTablaHabitaciones = true;



    public $rooms;

    public function mount()
    {
        // Cargar las habitaciones con los archivos al montar el componente
        $this->rooms = Room::with('files')->get();
    }

    public function render()
    {
        return view('livewire.habitaciones-component');
    }


    // cmt: Abre el formulario para agregar un nuevo admin
    public function openFormNuevaHabitacion()
    {
        $this->showFormNuevaHabitacion = true;
        $this->showFormPropuestasAprobadas = false;
        $this->showTablaHabitaciones = false;
    }

    // cmt: Cierra el formulario para agregar un nuevo admin
    public function closeForm()
    {
        $this->showFormNuevaHabitacion = false;
    }

    public function openTablaHabitaciones()
    {
        $this->showTablaHabitaciones = true;
        $this->showFormNuevaHabitacion = false;
        $this->showFormPropuestasAprobadas = false;
    }

    public function closeFormPropuestasEnviadas()
    {
        $this->showTablaHabitaciones = false;

    }


    public function openFormPropuestasAprobadas()
    {
        $this->showFormPropuestasAprobadas = true;
        $this->showFormNuevaHabitacion = false;
        $this->showTablaHabitaciones = false;
    }

    public function closeFormPropuestasAprobadas()
    {
        $this->showFormPropuestasAprobadas = false;
    }


}
