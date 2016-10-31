<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productor_id');
            $table->integer('ubicacion_id');
            $table->integer('variedad_id');
            $table->integer('especie_id');
            $table->integer('operador_id');
            $table->date('fecha');
            $table->integer('plantas');
            $table->string('actividad');
            $table->integer('jornales');
            $table->integer('valor_jornales');
            $table->integer('valor_insumos');
            $table->string('observaciones');
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
        Schema::dropIfExists('labores');
    }
}
