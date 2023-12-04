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
        Schema::create('bloques', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->char('horario_id',7);
            $table->string('funcionario_rut', 10);
            $table->date('fecha');
            $table->char('cant_inscritos',25)->nullable();
            $table->char('cupo_maximo',25);
            $table->boolean('disponible')->default(true);

            $table->foreign('funcionario_rut')->references('rut')->on('funcionarios');
            $table->foreign('horario_id')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloques');
    }
};
