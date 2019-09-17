<?php

use Illuminate\Database\Seeder;
use App\Ciudad; 
class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
            'ciudad_nombre' => 'Ciudad de Guatemala',
            'cod_pais' => 502,
           
        ],
    );
    Ciudad::insert($data);
    }
}
