<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompeticoesAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('competicoesalunos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('competicao_id');
            $table->integer('posicao')->nullable();
            $table->integer('pontos_obtidos')->default(0);
            $table->boolean('presente')->nullable();
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('competicao_id')->references('id')->on('competicoes')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('competicoes_alunos');
    }
}
