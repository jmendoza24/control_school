<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleados;
use App\Models\Variables;
use Auth;

class CreateEmpleados extends Component
{
    public $empleados = null, $tipo_emp = null, $turno_empl=null;
    public $open_empleado = false, $open_delete = false, $delete_id = null; 
    public $id_empleados = null, $nombre_completo, $tipo, $telefono, $direccion, $escuelas, $turno,$correo, $password;

    protected $rules = ['nombre_completo'=>'required',
                        'tipo'=>'required',
                        'telefono'=>'required',
                        'direccion'=>'required',
                        'escuelas'=>'required',
                        'turno'=>'required',
                        'correo'=>'required',
                        'password'=>'required'];

    public function open_empleado(){
        $this->open_empleado=true;
    }

    public function guardar(){
        $this->validate();

        Empleados::updateorcreate(['id'=>$this->id_empleados],
                                ['id_empresa'=>Auth::user()->id_empresa,
                                'nombre_completo'=>$this->nombre_completo,
                                'tipo'=>$this->tipo,
                                'telefono'=>$this->telefono,
                                'direccion'=>$this->direccion,
                                'escuelas'=>$this->escuelas,
                                'turno'=>$this->turno,
                                'correo'=>$this->correo,
                                'password'=>$this->password]);

        $this->open_empleado=false;
        $this->reset();
        $this->id_empleados=null;
    }

    public function editar($id){
        $data = Empleados::where('id',$id)->first();
        $this->id_empleados = $data->id;
        $this->nombre_completo = $data->nombre_completo;
        $this->tipo = $data->tipo;
        $this->telefono = $data->telefono;
        $this->direccion = $data->direccion;
        $this->escuelas = $data->escuelas;
        $this->turno = $data->turno; 
        $this->correo = $data->correo;
        $this->password =$data->password;
        $this->open_empleado=true; 
    }

    public function eliminar($id){
        $this->delete_id = $id;
        $this->open_delete = true;
    }

    public function deleteempleado(){
        Empleados::where('id',$this->delete_id)->delete();
        $this->empleados=Empleados::all();
        $this->open_delete=false;
    }

    function cancelar(){
        $this->open_delete = false;
        $this->delete_id =  null;   
       }

    public function render(){
        //dd(Auth::user()->id_empresa);
        $this->empleados=Empleados::where('id_empresa',Auth::user()->id_empresa)->get();
        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',5]])->first(); 
        $this->tipo_emp= $data->valores;
        $data = Variables::where([['id_empresa',Auth::user()->id_empresa],['tipo',4]])->first();
        $this->turno_empl=$data->valores;
        return view('livewire.create-empleados');
    }
}
