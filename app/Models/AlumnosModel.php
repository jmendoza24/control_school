<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnosModel extends Model
{
    use HasFactory;
    public $table = 'alumnos';
    protected $fillable = ['nombre','nombre_padre','nombre_madre','nivel','telefono2',
                            'direccion','telefono','telefono2','correo','escuela','grado',
                            'grupo','turno','activo'];
}
