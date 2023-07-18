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
<<<<<<< Updated upstream
            $table->string('sexo')->nullable(false);
=======
<<<<<<< HEAD
            $table->string('sexo')->nullable(false);            
=======
            $table->string('sexo')->nullable(false);
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
            $table->date('datadenascimento')->nullable(false);
            $table->string('linguasfaladas');
            $table->string('bio');
            $table->binary('foto')->nullable();
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
            
            $table->string('email');
            $table->string('telemovel');
            $table->string('telemovel2');
            $table->string('endereco');
            $table->smallInteger('classificacao');
            
=======
>>>>>>> Stashed changes

            $table->string('email');
            $table->string('telemovel');
            $table->string('telemovel2')->nullable(true);
            $table->string('endereco');
            $table->smallInteger('classificacao');

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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
