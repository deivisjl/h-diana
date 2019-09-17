<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volumen', function (Blueprint $table) {
            $table->unsignedBigInteger('asociado_membrecia');
          
            $table->integer('volumen_l')->default(0);
            $table->timestamps();

            $table->primary('asociado_membrecia');

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
        Schema::dropIfExists('volumen');
    }
}
