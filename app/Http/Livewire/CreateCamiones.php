<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Camiones;
use App\Models\Empleados;
use Auth; 
use DB;

class CreateCamiones extends Component
{
    public $camiones=null, $choferes = null, $ayudantes = null;
    public $open=false, $open_delete_camiones = false, $delete_id=null;
    public $id_camiones = null, $placa, $serie, $chofer, $ayudante1, $ayudante2, $turno, $telefono1, $telefono2, $ruta, $activo;
    
    protected $rules = ['placa'=>'required',
                        'serie'=>'required',
                        'chofer'=>'required',
                        'ayudante1'=>'required',
                        'ayudante2'=>'required',
                        'turno'=>'required',
                        'telefono1'=>'required',
                        'telefono2'=>'required',
                        'ruta'=>'required'];

    public function nuevo_camion() {
        $this->open=true;
    }

    public function guardar(){
        $this->validate();

        Camiones::updateorcreate(['id'=>$this->id_camiones],
                                 ['id_empresa'=>Auth::user()->id_empresa,
                                  'placa'=>$this->placa,
                                  'serie'=>$this->serie,
                                  'chofer'=>$this->chofer,
                                  'ayudante1'=>$this->ayudante1,
                                  'ayudante2'=>$this->ayudante2,
                                  'turno'=>$this->turno,
                                  'telefono1'=>$this->telefono1,
                                  'telefono2'=>$this->telefono2,
                                  'ruta'=>$this->ruta,
                                  'activo'=>$this->activo]);
        
        $this->open=false;
        $this->reset();
        $this->id_camiones=null;

    }

    public function editar($id){
        $data = Camiones::where('id',$id)->first();
        $this->id_camiones = $data->id;
        $this->placa = $data->placa;
        $this->serie = $data->serie;
        $this->chofer = $data->chofer;
        $this->ayudante1 = $data->ayudante1;
        $this->ayudante2 = $data->ayudante2;
        $this->turno = $data->turno;
        $this->telefono1 = $data->telefono1;
        $this->telefono2 = $data->telefono2;
        $this->ruta = $data->ruta;
        $this->activo = $data->activo;
        $this->open = true;

    }

    public function eliminar($id){
        $this->delete_id=$id;
        $this->open_delete_camiones = true;
        
        //Camiones::where('id',$id)->delete();
        //$this->Camiones = camiones::all();
    }

    public function deletecamion(){
        Camiones::where('id',$this->delete_id)->delete();
        $this->camiones=Camiones::all();
        $this->open_delete_camiones=false;
    }

    function cancelar(){
        $this->open_delete_camiones=false;
        $this->delete_id=null;
    }

    public function render(){
        // dd(Auth::user()->id_empresa);
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
        return view('livewire.create-camiones');
    }
}
