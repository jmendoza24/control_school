<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;
use App\Models\Variables;
use App\Models\User;
use Auth;
use DB;

class Alumnos extends Component{
    public $tabla = true;
    public $alumnos = null, $delete_id = null, $open_delete = false, $nivel_alum =null, $list_escuelas = null, $turno_alumn = null, $grupo_alum = null, $grado_alum = null, $datos_alumnos = null;
    
    public $nombre, $edad, $nombre_padre, $nombre_madre, $direccion, $telefono,
            $correo, $escuela, $grado, $grupo, $turno, $activo,$nivel, $telefono2,
            $alumno_id = null;

    protected $rules = ['nombre'=>'required',
                        'nivel'=>'required',
                        'escuela'=>'required',
                        'grado'=>'required',
                        'telefono'=>'required',
                        'activo'=>'required'];


    public function nuevo_alumno(){        
        $this->reset();
        $this->tabla = false; 
        $this->resetValidation();
                
    }

    public function actualiza_alumnos(){
        $this->alumnos =  AlumnosModel::all();
    }

    public function guardar(){
        $this->validate();
        AlumnosModel::updateorcreate(['id'=>$this->alumno_id],
                                    ['id_empresa'=>Auth::user()->id_empresa,
                                    'nombre'=>$this->nombre,
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
        $this->tabla = true;
        $this->reset();
        $this->alumno_id = null;
        


    }

    function editar($id){
        $this->resetValidation();
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

        $this->tabla = false; // oculta tabla
    }

    function eliminar($id){
        $this->delete_id =  $id;
    }

    function deletealumno(){
        AlumnosModel::where('id',$this->delete_id)->delete();
        $this->alumnos =  AlumnosModel::all();
        $this->open_delete = false;
    }

    function cancelar(){
     $this->delete_id =  null;
     $this->resetValidation();
     //$this->resetErrorBag();   
    }

    public function render(){
       // $this->alumnos =  AlumnosModel::all();
       
       $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',1]])->first();
       $this->nivel_alum=$data->valores;
        $this->list_escuelas=db::table('escuelas')->where('activo',1)->get();
        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',2]])->first(); 
        $this->grado_alum= $data->valores;
        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',3]])->first(); 
        $this->grupo_alum= $data->valores;
        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',4]])->first();
        $this->turno_alumn=$data->valores;

        $this->alumnos=AlumnosModel::leftjoin('escuelas as e', function ($join){
            $join->on('alumnos.escuela','e.id');
        })
        ->where('alumnos.id_empresa',Auth::user()->id_empresa)
        ->selectraw('alumnos.*, e.nombre as nom_escuela')
        ->get();

        return view('livewire.alumnos');
    }

}
