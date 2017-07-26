<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('TipoDocumento', ['Cedula', 'RUC', 'Pasaporte'])->default('Cedula');
            $table->string('NumeroDocumento', 15);
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->boolean('Activo')->default('true');
                        
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
        Schema::dropIfExists('clientes');
    }
}
