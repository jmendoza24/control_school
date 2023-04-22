<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use DB;

class ListaAsistencia extends Component
{
    public $grupos = [];
    public $open = false; 

    protected $rules = [];


    public function mount(){
        $this->id_empresa = Auth::user()->id_empresa;
        $this->user_id = Auth::user()->id;
    }

    public function render(){

        $this->grupos = db::table('grupos as g')
                        ->join('camiones as c','c.id','g.camion')
                        ->where('chofer',$this->user_id)
                        ->orwhere('ayudante1',$this->user_id)
                        ->orwhere('ayudante2',$this->user_id)
                        ->selectraw('g.*, c.placa')
                        ->get();
                    
    $this->emit('mascaras');

        return view('livewire.lista-asistencia');
    }
}
