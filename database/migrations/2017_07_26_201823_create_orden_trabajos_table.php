<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solicitud_estudio_id')->unsigned();
            $table->integer('UsuarioIdAutorizado')->unsigned();
            $table->integer('UsuarioIdResponsable')->unsigned();
            $table->string('Descripcion',100); 
            $table->dateTime('Fecha');
            $table->string('RecibidoPor',100);
            $table->enum('Estado', ['En Espera', 'En Proceso', 'En Ejecución', 'Finalizado', 'Anulado'])->default('En Espera');
            $table->text('Observacion');
            $table->decimal('Extras', 9, 2);  
            $table->timestamps();

            $table->foreign('solicitud_estudio_id')->references('id')->on('solicitud_estudios');
            $table->foreign('UsuarioIdAutorizado')->references('id')->on('users');
            $table->foreign('UsuarioIdResponsable')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_trabajos');
    }
}
