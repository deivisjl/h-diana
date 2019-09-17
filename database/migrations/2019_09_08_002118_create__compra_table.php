<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id_compra');
            $table->unsignedBigInteger('asociado_membrecia');
            $table->decimal('compra_total', 12, 2);
            $table->integer('compra_totalVolumen');
            $table->decimal('compra_envio', 8, 2);
            $table->timestamps(); 

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
        Schema::dropIfExists('compra');
    }
}
