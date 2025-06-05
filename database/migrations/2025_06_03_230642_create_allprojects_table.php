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
        Schema::create('allprojects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->usignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projetos');
            $table->usignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('users');
            $table->string('nome_projeto');
            $table->foreign('nome_projeto')->references('name')->on('projetos');
            $table->string('status_projeto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allprojects');
    }
};
