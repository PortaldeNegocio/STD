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
         //$table->increments('id');// no se necesita porque es 1 a 1
            $table->integer('orden_trabajo_id')->unsigned();
            $table->primary('orden_trabajo_id');

           // $table->primary('id');
            $table->integer('UsuarioIdResponsable')->unsigned();
            $table->text('EquiposUtilizados');  
            $table->mediumText('Operadores');  
/*            $table->dateTime('HoraEntrada');
            $table->dateTime('HoraSalida');*/
            $table->text('Observacion');  
            $table->timestamps();

            $table->foreign('orden_trabajo_id')->references('id')->on('orden_trabajos')->onDelete('cascade');
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
