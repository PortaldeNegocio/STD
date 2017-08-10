<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Cantidad', 100);
            $table->string('Vehiculo', 60);
            $table->string('Operadores', 100);
            $table->string('Viaticos', 100);
            $table->string('ValorTrabajo', 10);
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFin');
            $table->integer('OrdenTrabajoId')->unsigned();
            $table->foreign('OrdenTrabajoId')->references('id')->on('orden_trabajos');
            $table->integer('UsuarioId')->unsigned();
            $table->foreign('UsuarioId')->references('id')->on('users');
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
        Schema::dropIfExists('bitacora_campos');
    }
}
