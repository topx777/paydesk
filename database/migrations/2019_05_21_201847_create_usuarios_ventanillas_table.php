<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosVentanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_ventanillas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuarioID')->unsigned();
            $table->integer('ventanillaID')->unsigned();
            $table->integer('horarioID')->unsigned();
            $table->integer('diaID')->unsigned();
            $table->foreign('usuarioID')->references('id')->on('usuarios');
            $table->foreign('ventanillaID')->references('id')->on('ventanillas');
            $table->foreign('horarioID')->references('id')->on('horarios');
            $table->foreign('diaID')->references('id')->on('dias');
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
        Schema::dropIfExists('usuarios_ventanillas');
    }
}
