<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Variables;
use DB;
use Auth;

class ListaVariable extends Component
{
    public $variables = null;
    public $open = false; 
    public $var_id = null;

    protected $rules = [];

    function guard_variables($index, $id){
        $data = $this->variables[$index];
        Variables::updateorcreate(['id'=>$id],
                    ['id_empresa'=>Auth::user()->id_empresa,
                    'tipo'=>$data['id'],
                    'valores'=>$data['valores']]);
    }

    public function render(){
        $this->variables = db::table('variables_init as i')
                    ->leftjoin('lista_variables as v', 'i.id','v.tipo')
                    ->where('activo',1)
                    ->selectraw('i.*, v.valores, ifnull(v.id,0) as id_val')
                    ->get();

        return view('livewire.lista-variables');
    }
}
