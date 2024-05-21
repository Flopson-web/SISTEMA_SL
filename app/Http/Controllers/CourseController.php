<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_curso' => 'required|string|min:5|max:255',
            'gestion_academica' => 'required|string|min:5|max:255',
            'paralelo' => 'required|in:A,B,C,D',
            'turno' => 'required|in:Mañana,Tarde',
            'asesor_id' => 'required|exists:teachers,id',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Course::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_curso' => 'required|string|min:5|max:255',
            'gestion_academica' => 'required|string|min:5|max:255',
            'paralelo' => 'required|in:A,B,C,D',
            'turno' => 'required|in:Mañana,Tarde',
            'asesor_id' => 'required|exists:teachers,id',
        ]);

        // Buscar el estudiante por su ID
        $courses = Course::findOrFail($id);

        // Actualizar los datos del estudiante
        $courses->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Course::findOrFail($id);

        $courses->delete();

        return redirect()->route('courses.index');
    }
}
