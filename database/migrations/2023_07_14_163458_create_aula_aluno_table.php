<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aulasalunos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aula_id')->constrained('aulas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('aluno_id')->constrained('alunos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('presente')->nullable(true);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aulasalunos');
    }
};
