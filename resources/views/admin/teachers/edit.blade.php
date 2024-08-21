<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Teacher') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen.jpg'); background-size: cover;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-80 dark:bg-red-800 dark:bg-opacity-70 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('teachers.update', $teachers->id) }}" class="max-w-sm mx-auto">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $teachers->nombre) }}" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 text-sm font-medium text-white">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $teachers->apellido) }}" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="especialidad" class="block mb-2 text-sm font-medium text-white">Especialidad</label>
                        <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad', $teachers->especialidad) }}" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="edad" class="block mb-2 text-sm font-medium text-white">Edad</label>
                        <input type="number" name="edad" id="edad" value="{{ old('edad', $teachers->edad) }}" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="celular" class="block mb-2 text-sm font-medium text-white">Celular</label>
                        <input type="number" name="celular" id="celular" value="{{ old('celular', $teachers->celular) }}" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="user_id" class="block mb-2 text-sm font-medium text-white">Usuario</label>
                        <select name="user_id" id="user_id" class="bg-black border border-white text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" required>
                            <option value="">Seleccione un usuario</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($user->id == $teachers->user_id) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar</button>
                    <a href="{{ route('teachers.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
