<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

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

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Fecha</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Item</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Area</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Trimestre</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Detalle/Observaciones</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Student</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Course</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Profesor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $reports)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->fecha }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->item }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->area }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->trimestre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->detalle_observaciones }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->students->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->courses->nombre_curso }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reports->teacher->nombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
