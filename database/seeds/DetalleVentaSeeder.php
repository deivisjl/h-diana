<?php

use Illuminate\Database\Seeder;
use App\VentaDetalle; 
class DetalleVentaSeeder extends Seeder
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
            'id_producto' => 1,
            'id_venta' => 1,
            'costo_producto' =>   137.5 ,
            'precio_venta' => 275.00,
            'producto_cantidad' => 3,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_producto' => 5,
            'id_venta' => 1,
            'costo_producto' => 175.15 ,
            'precio_venta' => 350.30,
            'producto_cantidad' => 2,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_producto' => 2,
            'id_venta' => 2,
            'costo_producto' => 37.5,
            'precio_venta' => 75.00,
            'producto_cantidad' => 10,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_producto' => 3,
            'id_venta' => 2,
            'costo_producto' =>150.00,
            'precio_venta' => 300.00,
            'producto_cantidad' => 1,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ] ,

        [
            'id_producto' => 5,
            'id_venta' => 3,
            'costo_producto' => 175.15 ,
            'precio_venta' => 350.30,
            'producto_cantidad' => 2,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_producto' => 3,
            'id_venta' => 4,
            'costo_producto' =>150.00,
            'precio_venta' => 300.00,
            'producto_cantidad' => 1,
            
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ] ,


      );
      VentaDetalle::insert($data);

    
    }
}
