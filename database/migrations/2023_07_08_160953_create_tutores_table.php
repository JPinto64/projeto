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
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numero')->unique('UK_tutores_numero');
            $table->string('nome')->nullable(false);
            $table->string('nif')->nullable(false);
            $table->string('sexo')->nullable(false);
            $table->date('datadenascimento')->nullable(false);
            $table->string('linguasfaladas');
            $table->string('bio');
            $table->binary('foto')->nullable();

            $table->string('email');
            $table->string('telemovel');
            $table->string('telemovel2')->nullable(true);
            $table->string('endereco');
            $table->smallInteger('classificacao');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutores');
    }
};
