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
        Schema::create('proyecto_colaborador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_codigo')->constrained('proyectos', 'codigo');
            $table->foreignId('colaborador_nif')->constrained('colaboradores', 'nif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto-colaboradors');
    }
};
