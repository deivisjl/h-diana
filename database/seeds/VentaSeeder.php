<?php

use Illuminate\Database\Seeder;
use App\Venta; 
class VentaSeeder extends Seeder
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
            'id_cliente' => 1,
            'asociado_membrecia' => 5,
            'venta_total' => 1525.6,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_cliente' => 2,
            'asociado_membrecia' => 7,
            'venta_total' => 1050.00,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_cliente' => 3,
            'asociado_membrecia' => 10,
            'venta_total' => 700.60,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

        [
            'id_cliente' => 4,
            'asociado_membrecia' => 10,
            'venta_total' => 300,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ], 

      

       


      );
      Venta::insert($data);

    }
}
