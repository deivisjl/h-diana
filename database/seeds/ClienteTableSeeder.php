<?php

use Illuminate\Database\Seeder;
use App\Cliente; 
class ClienteTableSeeder extends Seeder
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
            'cliente_nombre' => 'ana maria ',
            'cliente_primerApellido' => 'perez  ',
            'cliente_segundoApellido' => 'perez',
            'cliente_direccion' => 'Zona 10 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'ana@gmail.es',
            'cliente_nit' => '6389652',
            'asociado_membrecia' => 5,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'juan luis  ',
            'cliente_primerApellido' => 'perez  ',
            'cliente_segundoApellido' => 'guerra',
            'cliente_direccion' => '14 avenida Zona 1 ', 
            'cliente_telefono' => '2032569',
            'cliente_correo' => 'luis@gmail.es',
            'cliente_nit' => '2356895',
            'asociado_membrecia' => 7,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'cliente_nombre' => ' ariana mariana ',
            'cliente_primerApellido' => 'enrriquez  ',
            'cliente_segundoApellido' => 'ramirez',
            'cliente_direccion' => 'Zona 1 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'mari@gmail.es',
            'cliente_nit' => '8965326',
            'asociado_membrecia' => 10,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'catarina ',
            'cliente_primerApellido' => 'perez  ',
            'cliente_segundoApellido' => 'perez',
            'cliente_direccion' => 'Zona 10 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'cata@gmail.es',
            'cliente_nit' => '6389652',
            'asociado_membrecia' => 10,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'eugenia ',
            'cliente_primerApellido' => 'perez  ',
            'cliente_segundoApellido' => 'dervez',
            'cliente_direccion' => 'Zona 10 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'eug12@gmail.es',
            'cliente_nit' => '6389652',
            'asociado_membrecia' => 15,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'barbara  ',
            'cliente_primerApellido' => 'arroche  ',
            'cliente_segundoApellido' => 'perez',
            'cliente_direccion' => 'Zona 3 14 avenida', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'barb@gmail.es',
            'cliente_nit' => '2325648',
            'asociado_membrecia' => 14,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'sabrina ',
            'cliente_primerApellido' => 'navarro  ',
            'cliente_segundoApellido' => 'guitierrez',
            'cliente_direccion' => 'Zona 10 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'sab@gmail.es',
            'cliente_nit' => '6389652',
            'asociado_membrecia' => 14,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'cliente_nombre' => 'carlota ',
            'cliente_primerApellido' => 'rodenas  ',
            'cliente_segundoApellido' => 'sanchez ',
            'cliente_direccion' => 'Zona 10 14-35 ', 
            'cliente_telefono' => '20125689',
            'cliente_correo' => 'ana@gmail.es',
            'cliente_nit' => '6389652',
            'asociado_membrecia' => 13,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

       
        );

        Cliente::insert($data);
 
    }
}
