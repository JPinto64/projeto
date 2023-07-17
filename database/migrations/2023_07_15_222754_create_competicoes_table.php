<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompeticoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competicoes', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->string('nome');
            $table->string('descricao');
            $table->string('local');
            $table->string('numero_maximo_participantes');
            $table->string('estado');
            $table->string('escaloes')->nullable(true);
            $table->text('premiacao')->nullable(true);
            $table->binary('imagem')->nullable();
            $table->text('observacoes')->nullable(true);
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
        Schema::dropIfExists('competicoes');
    }
}
