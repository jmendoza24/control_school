<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;

class CreateAlumnos extends Component{
    public $open = false; 
    public $nombre, $edad, $nombre_padre, $nombre_madre, $direccion, $telefono,
            $correo, $escuela, $grado, $grupo, $turno, $activo,$nivel, $telefono2,
            $alumno_id = null;

    protected $rules = ['nombre'=>'required'];
    protected $listeners = ['editar_alumno'];

    public function guardar(){
        $this->validate();
        AlumnosModel::updateorcreate(['id'=>$this->alumno_id],
                                    ['nombre'=>$this->nombre,
                                    'direccion'=>$this->direccion,
                                    'nivel'=>$this->nivel,
                                    'escuela'=>$this->escuela,
                                    'grado'=>$this->grado,
                                    'grupo'=>$this->grupo,
                                    'turno'=>$this->turno,
                                    'nombre_padre'=>$this->nombre_padre,
                                    'nombre_madre'=>$this->nombre_madre,
                                    'telefono'=>$this->telefono,
                                    'telefono2'=>$this->telefono2,
                                    'correo'=>$this->correo,
                                    'activo'=>$this->activo]);
        $this->open = false;
        $this->reset();
        $this->alumno_id = null;
        $this->emit('actualiza_alumnos');


    }

    function editar_alumno($id){
        $data = AlumnosModel::where('id',$id)->first();
        $this->alumno_id = $data->id;
        $this->nombre = $data->nombre;
        $this->direccion = $data->direccion;
        $this->nivel = $data->nivel;
        $this->escuela = $data->escuela;
        $this->grado = $data->grado;
        $this->grupo = $data->grupo;
        $this->turno = $data->turno;
        $this->nombre_padre = $data->nombre_padre;
        $this->nombre_madre = $data->nombre_madre;
        $this->telefono = $data->telefono;
        $this->telefono2 = $data->telefono2;
        $this->correo = $data->correo;
        $this->activo = $data->activo;
        $this->open = true;
    }

    public function render(){
        
        return view('livewire.create-alumnos');
    }
}
