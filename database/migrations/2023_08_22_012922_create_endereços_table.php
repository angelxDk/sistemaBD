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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua', 100);
            $table->string('numero', 10);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->string('cep', 8);
            $table->string('complemento', 100);
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
