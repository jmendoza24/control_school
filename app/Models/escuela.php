<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escuela extends Model
{
    use HasFactory;

    public $table='escuelas';
    public $fillable= ['id_empresa','nombre','direccion','activo'];
}

