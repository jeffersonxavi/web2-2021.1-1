<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->decimal('icms', 12,2);
            $table->decimal('ipi', 12,2);
            $table->decimal('frete', 12,2);
            $table->decimal('valornafabrica', 12,2);
            $table->decimal('valordecompra', 12,2);
            $table->decimal('lucro', 12,2);
            $table->decimal('valorvenda', 12,2);
            $table->decimal('desconto', 12,2);
            $table->integer('quantidade');
            $table->string('unidade', 2);
            $table->string('referencia', 45);


            $table->foreignId('motor_id')->constrained('motor')->onDelete('cascade');
            $table->foreignId('carro_id')->constrained()->onDelete('cascade');
            $table->foreignId('valvula_id')->constrained()->onDelete('cascade');
            $table->foreignId('fabricacao_id')->constrained('fabricacao')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('marca_id')->constrained()->onDelete('cascade');
            $table->foreignId('localizacao_id')->constrained('localizacoes')->onDelete('cascade');
        
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
        Schema::dropIfExists('produtos');
    }
}
