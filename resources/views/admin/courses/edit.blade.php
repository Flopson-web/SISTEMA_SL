<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('courses.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nombre_curso" class="block text-sm font-medium text-gray-700">Nombre del Curso</label>
                        <input type="text" name="nombre_curso" id="nombre_curso" value="{{ old('nombre_curso', $course->nombre_curso) }}" class="mt-1 block w-full" required>
                        @error('nombre_curso')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gestion_academica" class="block text-sm font-medium text-gray-700">Gestión Académica</label>
                        <input type="number" name="gestion_academica" id="gestion_academica" value="{{ old('gestion_academica', $course->gestion_academica) }}" class="mt-1 block w-full" required>
                        @error('gestion_academica')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="paralelo" class="block text-sm font-medium text-gray-700">Paralelo</label>
                        <select name="paralelo" id="paralelo" class="mt-1 block w-full" required>
                            <option value="" disabled>Select Paralelo</option>
                            <option value="A" {{ old('paralelo', $course->paralelo) == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('paralelo', $course->paralelo) == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ old('paralelo', $course->paralelo) == 'C' ? 'selected' : '' }}>C</option>
                            <option value="D" {{ old('paralelo', $course->paralelo) == 'D' ? 'selected' : '' }}>D</option>
                        </select>
                        @error('paralelo')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="turno" class="block text-sm font-medium text-gray-700">Turno</label>
                        <select name="turno" id="turno" class="mt-1 block w-full" required>
                            <option value="" disabled>Select Turno</option>
                            <option value="Mañana" {{ old('turno', $course->turno) == 'Mañana' ? 'selected' : '' }}>Mañana</option>
                            <option value="Tarde" {{ old('turno', $course->turno) == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                        </select>
                        @error('turno')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="asesor_id_1" class="block text-sm font-medium text-gray-700">Asesor 1</label>
                        <select name="asesor_id_1" id="asesor_id_1" class="mt-1 block w-full" required>
                            <option value="" disabled>Select Asesor 1</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ old('asesor_id_1', $course->asesor_id_1) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nombre }}</option>
                            @endforeach
                        </select>
                        @error('asesor_id_1')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="asesor_id_2" class="block text-sm font-medium text-gray-700">Asesor 2</label>
                        <select name="asesor_id_2" id="asesor_id_2" class="mt-1 block w-full" required>
                            <option value="" disabled>Select Asesor 2</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ old('asesor_id_2', $course->asesor_id_2) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nombre }}</option>
                            @endforeach
                        </select>
                        @error('asesor_id_2')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    <a href="{{ route('courses.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
