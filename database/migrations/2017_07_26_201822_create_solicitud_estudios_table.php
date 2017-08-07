<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Descripcion', 100);
            $table->integer('cliente_id')->unsigned();
            $table->string('Obra',100);           
            $table->string('Direccion',150);
            $table->string('Referencia',200);
            $table->string('Coordenadas',50);
            $table->string('Contacto',100);
            $table->decimal('CostoObra', 9, 2);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_estudios');
    }
}
