<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(12);
        return view ('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Cifrar la contraseña
        $request['password'] = bcrypt($request['password']);

        // Crear un nuevo profesor usando el método `create` del modelo
        User::create($request->all());

        // Redireccionar a la vista de listado de profesor
        return redirect()->route('users.index');
    }

    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Cifrar la contraseña
        $request['password'] = bcrypt($request['password']);

        // Buscar el estudiante por su ID
        $users = User::findOrFail($id);

        // Actualizar los datos del estudiante
        $users->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('users.index');
    }
}
