<?php

use Illuminate\Database\Seeder;
use STD\SolicitudEstudio;

class SolicitudEstudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SolicitudEstudio::class, 50)->create();
    }
}
