<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->string('nombre_padre');
            $table->string('nombre_madre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('escuela');
            $table->integer('grado')->nullable();
            $table->string('grupo')->nullable();
            $table->integer('turno')->nullable();
            $table->integer('activo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
