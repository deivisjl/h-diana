<?php

use Illuminate\Database\Seeder;
use App\Nivel; 
class NivelTableSeeder extends Seeder
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
            'nivel_nombre' => 'Asociado Independiente',
            'nivel_descrip' => ' Como Asociado Independiente, usted puede comprar productos con un descuento del 25% Conforme aumente su Volumen, también aumentará su descuento',
            'nivel_descuento' => 0.2500,
            'puntosP' => 499,
            'puntosL' => 0,
            'piramide'=>10,
            'icon'=>'skiing-nordic',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'nivel_nombre' => 'Consultor mayor',
            'nivel_descrip' => ' tendrá derecho a comprar productos con un 35% de descuento, otorgándole un mayor margen de ganancias.Usted también podrá obtener Ganancias por Ventas al por Mayor sobre las ventas a los Asociados Independientes de su línea descendente',
            'nivel_descuento' => 0.3500,
            'puntosP' => 500,
            'puntosL' => 0,
            'piramide'=>9,
            'icon'=>'boxes',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Productor Calificado',
            'nivel_descrip' => '  tiene la oportunidad de hacer pedidos directamente a Hierbalife y Usted podrá mantener su descuento del 42% mientras conserve su nivel de Productor Calificado',
            'nivel_descuento' =>0.4200,
            'puntosP' => 2500,
            'puntosL' => 1500,
            'piramide'=>8,
            'icon'=>'diagnoses',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Constructor del Éxito',
            'nivel_descrip' => 'El Constructor del Éxito es una calificación que se obtiene con el Volumen Personalmente Adquirido, el volumen de línea descendente no puede ser usado para lograr esta calificación.permitirá continuar haciendo pedidos con un descuento del 42%  ',
            'nivel_descuento' =>0.4200,
            'puntosP' => 1000,
            'puntosL' => 0,
            'piramide'=>7,
            'icon'=>'child',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Mayorista ',
            'nivel_descrip' => 'Como Mayorista Hierbalife, usted podrá adquirir el máximo descuento del 50%, además Ganancias por Ventas al Detalle',
            'nivel_descuento' =>0.5000,
            'puntosP' => 1000,
            'puntosL' => 3000,
            'piramide'=>6,
            'icon'=>'award',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Equpo Mundo ',
            'nivel_descrip' => 'Un paquete de Equipo del Mundo conteniendo un certificado personalizado de Equipo del Mundo, un pin de Equipo del Mundo y el diario Hierbalife y todos los beneficios de un Mayorista',
            'nivel_descuento' => 0.5000,
            'puntosP' => 2500,
            'puntosL' => 1500,
            'piramide'=>5,
            'icon'=>'globe-americas',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Equipo de Expansión Global (GET)',
            'nivel_descrip' => ' Una placa y un pin del Equipo de Expansión Global. Todos los beneficios de Mayorista Completamente Calificado',
            'nivel_descuento' =>0.5000,
            'puntosP' => 1000,
            'puntosL' => 0,
            'piramide'=>4,
            'icon'=>'medal',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Equipo Millonario',
            'nivel_descrip' => 'Una placa y un pin del Equipo Millonario.  Todos los beneficios de Mayorista Completamente Calificado',
            'nivel_descuento' =>0.5000,
            'puntosP' => 4000,
            'puntosL' => 0,
            'piramide'=>3,
            'icon'=>'chess-queen',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ],

        [
            'nivel_nombre' => 'Equipo del Presidente',
            'nivel_descrip' => 'Una prestigiosa placa y pin del Equipo del Presidente. Todos los beneficios de Mayorista Completamente Calificado',
            'nivel_descuento' => 0.5000,
            'puntosP' => 10000,
            'puntosL' => 0,
            'piramide'=>2,
            'icon'=>'gem',

           
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ]);
    Nivel::insert($data);

    }
}
