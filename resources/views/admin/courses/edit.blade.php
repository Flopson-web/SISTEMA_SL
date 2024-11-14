<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Course') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen.jpg'); background-size: cover;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-80 dark:bg-red-800 dark:bg-opacity-70 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="{{ route('courses.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nombre_curso" class="block text-white font-bold">Nombre del Curso</label>
                        <input type="text" name="nombre_curso" id="nombre_curso" value="{{ old('nombre_curso', $course->nombre_curso) }}" class="w-full p-2 rounded border border-white bg-black text-white @error('nombre_curso') border-red-500 @enderror" minlength="5" maxlength="255" required>
                        @error('nombre_curso')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gestion_academica" class="block text-white font-bold">Gestión Académica</label>
                        <input type="number" name="gestion_academica" id="gestion_academica" value="{{ old('gestion_academica', $course->gestion_academica) }}" class="w-full p-2 rounded border border-white bg-black text-white @error('gestion_academica') border-red-500 @enderror" min="2024" max="2999" required>
                        @error('gestion_academica')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="paralelo" class="block text-white font-bold">Paralelo</label>
                        <select name="paralelo" id="paralelo" class="w-full p-2 rounded border border-white bg-black text-white @error('paralelo') border-red-500 @enderror" required>
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
                        <label for="turno" class="block text-white font-bold">Turno</label>
                        <select name="turno" id="turno" class="w-full p-2 rounded border border-white bg-black text-white @error('turno') border-red-500 @enderror" required>
                            <option value="Mañana" {{ old('turno', $course->turno) == 'Mañana' ? 'selected' : '' }}>Mañana</option>
                            <option value="Tarde" {{ old('turno', $course->turno) == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                        </select>
                        @error('turno')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="asesor_id_1" class="block text-white font-bold">Asesor 1</label>
                        <select name="asesor_id_1" id="asesor_id_1" class="w-full p-2 rounded border border-white bg-black text-white @error('asesor_id_1') border-red-500 @enderror" required>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ old('asesor_id_1', $course->asesor_id_1) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nombre }}</option>
                            @endforeach
                        </select>
                        @error('asesor_id_1')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="asesor_id_2" class="block text-white font-bold">Asesor 2</label>
                        <select name="asesor_id_2" id="asesor_id_2" class="w-full p-2 rounded border border-white bg-black text-white @error('asesor_id_2') border-red-500 @enderror" required>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ old('asesor_id_2', $course->asesor_id_2) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nombre }}</option>
                            @endforeach
                        </select>
                        @error('asesor_id_2')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded">Modificar Curso</button>
                    </div><br>

                    <div class="flex justify-end">
                        <a href="{{ route('courses.index')}}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
