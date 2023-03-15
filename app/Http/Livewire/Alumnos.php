<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;

class Alumnos extends Component{
    
    public $alumnos = null, $delete_id = null, $open_delete = false;
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
        $this->delete_id =  $id;
        $this->open_delete = true;
    }

    function deletealumno(){
        AlumnosModel::where('id',$this->delete_id)->delete();
        $this->alumnos =  AlumnosModel::all();
        $this->open_delete = false;
    }

    function cancelar(){
     $this->open_delete = false;
     $this->delete_id =  null;   
    }

}
