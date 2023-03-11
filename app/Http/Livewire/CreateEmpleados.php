<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateEmpleados extends Component
{
    public $empleados = null;
    public $open = false; 

    


    public function render()
    {
        return view('livewire.create-empleados');
    }
}
