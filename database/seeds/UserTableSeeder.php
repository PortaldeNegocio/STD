<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;
		//delete users table records
         DB::statement("TRUNCATE TABLE users CASCADE");
         //insert some dummy records
         DB::table('users')->insert([
			[
			'id' => 1, 
			'name' =>  'Ramon Rivera', 
			'email' => 'user@mail.com',
			'password' => $password ?: $password = bcrypt('123456'),
        	'remember_token' => str_random(10),
			]			
			]);
    }
}
