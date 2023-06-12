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
        //
        Schema::create('dadospessoa', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('email');
            $table->string('morada');
            $table->string('cod_postal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
