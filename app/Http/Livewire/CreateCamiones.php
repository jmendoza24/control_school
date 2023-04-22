<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Camiones;
use App\Models\Empleados;
use App\Models\Users;
use App\Models\Variables;
use Auth; 
use DB;

class CreateCamiones extends Component
{
    public $camiones=null, $choferes = null, $ayudantes = null, $turno_camiones = null;
    public $open=false, $open_delete_camiones = false, $delete_id=null;
    public $id_camiones = null, $placa, $serie, $chofer, $ayudante1, $ayudante2, $turno, $telefono1, $telefono2, $ruta, $activo;
    public $tabla = true;

    protected $rules = ['placa'=>'required',
                        'serie'=>'required',
                        'chofer'=>'required',
                        'ayudante1'=>'required',
                        'turno'=>'required',
                        'telefono1'=>'required',
                        'telefono2'=>'required',
                        'ruta'=>'required',
                        'activo'=>'required'];

    public function nuevo_camion() {     
        $this->reset();
        $this->tabla=false;
        $this->resetValidation();
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
        
        $this->tabla=true;
        $this->reset();
        $this->id_camiones=null;

    }

    public function editar($id){
        $this->resetValidation();
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
        $this->tabla = false;

    }

    public function eliminar($id){
        $this->delete_id=$id;
        
        //Camiones::where('id',$id)->delete();
        //$this->Camiones = camiones::all();
    }

    public function deletecamion(){
        Camiones::where('id',$this->delete_id)->delete();
        $this->camiones=Camiones::all();
    }

    function cancelar(){
        $this->delete_id=null;
        $this->reset();
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
        ->selectraw('camiones.*, u.name as nombre_chofer, u2.name as nom_ayudante')
        ->get();
        
        $this->choferes=db::table('users')->where('tipo',2)->get();
        $this->ayudantes=db::table('users')->where('tipo',3)->get();

        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',4]])->first();
        $this->turno_camiones=$data->valores;
        $this->emit('mascaras');

        return view('livewire.create-camiones');
    }
}
