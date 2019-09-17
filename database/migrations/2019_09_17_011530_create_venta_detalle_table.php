<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->bigIncrements('id_ventadetalle');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_venta');
            $table->decimal('costo_producto', 7, 2);
            $table->decimal('precio_venta', 7, 2);
            $table->integer('producto_cantidad');
            $table->timestamps(); 

            $table  ->foreign('id_producto')
            ->references('id_producto')->on('productos')
            ->onDelete('cascade'); 

            $table  ->foreign('id_venta')
            ->references('id_venta')->on('venta')
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
        Schema::dropIfExists('venta_detalle');
    }
}
