<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compradetalle', function (Blueprint $table) {
            $table->bigIncrements('id_compradetalle');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_compra');
            $table->decimal('producto_precio', 7, 2);
            $table->integer('producto_volumen');
            $table->integer('producto_cantidad');
            $table->timestamps(); 

            $table  ->foreign('id_producto')
            ->references('id_producto')->on('productos')
            ->onDelete('cascade');

            $table  ->foreign('id_compra')
            ->references('id_compra')->on('compra')
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
        Schema::dropIfExists('compradetalle');
    }
}
