<?php

use Illuminate\Database\Seeder;
use App\Pais; 
class PaisTableSeeder extends Seeder
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
            'cod_pais' => 502,
            'pais_nombre' => 'Guatemala',
            'pais_cuota' => 100.00,
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
       ], 

       [
        'cod_pais' => 503,
        'pais_nombre' => 'El salvador',
        'pais_cuota' => 100.00,
        'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
        'updated_at'=> \Carbon\Carbon::now()
   ]


    );

    Pais::insert($data);
    }
}
