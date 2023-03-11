<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    
    public $table = 'empleados';
    public $fillable = ['nombre_completo', 'tipo','telefono','direccion','escuelas','turno','correo','password'];
}
