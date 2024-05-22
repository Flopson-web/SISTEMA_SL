<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('courses', CourseController::class);
    Route::resource('students', StudentController::class)->except(['show']);
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::resource('reports', ReportController::class);
    Route::resource('users', UserController::class);
    Route::resource('teachers',TeacherController::class);
});


