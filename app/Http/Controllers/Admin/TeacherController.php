<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate(10);
        return view ('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.teachers.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'apellido' => 'required|string|min:5|max:255',
            'especialidad' => 'required|string|min:5|max:255',
            'edad' => 'required|integer|min:1',
            'celular' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id',
        ]);
         // Crear un nuevo profesor usando el método `create` del modelo
        Teacher::create($request->all());

        // Redireccionar a la vista de listado de profesor
        return redirect()->route('teachers.index');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $teachers = Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teachers'),compact('users'));
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
            'especialidad' => 'required|string|min:5|max:255',
            'edad' => 'required|integer|min:1',
            'celular' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id',
        ]);

        // Buscar el estudiante por su ID
        $teachers = Teacher::findOrFail($id);

        // Actualizar los datos del estudiante
        $teachers->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teacher::findOrFail($id);

        $teachers->delete();

        return redirect()->route('teachers.index');
    }
}
