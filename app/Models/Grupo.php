<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    
    public $table = 'grupos';
    public $fillable = ['id_empresa', 'nombre_grupo', 'camion', 'activo'];
}
