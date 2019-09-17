<?php

use Illuminate\Database\Seeder;

class DireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direccion')->insert(array( //DB para acceder a la base de datos
            'cod_ciudad' => 1,
            'direccio_domicilio' => '4ta calle 10-3 Zona 1 ',
            
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ));
    }
}
