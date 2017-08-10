<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_laboratorios', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('Fecha');
            $table->dateTime('FechaInicio');
            $table->dateTime('FechaFin');
            $table->string('Cantidad', 100);
            $table->integer('TrabajoLaboratorioId')->unsigned();
            $table->foreign('TrabajoLaboratorioId')->references('id')->on('trabajo_laboratorios');
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
        Schema::dropIfExists('bitacora_laboratorios');
    }
}
