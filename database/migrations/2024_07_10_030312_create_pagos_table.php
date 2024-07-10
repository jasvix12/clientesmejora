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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('numero');
            $table->decimal('cantidad', 15, 2);
            $table->date('fecha_pago');
            $table->foreignId('colaborador_nif')->constrained('colaboradores', 'nif');
            $table->foreignId('tipo_pago_id')->constrained('tipo_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
