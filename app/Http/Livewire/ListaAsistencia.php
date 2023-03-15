<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaAsistencia extends Component
{
    public $alumos = null;
    public $open = false; 

    protected $rules = [];


    public function render()
    {
        return view('livewire.lista-asistencia');
    }
}
