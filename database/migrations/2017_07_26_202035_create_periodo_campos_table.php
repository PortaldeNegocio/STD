<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('FechaInicio');
            $table->timestamp('FechaFin');
            $table->integer('IdTrabajoCampo');
            $table->timestamps();

            $table->foreign('IdTrabajoCampo')->references('id')->on('trabajo_campos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodo_campos');
    }
}
