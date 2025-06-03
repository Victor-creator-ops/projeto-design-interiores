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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->usignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->string('status');
            $table->usignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('users');
            $table->string('estapa_atual');
            $table->string('etapa_anterior');
            $table->string('etapa_posterior');
            $table->integer('tempo_final_etapa');
            $table->dateTime('atualizacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
