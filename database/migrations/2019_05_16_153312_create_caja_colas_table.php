<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaColasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_colas', function (Blueprint $table) {
            $table->increments('id_caja_cola');
            $table->tinyInteger('caja')->unsigned();
            $table->tinyInteger('cola')->unsigned();
            $table->foreign('caja')->references('id_caja')->on('cajas');
            $table->foreign('cola')->references('id_cola')->on('colas');
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
        Schema::dropIfExists('caja_colas');
    }
}
