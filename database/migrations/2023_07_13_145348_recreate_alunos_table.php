<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('alunos');
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique('UK_alunos_numero')->nullable(false);
            $table->string('nome')->nullable(false);
            $table->string('nif')->nullable(false);
            $table->string('sexo')->nullable(false);
            $table->date('datadenascimento')->nullable(false);
            $table->date('data_inscricao')->nullable(false);
            $table->string('escalao');
            $table->binary('foto')->nullable();
            $table->string('email');
            $table->string('telemovel');
            $table->string('telemovel2')->nullable(true);
            $table->string('endereco');
            $table->string('observacoes')->nullable(true);
            $table->string('estado')->default('Ativo')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(true);
            
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
