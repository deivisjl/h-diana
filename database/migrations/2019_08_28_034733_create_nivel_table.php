<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel', function (Blueprint $table) {
            $table->bigIncrements('id_nivel');
            $table->string('nivel_nombre', 50);
            $table->text('nivel_descrip');
            $table->decimal('nivel_descuento', 8, 4);
            $table->integer('puntosP');
            $table->integer('puntosL');
            $table->integer('piramide');
            $table->string('icon', 50)->nullable();
            $table->timestamps();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel');
    }
}
