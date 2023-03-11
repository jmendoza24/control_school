<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camiones extends Model
{
    use HasFactory;
    
    public $table = 'camiones';    
    public $fillable = ['id_empresa','placa','serie','chofer','ayudante1','ayudante2','turno','telefono1','telefono2','ruta','activo'];
    
}
