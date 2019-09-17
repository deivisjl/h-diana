<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(NivelTableSeeder::class);
         $this->call(PaisTableSeeder::class); 
         $this->call(CiudadTableSeeder::class);  
        $this->call(DireccionTableSeeder::class); 
        $this->call(AsociadoTableSeeder::class);  
        $this->call(UserTableSeeder::class); 
        $this->call(CategoryTableSeeder::class); 
       $this->call(ProductTableSeeder::class); 
       $this->call(ClienteTableSeeder::class); 
       $this->call(VentaSeeder::class); 
       $this->call(DetalleVentaSeeder::class); 
         

      

     
        
    }
}
