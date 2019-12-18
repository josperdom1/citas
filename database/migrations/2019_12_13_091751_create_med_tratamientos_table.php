<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_tratamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('medicamento_id');
            $table->unsignedBigInteger('tratamiento_id');
            $table->dateTime('fecha_ini');
            $table->dateTime('fecha_fin');
            $table->string('frecuencia');
            $table->string('unidades');
            $table->string('instrucciones');
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
        Schema::dropIfExists('med_tratamientos');
    }
}
