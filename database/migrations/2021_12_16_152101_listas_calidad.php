<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListasCalidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas_calidad', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipo')->nullable()->unsigned();
            $table->string('tipo');
            $table->string('nombre_composicion');
            $table->string('rango_1');
            $table->string('rango_2');
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
        Schema::dropIfExists('listas_calidad');
    }
}
