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
        $this->call(ProvinciasTableSeeder::class);
        $this->call(CantonsTableSeeder::class);
        $this->call(ParroquiasTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
    
    }
}
