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
        $this->call(UserSedeer::class);
        Teacher::factory(20)->create();
        Course::factory(15)->create();
        Student::factory(30)->create();
        Report::factory(99)->create();
        $this->call(CourseSedeer::class);
    }
}
