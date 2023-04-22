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
    public $open_empleado = false, $delete_id = null; 
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
        $this->reset();
        $this->s_tabla = false;
        $this->resetValidation();
    }

    public function guardar(){
        $this->validate();

        $user =  User::updateorcreate(['id'=>$this->id_empleados],
                                ['id_empresa'=>Auth::user()->id_empresa,
                                'name'=>$this->nombre,
                                'tipo'=>$this->tipo,
                                'email'=>$this->email,
                                'telefono'=>$this->telefono]);
        
        if($this->id_empleados == null){
            User::updateorcreate(['id'=>$user->id],
                        ['password'=>Hash::make($this->password)]);
        }
        $this->s_tabla=true; 
        $this->reset();
        $this->id_empleados=null;
    }

    public function editar($id){
        $this->resetValidation();
        $this->s_tabla = false;
        $data = User::where('id',$id)->first();
        $this->id_empleados = $data->id;
        $this->nombre = $data->name;
        $this->tipo = $data->tipo;
        $this->telefono = $data->telefono;
        $this->email = $data->email;
    }

    public function eliminar($id){
        $this->delete_id = $id;
    }

    public function deleteempleado(){
        User::where('id',$this->delete_id)->delete();
        $this->empleados=User::all();
    }

    function cancelar(){
        $this->delete_id =  null;
        $this->reset();
    }

    public function render(){
        //dd(Auth::user()->id_empresa);
        //$this->empleados = User::all();
        $this->empleados = User::leftjoin('perfiles as p','p.id','users.tipo')
                ->where('users.id_empresa',Auth::user()->id_empresa)
                ->selectraw('users.*, perfil')
                ->get();
        $this->perfiles =db::table('perfiles')->where('activo',1)->get();

        
        $this->emit('mascaras');
        return view('livewire.create-empleados');
    }
}
