<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asesores = Teacher::all();
        return view('admin.courses.create', compact('asesores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos del formulario
         $request->validate([
            'nombre_curso' => 'required|string|min:5|max:255',
            'gestion_academica' => 'required|integer|min:2024|max:2999',
            'paralelo' => 'required|in:A,B,C,D',
            'turno' => 'required|in:Mañana,Tarde',
            'asesor_id_1' => 'required|exists:teachers,id',
            'asesor_id_2' => 'required|exists:teachers,id',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Course::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('admin.courses.index');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::all();
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validar los datos del formulario
         $request->validate([
            'nombre_curso' => 'required|string|min:5|max:255',
            'gestion_academica' => 'required|integer|min:2024|max:2999',
            'paralelo' => 'required|in:A,B,C,D',
            'turno' => 'required|in:Mañana,Tarde',
            'asesor_id_1' => 'required|exists:teachers,id',
            'asesor_id_2' => 'required|exists:teachers,id',
        ]);

        // Buscar el estudiante por su ID
        $courses = Course::findOrFail($id);

        // Actualizar los datos del estudiante
        $courses->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('admin.courses.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Course::findOrFail($id);

        $courses->delete();

        return redirect()->route('admin.courses.index');
    }
}
