<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgramacionVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('orden');
            $table->string('year');
            $table->string('month');
            $table->string('cliente');
            $table->string('material');
            $table->string('lote');
            $table->string('c_lotes');
            $table->string('p_list');
            $table->string('fecha_envio');
            $table->string('n_sellos');
            $table->string('n_cajas');
            $table->string('observaciones');
            $table->integer('bascula');
            $table->integer('estatus');
            $table->string('captura');
            $table->string('estado');
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
        Schema::dropIfExists('programacion_ventas');
    }
}
