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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso');
            $table->year('gestion_academica');
            $table->enum('paralelo', ['A', 'B', 'C', 'D']);
            $table->enum('turno', ['Mañana', 'Tarde']);
            $table->foreignId('asesor_id_1')->constrained('teachers')->onDelete('CASCADE');
            $table->foreignId('asesor_id_2')->constrained('teachers')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
