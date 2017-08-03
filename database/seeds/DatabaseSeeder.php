<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(ClientesTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
