<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Report;
use App\Models\User;

class Navigation extends Component
{
    public function render()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $reports = Report::all();
        $users = User::all();

        return view('livewire.navigation', compact('courses', 'students', 'reports', 'users', 'teachers'));
    }
}
