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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('data_nascimento');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('naturalidade');
            $table->string('nacionalidade');
            $table->string('serie');
            $table->string('turno');
            $table->string('matricula')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
};
