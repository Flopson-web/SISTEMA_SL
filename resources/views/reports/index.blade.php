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


                    <div class="mb-4">
                        <a href="{{ route('reports.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Create Report</a>
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
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Options</th>
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

                                <td class="border px-4 py-2 text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('reports.edit', $reports->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                        <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $reports->id }}')">Delete</button>

                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
// forma 2
function confirmDelete(id) {
    alertify.confirm("¿Confirm delete record?", function (e) {
        if (e) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/students/' + id;
            form.innerHTML = '@csrf @method("DELETE")';
            document.body.appendChild(form);
            form.submit();
        } else {
            alertify.error('Cancel');
            return false;
        }
    });
} 

</script>