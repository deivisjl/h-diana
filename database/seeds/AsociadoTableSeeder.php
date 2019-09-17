<?php

use Illuminate\Database\Seeder;
use App\Asociado;
class AsociadoTableSeeder extends Seeder
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
            'asociado_cui' => '3251458965235',
            'asociado_nombre' => 'Diana',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 0,
            'id_nivel' => 9,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'asociado_cui' => '2125478965326',
            'asociado_nombre' => 'Cecilia ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 1,
            'id_nivel' => 8,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '3214578965235',
            'asociado_nombre' => 'Jimena ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 2,
            'id_nivel' => 7,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '2325457896565',
            'asociado_nombre' => 'Victoria ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 2,
            'id_nivel' => 7,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

      

        [
            'asociado_cui' => '1010101214524',
            'asociado_nombre' => 'Manuel',
            'asociado_primerApellido' => 'Flores',
            'asociado_segundoApellido' => 'Quiñonez',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 3,
            'id_nivel' => 6,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '2020201235698',
            'asociado_nombre' => 'Silvia',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 5,
            'id_nivel' => 5,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '3030301201254',
            'asociado_nombre' => 'Guillermo',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Flores',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 6,
            'id_nivel' => 5,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '6060605489653',
            'asociado_nombre' => 'Enrrique',
            'asociado_primerApellido' => 'Flores',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 6,
            'id_nivel' => 4,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '3030104569098',
            'asociado_nombre' => 'Alejandra',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 8,
            'id_nivel' => 3,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '2323236545123',
            'asociado_nombre' => 'Gerardo',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 7,
            'id_nivel' => 3,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '9089898965489',
            'asociado_nombre' => 'Melanie',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 9,
            'id_nivel' => 2,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '6321212145858',
            'asociado_nombre' => 'Andrea ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 10,
            'id_nivel' => 2,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '7878787878451',
            'asociado_nombre' => 'Camila',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 11,
            'id_nivel' => 1,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'asociado_cui' => '9999996544478',
            'asociado_nombre' => 'Daniel ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 12,
            'id_nivel' => 1,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'asociado_cui' => '6666653214587',
            'asociado_nombre' => 'Ricardo ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 12,
            'id_nivel' => 1,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ]

        
        );

        Asociado::insert($data);
 
    }
}
