<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentanillasFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventanillas_fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ventanillaID')->unsigned();
            $table->integer('fichaID')->unsigned();
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->foreign('ventanillaID')->references('id')->on('ventanillas');
            $table->foreign('fichaID')->references('id')->on('fichas');
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
        Schema::dropIfExists('ventanillas_fichas');
    }
}
