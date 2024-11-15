<?php

use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Teacher\CourseController as TeacherCourseController;
use App\Http\Controllers\Student\StudentController as StudentStudentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Teacher_CourseController;

//Route::get('/', function () {
    //return view('home');
//})->name('home');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/', function () {
    return view('welcome');
    });
 
    // Rutas de Admin
   // Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('courses', CourseController::class);
        Route::resource('students', StudentController::class)->except(['show']);
        Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
        Route::get('/students/{id}/reports', [StudentController::class, 'showReports'])->name('admin.students.reports');
        Route::resource('reports', ReportController::class);
        Route::resource('users', UserController::class);
        Route::resource('teachers', TeacherController::class);
    //});

    // Rutas de Teachers y Asesores
    //Route::middleware(['role:teacher|asesor'])->prefix('teachers_courses')->name('teachers_courses.')->group(function () {
    Route::prefix('teachers_courses')->name('teachers_courses.')->group(function () {
        Route::get('/', [TeacherCourseController::class, 'index'])->name('index');
        Route::get('/{course}', [TeacherCourseController::class, 'show'])->name('show');
        Route::get('/{course}/students/create', [TeacherCourseController::class, 'createStudent'])->name('students.create');
        Route::get('/{course}/students/{student}/edit', [TeacherCourseController::class, 'editStudent'])->name('students.edit');
        Route::put('/teachers/courses/{course}/students/{student}', [TeacherCourseController::class, 'updateStudent'])->name('students.update');
        Route::post('/teachers/courses/{course}/students', [TeacherCourseController::class, 'storeStudent'])->name('students.store');
        Route::get('/{course}/students/{student}/reports', [TeacherCourseController::class, 'showReports'])->name('reports.index');
        Route::get('/{course}/students/{student}/reports/create', [TeacherCourseController::class, 'createReport'])->name('reports.create');
        Route::post('/teachers/courses/{course}/students/{student}/reports', [TeacherCourseController::class, 'storeReport'])->name('reports.store');
    });
    //});

    // Rutas de Students
    //Route::middleware(['role:student'])->prefix('just_students')->name('just_students.')->group(function () {
    Route::prefix('just_students')->name('just_students.')->group(function () {
        Route::get('/', [StudentStudentController::class, 'index'])->name('index');
        Route::get('/reports', [StudentStudentController::class, 'reports'])->name('reports');
    });
    //});

    //Route::get('offline', function (){
    //    return view('vendor.laravelpwa.offline');
   // });

   Route::get('/students/{id}/reports/pdf', [StudentController::class, 'exportReportsPdf'])->name('students.reports.exportPdf');

   Route::get('/students/{id}/export-reports-csv', [StudentController::class, 'exportReportsCsv'])->name('students.exportReportsCsv');

});