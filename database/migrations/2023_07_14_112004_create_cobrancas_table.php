<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cobrancas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->date('data_cobranca');
            $table->dateTime('data_limite')->nullable();
            $table->dateTime('data_pagamento')->nullable();
            $table->decimal('montante', 8, 2);
            $table->decimal('multa', 8, 2);
            $table->float('iva');
            $table->string('descricao');
            $table->string('referencia', 9);
            $table->string('modo_pagamento');
            $table->string('estado');
            $table->timestamps();
            
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('cobrancas');
    }
};
