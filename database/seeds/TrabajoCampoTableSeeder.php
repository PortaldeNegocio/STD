<?php

use Illuminate\Database\Seeder;
use STD\TrabajoCampo;

class TrabajoCampoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(TrabajoCampo::class, 50)->create();
    }
}
