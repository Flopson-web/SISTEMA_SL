<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen2.jpg'); background-size: cover; background-attachment: fixed;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <!-- Tabla Explicativa de Ítems -->
                <div class="mb-8">
                    <h3 class="font-semibold text-xl text-white leading-tight mb-4">
                        {{ __('Explicación de Ítems') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <table class="table-auto w-full bg-black bg-opacity-50 text-white rounded-lg">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Código</th>
                                    <th class="px-4 py-2 text-left">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 1</td>
                                    <td class="border-t border-white px-4 py-2">Impuntualidad en el ingreso a clases</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 2</td>
                                    <td class="border-t border-white px-4 py-2">Falta a clase</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 3</td>
                                    <td class="border-t border-white px-4 py-2">Faltas continuas o consecutivas a clases</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 4</td>
                                    <td class="border-t border-white px-4 py-2">No trae material necesario para trabajar en clase</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 5</td>
                                    <td class="border-t border-white px-4 py-2">No cumple con los deberes asignados en clase y para la casa</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">A-P 6</td>
                                    <td class="border-t border-white px-4 py-2">Otros</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table-auto w-full bg-black bg-opacity-50 text-white rounded-lg">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Código</th>
                                    <th class="px-4 py-2 text-left">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 1</td>
                                    <td class="border-t border-white px-4 py-2">Incumplimiento al Reglamento Interno</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 2</td>
                                    <td class="border-t border-white px-4 py-2">Falta de respeto en sus relaciones interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 3</td>
                                    <td class="border-t border-white px-4 py-2">Demuestra agresividad en sus relaciones interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 4</td>
                                    <td class="border-t border-white px-4 py-2">No practica el diálogo en la solución de conflictos interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 5</td>
                                    <td class="border-t border-white px-4 py-2">Maltrato y deterioro de mobiliario en el aula</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 6</td>
                                    <td class="border-t border-white px-4 py-2">No porta implementos de Bioseguridad</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 7</td>
                                    <td class="border-t border-white px-4 py-2">Usa inadecuadamente los implementos de Bioseguridad</td>
                                </tr>
                                <tr>
                                    <td class="border-t border-white px-4 py-2">S-D 8</td>
                                    <td class="border-t border-white px-4 py-2">Otros</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Formulario de Edición -->
                <form method="POST" action="{{ route('reports.update', $reports->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap -mx-4 mb-6">
                        <div class="w-full px-4 mb-6">
                            <label for="nombre" class="block text-white text-lg font-medium mb-2">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $reports->nombre) }}" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="fecha" class="block text-white text-lg font-medium mb-2">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $reports->fecha) }}" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="item" class="block text-white text-lg font-medium mb-2">Ítem</label>
                            <select name="item" id="item" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                <option value="A-P 1" {{ old('item', $reports->item) === 'A-P 1' ? 'selected' : '' }}>A-P 1</option>
                                <option value="A-P 2" {{ old('item', $reports->item) === 'A-P 2' ? 'selected' : '' }}>A-P 2</option>
                                <option value="A-P 3" {{ old('item', $reports->item) === 'A-P 3' ? 'selected' : '' }}>A-P 3</option>
                                <option value="A-P 4" {{ old('item', $reports->item) === 'A-P 4' ? 'selected' : '' }}>A-P 4</option>
                                <option value="A-P 5" {{ old('item', $reports->item) === 'A-P 5' ? 'selected' : '' }}>A-P 5</option>
                                <option value="A-P 6" {{ old('item', $reports->item) === 'A-P 6' ? 'selected' : '' }}>A-P 6</option>
                                <option value="S-D 1" {{ old('item', $reports->item) === 'S-D 1' ? 'selected' : '' }}>S-D 1</option>
                                <option value="S-D 2" {{ old('item', $reports->item) === 'S-D 2' ? 'selected' : '' }}>S-D 2</option>
                                <option value="S-D 3" {{ old('item', $reports->item) === 'S-D 3' ? 'selected' : '' }}>S-D 3</option>
                                <option value="S-D 4" {{ old('item', $reports->item) === 'S-D 4' ? 'selected' : '' }}>S-D 4</option>
                                <option value="S-D 5" {{ old('item', $reports->item) === 'S-D 5' ? 'selected' : '' }}>S-D 5</option>
                                <option value="S-D 6" {{ old('item', $reports->item) === 'S-D 6' ? 'selected' : '' }}>S-D 6</option>
                                <option value="S-D 7" {{ old('item', $reports->item) === 'S-D 7' ? 'selected' : '' }}>S-D 7</option>
                                <option value="S-D 8" {{ old('item', $reports->item) === 'S-D 8' ? 'selected' : '' }}>S-D 8</option>
                            </select>
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="area" class="block text-white text-lg font-medium mb-2">Área</label>
                            <input type="text" name="area" id="area" value="{{ old('area', $reports->area) }}" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="trimestre" class="block text-white text-lg font-medium mb-2">Trimestre</label>
                            <select name="trimestre" id="trimestre" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                <option value="1ER" {{ old('trimestre', $reports->trimestre) === '1ER' ? 'selected' : '' }}>1ER</option>
                                <option value="2DO" {{ old('trimestre', $reports->trimestre) === '2DO' ? 'selected' : '' }}>2DO</option>
                                <option value="3ER" {{ old('trimestre', $reports->trimestre) === '3ER' ? 'selected' : '' }}>3ER</option>
                            </select>
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="detalle_observaciones" class="block text-white text-lg font-medium mb-2">Detalle/Observaciones</label>
                            <textarea name="detalle_observaciones" id="detalle_observaciones" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500" rows="4">{{ old('detalle_observaciones', $reports->detalle_observaciones) }}</textarea>
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="student_id" class="block text-white text-lg font-medium mb-2">Estudiante</label>
                            <select name="student_id" id="student_id" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}" {{ old('student_id', $reports->student_id) == $student->id ? 'selected' : '' }}>{{ $student->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="course_id" class="block text-white text-lg font-medium mb-2">Curso</label>
                            <select name="course_id" id="course_id" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('course_id', $reports->course_id) == $course->id ? 'selected' : '' }}>{{ $course->nombre_curso }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full px-4 mb-6">
                            <label for="teacher_id" class="block text-white text-lg font-medium mb-2">Profesor</label>
                            <select name="teacher_id" id="teacher_id" class="appearance-none block w-full bg-gray-900 text-white border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ old('teacher_id', $reports->teacher_id) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-end px-4">
                            <button type="submit" class="bg-yellow-500 text-black hover:bg-yellow-600 font-bold py-2 px-4 rounded-full shadow-lg transition-transform transform hover:scale-105">Guardar</button>
                            <a href="{{ route('reports.index') }}" class="ml-4 bg-gray-700 text-white hover:bg-gray-800 font-bold py-2 px-4 rounded-full shadow-lg transition-transform transform hover:scale-105">Cancelar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
