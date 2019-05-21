<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtencionEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion_estados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('colaID')->unsigned();
            $table->integer('ventanillaFichaID')->unsigned();
            $table->integer('atencionActual');
            $table->foreign('colaID')->references('id')->on('colas');
            $table->foreign('ventanillaFichaID')->references('id')->on('ventanillas_fichas');
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
        Schema::dropIfExists('atencion_estados');
    }
}
