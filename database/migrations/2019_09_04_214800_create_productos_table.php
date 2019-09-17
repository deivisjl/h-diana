<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
			$table->string('producto_nombre', 255);
            $table->text('producto_descrip');
            $table->string('producto_detalle', 300);
			$table->decimal('producto_precio', 7, 2);
			$table->text('producto_imagen');
            $table->boolean('producto_visible');
            $table->integer('producto_cantidad');
            $table->integer('producto_puntos');
            $table->unsignedInteger('id_categoria');
            $table->timestamps(); 

            $table  ->foreign('id_categoria')
            ->references('id_categoria')->on('categoria')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
