<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Reports List') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen2.jpg'); background-size: cover; background-attachment: fixed;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <!-- Barra de búsqueda -->
                <div class="mb-6">
                    <input type="text" id="search" placeholder="Buscar reportes..." class="w-full p-3 rounded border border-gray-300 bg-gray-700 text-white">
                </div>

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

                <div class="mb-4">
                    <a href="{{ route('reports.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Create Report</a>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    @foreach($reports as $report)
                    <div class="bg-gray-700 text-white bg-opacity-85 p-6 rounded-lg shadow-lg transition-shadow duration-300 transform hover:scale-105" style="border: 2px solid transparent; transition: background-color 0.3s, color 0.3s, border-color 0.3s, box-shadow 0.3s;">
                        <div class="flex items-center justify-between">
                            <!-- Información Básica -->
                            <div>
                                <h3 class="text-lg font-semibold mb-2">{{ $report->nombre }}</h3>
                                <p class="text-sm mb-1">Fecha: {{ $report->fecha }}</p>
                                <p class="text-sm mb-1">Ítem: {{ $report->item }}</p>
                                <p class="text-sm mb-1">Área: {{ $report->area }}</p>
                                <p class="text-sm mb-1">Trimestre: {{ $report->trimestre }}</p>
                                <p class="text-sm mb-1">Detalle/Observaciones: {{ $report->detalle_observaciones }}</p>
                                <p class="text-sm mb-1">Estudiante: {{ $report->students->nombre }}</p>
                                <p class="text-sm mb-1">Curso: {{ $report->courses->nombre_curso }}</p>
                                <p class="text-sm mb-1">Profesor: {{ $report->teacher->nombre }}</p>
                            </div>
                            <!-- Opciones -->
                            <div class="flex">
                                <a href="{{ route('reports.edit', $report->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                <button type="button" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $report->id }}')">Delete</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Paginación -->
                <div class="mt-6 flex justify-center">
                    {{ $reports->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // Confirmación de eliminación
    function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/reports/' + id;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            } else {
                alertify.error('Cancel');
                return false;
            }
        });
    }

    // Función de búsqueda
    document.getElementById('search').addEventListener('input', function() {
        let filter = this.value.toLowerCase();
        let reports = document.querySelectorAll('.grid > div');

        reports.forEach(function(report) {
            let text = report.textContent.toLowerCase();
            report.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>

<style>
    .grid > div:hover {
        background-color: white !important;
        color: black !important;
        border-color: #FFFF00 !important;
        box-shadow: 0 0 15px 5px rgba(255, 255, 0, 0.8) !important;
    }

    .pagination {
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a, .pagination span {
        color: white;
        background-color: #4a4a4a;
        border: 1px solid #FFFF00;
        padding: 8px 12px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .pagination a:hover, .pagination span:hover {
        background-color: yellow;
        color: black;
    }
</style>
