<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;
use Auth;
use DB;

class CreateEmpleados extends Component
{
    public $empleados = null, $perfiles = null, $search = null;
    public $s_tabla = true;
    public $open_empleado = false, $open_delete = false, $delete_id = null; 
    public $id_empleados = null, $nombre, $tipo, $telefono, $email, $password, $re_password;

    protected $rules = ['nombre'=>'required',
                        'tipo'=>'required',
                        'telefono'=>'required',
                        'email'=>'required|email',
                        'password' => ['nullable', 'string', 'min:8'],
                        're_password' => ['nullable', 'required_with:password', 'same:password']
                        //'current_password' => ['required']
                        ];

    public function open_empleado(){
        //$this->open_empleado=true;
        $this->s_tabla = false;
    }

    public function guardar(){
        $this->validate();

        User::updateorcreate(['id'=>$this->id_empleados],
                                ['id_empresa'=>Auth::user()->id_empresa,
                                'name'=>$this->nombre,
                                'tipo'=>$this->tipo,
                                'email'=>$this->email,
                                'telefono'=>$this->telefono]);
        
        if($this->id_empleados == null){
            User::updateorcreate(['id'=>$this->id_empleados],
                        ['password'=>Hash::make($this->password)]);
        }

        $this->id_empleados=null;
        $this->s_tabla=true; 
    }

    public function editar($id){
        $this->s_tabla = false;
        $data = User::where('id',$id)->first();
        $this->id_empleados = $data->id;
        $this->nombre = $data->name;
        $this->tipo = $data->tipo;
        $this->telefono = $data->telefono;
        $this->email = $data->email;
        $this->s_tabla=false; 
    }

    public function eliminar($id){
        $this->delete_id = $id;
        //$this->open_delete = true;
    }

    public function deleteempleado(){
        User::where('id',$this->delete_id)->delete();
        $this->empleados=User::all();
        $this->open_delete=false;
    }

    function cancelar(){
        $this->delete_id =  null;
    }

    public function render(){
        //dd(Auth::user()->id_empresa);
        $this->empleados = User::leftjoin('perfiles as p','p.id','users.tipo')
                ->where('users.id_empresa',Auth::user()->id_empresa)
                ->selectraw('users.*, perfil')
                ->get();
        $this->perfiles =db::table('perfiles')->where('activo',1)->get();
        return view('livewire.create-empleados');
    }
}
