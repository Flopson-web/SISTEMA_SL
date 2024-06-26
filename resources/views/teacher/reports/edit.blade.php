<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                 <!-- Tabla Explicativa de Ítems -->
                 <div class="mb-4">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Explicación de Ítems') }}
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-left">Código</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-left">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 1</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Impuntualidad en el ingreso a clases</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 2</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Falta a clase</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 3</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Faltas continuas o consecutivas a clases</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 4</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">No trae material necesario para trabajar en clase</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 5</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">No cumple con los deberes asignados en clase y para la casa</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">A-P 6</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Otros</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-left">Código</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-left">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 1</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Incumplimiento al Reglamento Interno</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 2</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Falta de respeto en sus relaciones interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 3</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Demuestra agresividad en sus relaciones interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 4</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">No practica el diálogo en la solución de conflictos interpersonales</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 5</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Maltrato y deterioro de mobiliario en el aula</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 6</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">No porta implementos de Bioseguridad</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 7</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Usa inadecuadamente los implementos de Bioseguridad</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">S-D 8</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white">Otros</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <form method="POST" action="{{ route('reports.update', $reports->id) }}" class="max-w-sm mx-auto">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $reports->nombre) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                        <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $reports->fecha) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item</label>
                        <select name="item" id="item" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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

                    <div class="mb-5">
                        <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                        <input type="text" name="area" id="area" value="{{ old('area', $reports->area) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="trimestre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trimestre</label>
                        <select name="trimestre" id="trimestre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="1ER" {{ old('trimestre', $reports->trimestre) === '1ER' ? 'selected' : '' }}>1ER</option>
                            <option value="2DO" {{ old('trimestre', $reports->trimestre) === '2DO' ? 'selected' : '' }}>2DO</option>
                            <option value="3ER" {{ old('trimestre', $reports->trimestre) === '3ER' ? 'selected' : '' }}>3ER</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="detalle_observaciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalle Observaciones</label>
                        <textarea name="detalle_observaciones" id="detalle_observaciones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="4">{{ old('detalle_observaciones', $reports->detalle_observaciones) }}</textarea>
                    </div>

                    <div class="mb-5">
                        <label for="student_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student</label>
                        <select name="student_id" id="student_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" {{ old('student_id', $student->student_id) == $student->id ? 'selected' : '' }}>{{ $student->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="course_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                        <select name="course_id" id="course_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id', $course->course_id) == $course->id ? 'selected' : '' }}>{{ $course->nombre_curso }}</option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <a href="{{ route('reports.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>