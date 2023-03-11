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
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_empresa');
            $table->string('placa');
            $table->string('serie');
            $table->integer('chofer');
            $table->integer('ayudante1');
            $table->integer('ayudante2');
            $table->integer('turno');
            $table->string('telefono1',13);
            $table->string('telefono2',13);
            $table->string('ruta',250);            
            $table->integer('activo');
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
        Schema::dropIfExists('camiones');
    }
};
