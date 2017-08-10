<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajo_campos', function (Blueprint $table) {
         $table->increments('id');// no se necesita porque es 1 a 1
           // $table->integer('OrdenTrabajoId')->unsigned();
            //$table->primary('OrdenTrabajoId');

           // $table->primary('id');
            $table->integer('UsuarioIdResponsable')->unsigned();
            $table->text('EquiposUtilizados');  
            $table->mediumText('Operadores');  
            $table->dateTime('HoraEntrada');
            $table->dateTime('HoraSalida');
            $table->text('Observacion');  
            $table->timestamps();

          // $table->foreign('SolicitudEstudioId')->references('id')->on('orden_trabajos');
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
        Schema::dropIfExists('trabajo_campos');
    }
}
