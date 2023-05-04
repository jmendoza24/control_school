<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asistencia;
use Carbon\Carbon;
use Auth;
use DB;


class ListaAsistencia extends Component
{
    public $grupos = [], $alumnos = [];
    public $open = false, $grupo_id = null; 

    protected $rules = [];


    public function mount(){
        $this->id_empresa = Auth::user()->id_empresa;
        $this->user_id = Auth::user()->id;
    }

    function ver_grupo($id){
        $this->open = true;
        $this->grupo_id = $id;
        $this->alumnos = db::table('grupo_alumnos as a')
                        ->join('alumnos as l', 'l.id','a.alumno')
                        ->where('a.grupo',$this->grupo_id)
                        ->selectraw('a.*,l.nombre')
                        ->get();
        
    }

    function ingreso($id){
        $fecha = date('Y-m-d H:i:s');

        $data = db::table('grupo_alumnos')->where('id',$id)->first();
        
        $existe = Asistencia::where([['id_alumno',$data->alumno],['created_at','>=',date('Y-m-d')]])->count();
        $alumno = Asistencia::where([['id_alumno',$data->alumno],['created_at','>=',date('Y-m-d')]])->first();
        
        if($existe > 0 ){
            $actualiza = Asistencia::where('id',$alumno->id);

            if($alumno->fecha_recoleccion != null){ 
                $actualiza->update(['fecha_entrega'=>$fecha]); 
            }
            
            if($alumno->fecha_recoleccion != null && $alumno->fecha_entrega != null){ 
                $actualiza->update(['fecha_recoleccion_2'=>$fecha]); 
            }
            
            if($alumno->fecha_recoleccion != null && $alumno->fecha_entrega != null && $alumno->fecha_recoleccion_2 != null){ 
                $actualiza->update(['fecha_entrega_2'=>$fecha]); 
            }

        }else{
            Asistencia::updateorcreate(['id_empresa'=>Auth::user()->id_empresa,
                                        'id_alumno'=>$data->alumno],
                                        ['id_empresa'=>Auth::user()->id_empresa,
                                        'id_alumno'=>$data->alumno,
                                        //'id_camion'=>$data->camion,
                                        'fecha_recoleccion'=>$fecha]);
        }
        /** 
         */
        
    }

    public function render(){

        $this->grupos = db::table('grupos as g')
                        ->join('camiones as c','c.id','g.camion')
                        ->where('chofer',$this->user_id)
                        ->orwhere('ayudante1',$this->user_id)
                        ->orwhere('ayudante2',$this->user_id)
                        ->selectraw('g.*, c.placa')
                        ->get();

        return view('livewire.lista-asistencia');
    }
}
