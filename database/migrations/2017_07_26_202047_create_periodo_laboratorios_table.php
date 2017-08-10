<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_laboratorios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('FechaInicio');
            $table->timestamp('FechaFin');
            $table->integer('IdTrabajoLaboratorio');
            $table->timestamps();

            $table->foreign('IdTrabajoLaboratorio')->references('id')->on('trabajo_laboratorios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodo_laboratorios');
    }
}
