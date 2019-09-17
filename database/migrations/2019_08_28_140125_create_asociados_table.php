<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociados', function (Blueprint $table) {
            $table->bigIncrements('asociado_membrecia');
            $table->string('asociado_cui', 50)->unique();
            $table->string('asociado_nombre', 100);
            $table->string('asociado_primerApellido', 50);
            $table->string('asociado_segundoApellido', 50);
            $table->string('asociado_tel', 15);
            $table->date('asociado_nacimiento');
            $table->char('asociado_estado', 1) ->default('a');
            $table->boolean('asociado_genero')->default(0);
           // $table->string('asociado_imagen',300);
            $table->unsignedBigInteger('padre');
            $table->unsignedBigInteger('id_nivel');
            $table->unsignedBigInteger('id_direccion');
           
            $table->timestamps(); 

            $table  ->foreign('id_nivel')
            ->references('id_nivel')->on('nivel')
            ->onDelete('restrict');

            $table  ->foreign('id_direccion')
            ->references('id_direccion')->on('direccion')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asociados');
    }
}
