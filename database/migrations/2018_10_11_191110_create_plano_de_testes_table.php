<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoDeTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_de_testes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->boolean('publico');
            $table->boolean('ativo');
            $table->integer('id_documento');
            $table->string('titulo');
            $table->integer('tipo');
            $table->integer('status');
            $table->integer('numero_caso_teste');
            $table->binary('arquivos_anexados');
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
        Schema::drop('plano_de_testes');
    }
}
