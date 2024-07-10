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
        Schema::create('cliente_proyecto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_codigo')->constrained('clientes', 'codigo');
            $table->foreignId('proyecto_codigo')->constrained('proyectos', 'codigo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente-proyectos');
    }
};
