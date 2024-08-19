<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $courses = Course::all();
        foreach($courses as $course){
              $course->teachers()->attach([
                    rand(1, 10),
                    rand(10, 20)
              ]);
        }
    }
}
