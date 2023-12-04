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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('rut',10)->primary();
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('correo', 100);
            $table->string('contraseña',100);
            $table->integer('carrera_id');
            $table->char('inasistencias', 60)->default(0);   
            $table->boolean('cuenta_activa')->default(true);
            $table->string('motivo_amonestacion', 300)->nullable();
            $table->date('inicio_amonestacion')->nullable();
            $table->date('fin_amonestacion')->nullable();
            $table->string('certificado_regular',100);
            $table->date('fecha_creacion');
        
            $table->foreign('carrera_id')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
