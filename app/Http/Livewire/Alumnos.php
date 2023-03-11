<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;

class Alumnos extends Component{
    
    public $alumnos = null;
    protected $listeners = ['actualiza_alumnos'];

    public function actualiza_alumnos(){
        $this->alumnos =  AlumnosModel::all();
    }

    public function render(){
        $this->alumnos =  AlumnosModel::all();
        return view('livewire.alumnos');
    }

    function editar($id){
        $this->emit('editar_alumno',$id);
    }

    function eliminar($id){
        AlumnosModel::where('id',$id)->delete();
        $this->alumnos =  AlumnosModel::all();
    }
}
