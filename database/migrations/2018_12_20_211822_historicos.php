<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProducto')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->integer('enero')->default(0);
            $table->integer('febrero')->default(0);
            $table->integer('marzo')->default(0);
            $table->integer('abril')->default(0);
            $table->integer('mayo')->default(0);
            $table->integer('junio')->default(0);
            $table->integer('julio')->default(0);
            $table->integer('agosto')->default(0);
            $table->integer('septiembre')->default(0);
            $table->integer('octubre')->default(0);
            $table->integer('noviembre')->default(0);
            $table->integer('diciembre')->default(0);  
            $table->integer('año')->default(2018);
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
        Schema::dropIfExists('historicos');
    }
}
