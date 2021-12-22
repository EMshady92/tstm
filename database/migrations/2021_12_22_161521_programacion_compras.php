<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgramacionCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_compras', function (Blueprint $table) {
            $table->id();
            $table->string('po');
            $table->string('year');
            $table->string('month');
            $table->string('supplier');
            $table->string('material');
            $table->string('lot');
            $table->string('supplier_weight');
            $table->string('reception_date');
            $table->string('estatus');
            $table->string('bascula');
            $table->string('observaciones');
            $table->string('importacion');
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
        Schema::dropIfExists('programacion_compras');
    }
}
