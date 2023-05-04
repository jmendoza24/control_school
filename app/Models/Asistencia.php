<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    
    public $table = 'alumnos_asistencia';    
    public $fillable = ['id_empresa', 
                        'id_camion',
                        'id_alumno',
                        'fecha_recoleccion',
                        'fecha_entrega',
                        'fecha_recoleccion_2',
                        'fecha_entrega_2',
                        'transferencia',
                        'camion',
                        'comentarios'];
    
}
