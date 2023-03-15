<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\escuela;
use Auth;

class CreateEscuela extends Component {

    public $escuelas=null;
    public $open = false, $open_delete_escuela=false, $delete_id=null; 
    public $nombre, $direccion, $activo, $escuela_id = null, $escuela_elimina;

    protected $rules = ['nombre'=>'required',
                        'direccion'=>'required',
                        'activo'=>'required' ];

    public function nueva_escuela() {
        $this->open=true;
    }

    public function guardar(){
        $this->validate();

        escuela::updateorcreate(['id'=>$this->escuela_id], 
                                [ 'id_empresa'=>Auth::user()->id_empresa,
                                   'nombre'=>$this->nombre,
                                   'direccion'=>$this->direccion,
                                   'activo'=>$this->activo]);
        $this->open=false;
        $this->reset();
        $this->escuela_id=null;
    }

    public function editar($id){
        $data = escuela::where('id',$id)->first(); 
        $this->escuela_id = $data->id;
        $this->nombre = $data->nombre; 
        $this->direccion = $data->direccion; 
        $this->activo = $data->activo; 
        $this->open = true;
      
    }

    public function eliminar($id){
        $this->delete_id =$id;
        $this->open_delete_escuela = true;
        //escuela::where('id',$id)->delete();
        //$this->escuelas = escuela::all();
    }

    public function deleteescuela(){
        escuela::where('id',$this->delete_id)->delete();
        $this->escuelas=escuela::all();
        $this->open_delete_escuela=false;
    }

    function cancelar(){
        $this->open_delete_escuela = false;
        $this->delete_id=null;
    }

    public function render(){
        //dd(Auth::user()->id_empresa);
        $this->escuelas=escuela::where('id_empresa',Auth::user()->id_empresa)->get();
        return view('livewire.create-escuela');
    }
}
