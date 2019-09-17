<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id_venta');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('asociado_membrecia');
            $table->decimal('venta_total', 12, 2)->default(0);
            $table->timestamps();

            $table  ->foreign('id_cliente')
            ->references('id_cliente')->on('clientes')
            ->onDelete('restrict');

            $table  ->foreign('asociado_membrecia')
            ->references('asociado_membrecia')->on('asociados')
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
        Schema::dropIfExists('venta');
    }
}
