<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistorialEdicionesCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_ediciones_compras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_programacion')->nullable()->unsigned();
            $table->date('fecha_cambio');
            $table->string('po');
            $table->string('year');
            $table->string('month');
            $table->string('supplier');
            $table->string('material');
            $table->string('lot');
            $table->string('supplier_weight');
            $table->date('reception_date');
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
        Schema::dropIfExists('historial_ediciones_compras');
    }
}
