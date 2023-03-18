<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;
use App\Models\Camiones;
use App\Models\Empleados;
use DB;
use Auth;


class CreateGrupos extends Component{
    
    public $open = false;

    function nuevo_grupo(){
        $this->open = true;
    }

    public function render(){
        $this->camiones=Camiones::leftJoin('empleados as e', function ($join) {
                    $join->on('camiones.chofer','e.id');
                    $join->on('e.tipo',db::raw('2'));
                })
                ->leftJoin('empleados as e2', function ($join) {
                    $join->on('camiones.ayudante1','e2.id');
                    $join->on('e2.tipo',db::raw('3'));
                })
                ->where('camiones.id_empresa',Auth::user()->id_empresa)
                ->selectraw('camiones.*, e.nombre_completo as nombre_chofer, e2.nombre_completo as nom_ayudante')
                ->get();
        
                // dd($this->camiones);

        $this->choferes=Empleados::where([['id_empresa',Auth::user()->id_empresa],['tipo',2]])->get();
        $this->ayudantes=Empleados::where([['id_empresa',Auth::user()->id_empresa],['tipo',3]])->get();
        
        return view('livewire.create-grupos');
    }
}
