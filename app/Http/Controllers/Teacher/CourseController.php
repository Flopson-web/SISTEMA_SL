<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('teacher.courses.index', compact('courses'));
    }

    public function show(string $id)
    {
        $courses = Course::with('students')->findOrFail($id);
        return view('teacher.courses.show', compact('courses'));
    }

    
}
