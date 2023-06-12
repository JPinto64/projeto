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
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('data_limite');
            $table->string('valor');
            $table->string('data_pagamento');
            $table->string('estado_pagamento');
            $table->string('ano_propina');
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
