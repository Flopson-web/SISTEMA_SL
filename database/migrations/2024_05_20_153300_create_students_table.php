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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->text('foto')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('nro_de_lista')->nullable();
            $table->string('nombre_padre', 255)->nullable();
            $table->string('trabajo_padre', 255)->nullable();
            $table->integer('celular_padre')->nullable();
            $table->string('nombre_madre', 255)->nullable();
            $table->string('trabajo_madre', 255)->nullable();
            $table->integer('celular_madre')->nullable();
            $table->integer('nro_total_hermanos')->nullable();
            $table->string('lugar_que_ocupa')->nullable();
            $table->integer('hermanos_en_colegio')->nullable();
            $table->string('direccion_actual', 255)->nullable();
            $table->integer('telefono_casa')->nullable();
            $table->integer('celular_estudiante')->nullable();
            $table->enum('trabaja', ['Si', 'No'])->nullable();
            $table->string('lugar_trabajo', 255)->nullable();
            $table->integer('nro_dosis_covid')->nullable();
            $table->enum('vive_con', ['Padres', 'Abuelos', 'Tios', 'Hermanos', 'Otros'])->nullable();
            $table->enum('religion', ['Catolica', 'Evangelica', 'Otra'])->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE');
            $table->foreignId('course_id')->constrained('courses')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
