<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Student;
use App\Models\Report;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSedeer::class);

        // Crear usuarios
        User::factory(50)->create();

        // Crear profesores
        Teacher::factory(30)->create();

        // Crear cursos
        Course::factory(15)->create();

        // Crear estudiantes y reportes
        Student::factory(80)->create();
        Report::factory(200)->create();

        // Asignar profesores a cursos como asesores y profesores normales
        $this->call(CourseSedeer::class);
        $this->call(UserSedeer::class);

        // Asignar profesores normales a cursos
        $teachers = Teacher::all();
        $courses = Course::all();

        foreach ($courses as $course) {
            $course->teachers()->attach($teachers->random(3)->pluck('id')->toArray());
        }
    }
}
