<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view ('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $users = User::all();
        return view('students.create', compact('users'), compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'apellido' => 'required|string|min:5|max:255',
            'foto' => 'nullable',
            'edad' => 'nullable|integer',
            'nro_de_lista' => 'nullable',
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
            'course_id' => 'required|exists:courses,id',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Student::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('courses')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::all();
        $users = User::all();
        $students = Student::findOrFail($id);
        return view('students.edit', compact('students', 'users', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'apellido' => 'required|string|min:5|max:255',
            'foto' => 'nullable',
            'edad' => 'required|integer|min:1',
            'nro_de_lista' => 'nullable',
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
            'course_id' => 'required|exists:courses,id',
        ]);

        // Buscar el estudiante por su ID
        $students = Student::findOrFail($id);

        // Actualizar los datos del estudiante
        $students->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('students.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);

        $students->delete();

        return redirect()->route('students.index');
    }
}
