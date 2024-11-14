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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->date('fecha');
            $table->enum('item', ['A-P 1', 'A-P 2', 'A-P 3', 'A-P 4', 'A-P 5', 'A-P 6', 'S-D 1', 'S-D 2', 'S-D 3', 'S-D 4', 'S-D 5', 'S-D 6', 'S-D 7', 'S-D 8']);
            $table->string('area', 50);
            $table->enum('trimestre', ['1ER','2DO','3ER']);
            $table->text('detalle_observaciones')->nullable();
            $table->foreignId('student_id')->constrained('students')->onDelete('CASCADE');
            $table->foreignId('course_id')->constrained('courses')->onDelete('CASCADE');
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
