<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Teacher\CourseController as TeacherCourseController;
use App\Http\Controllers\Student\StudentController as StudentStudentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Teacher_CourseController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    
    Route::resource('courses', CourseController::class);
    Route::resource('students', StudentController::class)->except(['show']);
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::resource('reports', ReportController::class);
    Route::resource('users', UserController::class);
    Route::resource('teachers',TeacherController::class);
});

Route::prefix('teachers_courses')->group(function () {
    Route::get('/', [TeacherCourseController::class, 'index'])->name('teachers_courses.index');
    Route::get('/{course}', [TeacherCourseController::class, 'show'])->name('teachers_courses.show');
    Route::get('/{course}/students/create', [TeacherCourseController::class, 'createStudent'])->name('teachers_courses.students.create');
    Route::get('/{course}/students/{student}/edit', [TeacherCourseController::class, 'editStudent'])->name('teachers_courses.students.edit');
    Route::put('/teachers/courses/{course}/students/{student}', [TeacherCourseController::class, 'updateStudent'])->name('teachers_courses.students.update');
    Route::post('/teachers/courses/{course}/students', [TeacherCourseController::class, 'storeStudent'])->name('teachers_courses.students.store');
    Route::get('/{course}/students/{student}/reports', [TeacherCourseController::class, 'showReports'])->name('teachers_courses.reports.index');
    Route::get('/{course}/students/{student}/reports/create', [TeacherCourseController::class, 'createReport'])->name('teachers_courses.reports.create');
    Route::post('/teachers/courses/{course}/students/{student}/reports', [TeacherCourseController::class, 'storeReport'])->name('teachers_courses.reports.store');
});

Route::prefix('just_students')->group(function (){
    Route::get('/', [StudentStudentController::class, 'index'])->name('just_studnets.index');
    Route::get('/', [StudentStudentController::class, 'reports'])->name('just_students.reports');
});