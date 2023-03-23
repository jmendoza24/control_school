<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AlumnosModel;
use App\Models\Camiones;
use App\Models\Empleados;
use DB;
use Auth;


class CreateGrupos extends Component{
    
    public $open = false, $query, $grupo_id = null, $datos_camion = null, $camiones = null;
    public $contacts, $alumnos = null, $camion;
    public $highlightIndex;

    function nuevo_grupo(){
        $this->open = true;
    }

    public function render(){
        $this->alumnos = null;
        $this->camiones = Camiones::where('id_empresa',Auth::user()->id_empresa)->get();
        $this->datos_camion = Camiones::where('id',$this->camion)->first();
        return view('livewire.create-grupos');
    }

     public function mount()
    {
        $this->limpiar();
    }
    
    public function limpiar(){
        $this->query = '';
        $this->contacts = [];
        $this->highlightIndex = 0;
    }
 
    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->contacts) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }
 
    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->contacts) - 1;
            return;
        }
        $this->highlightIndex--;
    }
 
    public function selectContact()
    {
        $contact = $this->contacts[$this->highlightIndex] ?? null;
        if ($contact) {
            $this->redirect(route('show-contact', $contact['id']));
        }
    }
 
    public function updatedQuery(){
        $this->cat_trab = null;
        $this->directorio = null;
        $this->user = null;
        if($this->query != '' && $this->query != ' ' && strlen($this->query) > 3) {
            $this->contacts = AlumnosModel::where('nombre', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
        }
    }
}
