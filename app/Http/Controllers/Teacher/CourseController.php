<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Report;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('teacher.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('students')->findOrFail($id);
        return view('teacher.courses.show', compact('course'));
    }

    public function showReports($courseId, $studentId)
    {
        $course = Course::find($courseId);
        $student = Student::find($studentId);
        $reports = $student->reports;

        return view('teacher.courses.reports.index', compact('course', 'student', 'reports'));
    }

    public function createStudent($courseId)
    {
        $course = Course::findOrFail($courseId);
        $users = User::all();
        return view('teacher.courses.students.create', compact('course', 'users'));
    }

    public function storeStudent(Request $request, $courseId)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'foto' => 'nullable',
            'edad' => 'nullable|integer',
            'nro_de_lista' => 'nullable|integer',
            'nombre_padre' => 'nullable|string|max:255',
            'trabajo_padre' => 'nullable|string|max:255',
            'celular_padre' => 'nullable|integer',
            'nombre_madre' => 'nullable|string|max:255',
            'trabajo_madre' => 'nullable|string|max:255',
            'celular_madre' => 'nullable|integer',
            'nro_total_hermanos' => 'nullable|integer',
            'lugar_que_ocupa' => 'nullable|string',
            'hermanos_en_colegio' => 'nullable|integer',
            'direccion_actual' => 'nullable|string|max:255',
            'telefono_casa' => 'nullable|integer',
            'celular_estudiante' => 'nullable|integer',
            'trabaja' => 'nullable|in:Sí,No',
            'lugar_trabajo' => 'nullable|string|max:255',
            'nro_dosis_covid' => 'nullable|integer',
            'vive_con' => 'nullable|in:Padres,Abuelos,Tíos,Hermanos,Otros',
            'religion' => 'nullable|in:Católica,Evangélica,Otra',
            'user_id' => 'required|exists:users,id',
           
        ]);

        $student = new Student($validated);
        $student->course_id = $courseId;  // Asignar el ID del curso directamente

        $student->save();

        return redirect()->route('teachers_courses.show', [$courseId, $student->id]);
    }


    public function editStudent($courseId, $studentId)
    {
        $course = Course::findOrFail($courseId);
        $student = Student::findOrFail($studentId);
        $users = User::all();
        return view('teacher.courses.students.edit', compact('student', 'users', 'course'));
    }

    public function updateStudent(Request $request, $courseId, $studentId)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'foto' => 'nullable',
            'edad' => 'nullable|integer',
            'nro_de_lista' => 'nullable|integer',
            'nombre_padre' => 'nullable|string|max:255',
            'trabajo_padre' => 'nullable|string|max:255',
            'celular_padre' => 'nullable|integer',
            'nombre_madre' => 'nullable|string|max:255',
            'trabajo_madre' => 'nullable|string|max:255',
            'celular_madre' => 'nullable|integer',
            'nro_total_hermanos' => 'nullable|integer',
            'lugar_que_ocupa' => 'nullable|string',
            'hermanos_en_colegio' => 'nullable|integer',
            'direccion_actual' => 'nullable|string|max:255',
            'telefono_casa' => 'nullable|integer',
            'celular_estudiante' => 'nullable|integer',
            'trabaja' => 'nullable|in:Sí,No',
            'lugar_trabajo' => 'nullable|string|max:255',
            'nro_dosis_covid' => 'nullable|integer',
            'vive_con' => 'nullable|in:Padres,Abuelos,Tíos,Hermanos,Otros',
            'religion' => 'nullable|in:Católica,Evangélica,Otra',
            'user_id' => 'required|exists:users,id',
            
        ]);

        $student = Student::findOrFail($studentId);
        $student->update($validated);
        return redirect()->route('teachers_courses.show', [$courseId, $studentId]);
    }

    public function createReport($courseId, $studentId)
    {
        $course = Course::findOrFail($courseId);
        $student = Student::findOrFail($studentId);
        return view('teacher.courses.reports.create', compact('course', 'student'));
    }

    public function storeReport(Request $request, $courseId, $studentId)
    {
        $user = auth()->user();
        $teacher = Teacher::where('user_id', $user->id)->firstOrFail();

        $validated = $request->validate([
            'nombre' => 'required|string|min:5|max:50',
            'fecha' => 'required|date',
            'item' => 'required|in:A-P 1,A-P 2,A-P 3,A-P 4,A-P 5,A-P 6,S-D 1,S-D 2,S-D 3,S-D 4,S-D 5,S-D 6,S-D 7,S-D 8',
            'area' => 'required|string|min:5|max:50',
            'trimestre' => 'required|in:1ER,2DO,3ER',
            'detalle_observaciones' => 'nullable|string',
        ]);

        $report = new Report($validated);
        $report->course_id = $courseId;
        $report->student_id = $studentId;
        $report->teacher_id = $teacher->id;  // Asignar el ID del profesor
        $report->save();

        return redirect()->route('teachers_courses.reports.index', [$courseId, $studentId]);
    }


}