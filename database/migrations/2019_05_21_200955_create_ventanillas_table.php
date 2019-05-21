<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventanillas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('areaID')->unsigned();
            $table->string('identificador', 15);
            $table->string('nombre', 35);
            $table->tinyInteger('estado');
            $table->foreign('areaID')->references('id')->on('areas');
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
        Schema::dropIfExists('ventanillas');
    }
}
