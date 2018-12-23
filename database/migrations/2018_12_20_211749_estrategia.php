<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estrategia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')->references('id')->on('producto');
            $table->integer('enero')->default(0)->unsigned();
            $table->integer('febrero')->default(0)->unsigned();
            $table->integer('marzo')->default(0)->unsigned();
            $table->integer('abril')->default(0)->unsigned();
            $table->integer('mayo')->default(0)->unsigned();
            $table->integer('junio')->default(0)->unsigned();
            $table->integer('julio')->default(0)->unsigned();
            $table->integer('agosto')->default(0)->unsigned();
            $table->integer('septiembre')->default(0)->unsigned();
            $table->integer('octubre')->default(0)->unsigned();
            $table->integer('noviembre')->default(0)->unsigned();
            $table->integer('diciembre')->default(0)->unsigned();            
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
        Schema::dropIfExists('estrategia');
    }
}
