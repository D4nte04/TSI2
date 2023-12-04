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
        Schema::create('reservas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('alumno_rut', 10);
            $table->integer('bloque_id');
            $table->char('casillero_id', 50);
            $table->boolean('reserva_cancelada')->default(false);
            $table->boolean('asistencia')->default(null);

            $table->foreign('alumno_rut')->references('rut')->on('alumnos');
            $table->foreign('bloque_id')->references('id')->on('bloques');
            $table->foreign('casillero_id')->references('id')->on('casilleros');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
