<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return view ('admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $students = Student::all();
        return view('admin.reports.create', compact('courses', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:50',
            'fecha' => 'required|date',
            'item' => 'required|in:A-P 1,A-P 2,A-P 3,A-P 4,A-P 5,A-P 6,S-D 1,S-D 2,S-D 3,S-D 4,S-D 5,S-D 6,S-D 7,S-D 8',
            'area' => 'required|string|min:5|max:50',
            'trimestre' => 'required|in:1ER,2DO,3ER',
            'detalle_observaciones' => 'nullable|string',
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

         // Crear un nuevo reporte usando el método `create` del modelo
        Report::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::all();
        $students = Student::all();
        $reports = Report::findOrFail($id);
        return view('admin.reports.edit', compact('reports', 'courses', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validar los datos del formulario
         $request->validate([
            'nombre' => 'required|string|min:5|max:50',
            'fecha' => 'required|date',
            'item' => 'required|in:A-P 1,A-P 2,A-P 3,A-P 4,A-P 5,A-P 6,S-D 1,S-D 2,S-D 3,S-D 4,S-D 5,S-D 6,S-D 7,S-D 8',
            'area' => 'required|string|min:5|max:50',
            'trimestre' => 'required|in:1ER,2DO,3ER',
            'detalle_observaciones' => 'nullable|string',
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        // Buscar el estudiante por su ID
        $reports = Report::findOrFail($id);

        // Actualizar los datos del estudiante
        $reports->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reports = Report::findOrFail($id);

        $reports->delete();

        return redirect()->route('reports.index');
    }
}
