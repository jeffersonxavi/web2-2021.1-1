<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensentradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensentradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_entrada');
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();
            $table->double('precocompra');
            $table->integer('quantidade');

            $table->foreign('id_entrada')->references('id')->on('entradas')->onDelete("cascade");
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensentradas');
    }
}
