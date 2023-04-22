<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo_alumnos extends Model
{
    use HasFactory;

    public $table = 'grupo_alumnos';
    public $fillable = ['id_empresa', 'grupo', 'alumno'];
}
