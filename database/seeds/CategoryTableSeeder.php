<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoryTableSeeder extends Seeder
{
  /**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'categoria_nombre' => 'Bebidas', 
				'categoria_descrip' => 'Contiene bebidas energeticas con alto contenido en vitaminas ', 
				'categoria_color' => 'info',
				'categoria_icon' => 'glass-whiskey',
				'created_at'=> \Carbon\Carbon::now(), 
				'updated_at'=> \Carbon\Carbon::now()
			],

			[
				'categoria_nombre' => 'Vitaminas', 
				'categoria_descrip' => 'Distintos Tipos de vitaminas ', 
				'categoria_color' => 'warning',
				'categoria_icon' => 'capsules',
				'created_at'=> \Carbon\Carbon::now(), 
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'categoria_nombre' => 'Fitness', 
				'categoria_descrip' => 'Material Proteico ', 
				'categoria_color' => 'success',
				'categoria_icon' => 'walking',
				'created_at'=> \Carbon\Carbon::now(), 
				'updated_at'=> \Carbon\Carbon::now()
			]

			
		);
 
		Categoria::insert($data);
 
	}
}