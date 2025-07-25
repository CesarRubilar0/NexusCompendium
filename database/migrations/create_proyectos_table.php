<?php
// Archivo: database/migrations/xxxx_xx_xx_create_proyectos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->enum('estado', ['planificacion', 'activo', 'completado', 'pausado'])
                  ->default('planificacion');
            $table->enum('modalidad', ['presencial', 'virtual', 'hibrida']);
            $table->integer('participantes_requeridos')->nullable();
            $table->integer('horas_semanales')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('contacto_comunidad')->nullable();
            $table->text('recursos_necesarios')->nullable();
            $table->text('requisitos_participantes')->nullable();
            $table->foreignId('user_id')->constrained('users'); // Coordinador
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
