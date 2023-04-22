<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;
use App\Models\Camiones;
use App\Models\Empleados;
use App\Models\Users;
use App\Models\Grupo;
use App\Models\Grupo_alumnos;
use DB;
use Auth;


class CreateGrupos extends Component{
    
    public $query, $grupo_id = null, $datos_camion = null, $camiones = null;
    public $contacts, $alumnos = null, $camion;
    public $id_grupo = null, $nombre_grupo, $activo, $grupo_alumnos = null; 
    public $tabla_grupo = true, $grupos = []; 


    function nuevo_grupo(){
        $this->tabla_grupo = false;
        $this->resetValidation();
    }

    protected $rules = ['nombre_grupo'=>'required',
                        'camion'=>'required',
                        'activo'=>'required'];

    public function guardar(){
        $this->validate();
       $grupo =  Grupo::updateorcreate(['id'=>$this->id_grupo],
                              ['id_empresa'=>Auth::user()->id_empresa,
                               'nombre_grupo'=>$this->nombre_grupo,
                               'camion'=>$this->camion,
                               'activo'=>$this->activo]);
        //$this->reset();
        $this->id_grupo=$grupo->id;
        $this->tabla_grupo = false;
    
    }
     function editar($id){
        $data = null; 
        $this->datos_camion = Camiones::where('id',$this->camion)->first();
     }

    public function cancelar(){
        $this->tabla_grupo = true; 
        $this->id_grupo = null;
        $this->reset();    
    }

    public function mount(){
        $this->limpiar();
    }
    
    public function limpiar(){
        $this->query = '';
        $this->contacts = [];
    }
 
  
    public function usuario_seleccionado($id){
        
        Grupo_alumnos::updateorcreate([ 'alumno'=>$id,
                                        'grupo'=>$this->id_grupo,
                                        'id_empresa'=>Auth::user()->id_empresa],
                                       ['id_empresa'=>Auth::user()->id_empresa,
                                        'grupo'=>$this->id_grupo,
                                        'alumno'=>$id]);

        $this->query='';

    }
 
    public function updatedQuery(){
        $this->directorio = null;
        $this->user = null;
        if($this->query != '' && $this->query != ' ' && strlen($this->query) > 3) {
            $this->contacts = AlumnosModel::where('nombre', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
        }
    }

    function editar_grupo($id){
        $this->id_grupo = $id;
        $data = Grupo::where('id',$this->id_grupo)->first();
        $this->nombre_grupo = $data->nombre_grupo;
        $this->tabla_grupo = false;
        $this->camion = $data->camion;
        $this->activo = $data->activo;
        
    }

    public function render(){
        $this->camiones=Camiones::leftjoin('users as u', function ($join){
            $join->on('camiones.chofer','u.id');
            $join->on('u.tipo',db::raw('2'));
        })

        ->leftJoin('users as u2', function ($join) {
            $join->on('camiones.ayudante1','u2.id');
            $join->on('u2.tipo',db::raw('3'));
        })
        ->where('camiones.id_empresa',Auth::user()->id_empresa)
        ->selectraw('camiones.*, u.name as nom_chofer, u2.name as nom_ayudante')
        ->get(); 


        $this->datos_camion = Camiones::leftjoin('users as u','u.id','camiones.chofer')
                                ->leftjoin('users as u2','u2.id','camiones.ayudante1')
                                ->where('camiones.id',$this->camion)
                                ->selectraw('camiones.*, u.name as nom_chofer, u2.name as nombre_ayu')
                                ->first();

        $this->grupos = Grupo::where('id_empresa',Auth::user()->id_empresa)->get();
       // $this->alumnos = Grupo_alumnos::where('grupo',$this->id_grupo)->get();


        $this->grupo_alumnos=Grupo_alumnos::leftjoin('alumnos as a', function ($join){
            $join->on('grupo_alumnos.alumno', 'a.id');
        })

        ->leftjoin('escuelas as e', function ($join){
            $join->on('a.escuela', 'e.id');            
        })
        ->where('grupo_alumnos.grupo',$this->id_grupo)
        ->selectraw('a.nombre, e.nombre as nombre_escuela, a.grado, a.grupo')
        ->get();

        
        $this->emit('mascaras');
        return view('livewire.create-grupos');
    }


}
