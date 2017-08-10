<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_finals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdOrdenTrabajo');
            $table->longText('url');
            $table->timestamps();

            $table->foreign('IdOrdenTrabajo')->references('id')->on('orden_trabajos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe_finals');
    }
}
