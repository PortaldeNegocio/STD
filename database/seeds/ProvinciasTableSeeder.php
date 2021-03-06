<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement("TRUNCATE TABLE provincias CASCADE");
          //delete provincias table records
        // DB::table('provincias')->truncate();
         //insert some dummy records
         DB::table('provincias')->insert([
			['id' => 1, 'provincia' =>  'AZUAY'],
			['id' => 2, 'provincia' =>  'BOLIVAR'],
			['id' => 3, 'provincia' =>  'CAÑAR'],
			['id' => 4, 'provincia' =>  'CARCHI'],
			['id' => 5, 'provincia' =>  'COTOPAXI'],
			['id' => 6, 'provincia' =>  'CHIMBORAZO'],
			['id' => 7, 'provincia' =>  'EL ORO'],
			['id' => 8, 'provincia' =>  'ESMERALDAS'],
			['id' => 9, 'provincia' =>  'GUAYAS'],
			['id' => 10, 'provincia' =>  'IMBABURA'],
			['id' => 11, 'provincia' =>  'LOJA'],
			['id' => 12, 'provincia' =>  'LOS RIOS'],
			['id' => 13, 'provincia' =>  'MANABI'],
			['id' => 14, 'provincia' =>  'MORONA SANTIAGO'],
			['id' => 15, 'provincia' =>  'NAPO'],
			['id' => 16, 'provincia' =>  'PASTAZA'],
			['id' => 17, 'provincia' =>  'PICHINCHA'],
			['id' => 18, 'provincia' =>  'TUNGURAHUA'],
			['id' => 19, 'provincia' =>  'ZAMORA CHINCHIPE'],
			['id' => 20, 'provincia' =>  'GALAPAGOS'],
			['id' => 21, 'provincia' =>  'SUCUMBIOS'],
			['id' => 22, 'provincia' =>  'ORELLANA'],
			['id' => 23, 'provincia' =>  'SANTO DOMINGO DE LOS TSACHILAS'],
			['id' => 24, 'provincia' =>  'SANTA ELENA'],
			['id' => 90, 'provincia' =>  'ZONAS NO DELIMITADAS']
         	]);
    }
}
