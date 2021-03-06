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
            $table->string('nome');
            $table->integer('estoque');
            $table->float('preco');
            $table->bigInteger('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias'); 
            /*
                idCategoria é uma chave estrangeira que se referencia a ao campo id 
                da tabela categorias
            */
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
