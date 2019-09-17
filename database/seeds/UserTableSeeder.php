<?php

use Illuminate\Database\Seeder;
use App\User; 
class UserTableSeeder extends Seeder
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
            'email' => 'diana@hierbalife.com',
            'asociado_membrecia' => 1,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ], 

            [
            'email' => 'cecilia@hierbalife.com',
            'asociado_membrecia' => 2,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'jimena@hierbalife.com',
            'asociado_membrecia' => 3,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'victoria@hierbalife.com',
            'asociado_membrecia' => 4,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'manuel@hierbalife.com',
            'asociado_membrecia' => 5,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'silvia@hierbalife.com',
            'asociado_membrecia' => 6,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'enrrique@hierbalife.com',
            'asociado_membrecia' => 8,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],


            [
            'email' => 'guillermo@hierbalife.com',
            'asociado_membrecia' => 7,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],


            [
            'email' => 'alejandra@hierbalife.com',
            'asociado_membrecia' => 9,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],


            [
            'email' => 'gerardo@hierbalife.com',
            'asociado_membrecia' => 10,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],


            [
            'email' => 'melanie@hierbalife.com',
            'asociado_membrecia' => 11,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],

            [
            'email' => 'andrea@hierbalife.com',
            'asociado_membrecia' => 12,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],


            [
            'email' => 'camila@hierbalife.com',
            'asociado_membrecia' => 13,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],



            [
            'email' => 'daniel@hierbalife.com',
            'asociado_membrecia' => 14,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],



            [
            'email' => 'ricardo@hierbalife.com',
            'asociado_membrecia' => 15,
            
            'password' => Hash::make('123login'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ]

           
        
        
        );

        User::insert($data);
    }
}
