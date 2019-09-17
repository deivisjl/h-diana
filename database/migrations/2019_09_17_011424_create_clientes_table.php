<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('cliente_nombre',50);
            $table->string('cliente_primerApellido',50);
            $table->string('cliente_segundoApellido',50);
            $table->string('cliente_direccion',300);
            $table->string('cliente_telefono',50) ->nullable();
            $table->string('cliente_correo',100) ->nullable();
            $table->unsignedBigInteger('asociado_membrecia');
            $table->string('cliente_nit',7);
         
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
        Schema::dropIfExists('clientes');
    }
}
