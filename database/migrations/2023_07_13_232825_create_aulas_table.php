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
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->string('local');
            $table->string('escalao');
            $table->string('estado');
            $table->text('observacoes')->nullable();
            $table->foreignId('tutor_id')->constrained('tutores');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
};
