<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->tinyInteger('caja')->unsigned();
            $table->boolean('admin');
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('usuario', 30);
            $table->string('codigo', 30);
            $table->string('telefono', 10)->nullable();
            $table->string('correo', 50);
            $table->foreign('caja')->references('id_caja')->on('cajas');
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
        Schema::dropIfExists('usuarios');
    }
}
