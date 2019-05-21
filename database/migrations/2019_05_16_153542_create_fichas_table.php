<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('cola')->unsigned();
            $table->integer('numero')->unsigned();
            $table->string('codigo_ficha', 15);
            $table->boolean('atendido');
            $table->datetime('fecha');
            $table->timestamps();

            $table->foreign('cola')->references('id_cola')->on('colas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
