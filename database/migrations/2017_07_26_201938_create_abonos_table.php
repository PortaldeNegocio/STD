<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MetodoPago');
            $table->string('Total');
            $table->string('NumeroCuenta');
            $table->dateTime('Fecha');
            $table->integer('OrdenTrabajoId')->unsigned();
            $table->foreign('OrdenTrabajoId')->references('id')->on('orden_trabajos');
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
        Schema::dropIfExists('abonos');
    }
}
