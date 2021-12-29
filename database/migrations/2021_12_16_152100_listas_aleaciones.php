<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListasAleaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('listas_aleaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cliente')->nullable()->unsigned();
            $table->string('tipo');
            $table->string('nombre');
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
        chema::dropIfExists('listas_aleaciones');
    }
}
