<?php

use Illuminate\Database\Seeder;
use STD\TrabajoLaboratorio;

class TrabajoLaboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(TrabajoLaboratorio::class, 50)->create();
    }
}
