<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Reports for ' . $student->nombre) }}
        </h2>
    </x-slot>

    <div class="py-12" style="background: linear-gradient(135deg, black, yellow, cyan, white, red); background-size: 300% 300%; animation: gradientShift 8s ease infinite;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8 transition-transform transform hover:scale-105">
                <h3 class="text-2xl text-gray-900 dark:text-gray-100 font-bold mb-6 text-center">{{ __('Lista de Reportes') }}</h3>

                 <!-- Formulario de Filtros -->
                 <div class="mb-4">
                    <form method="GET" action="{{ route('admin.students.reports', $student->id) }}">
                        <div class="flex space-x-4 mb-4">
                            <input type="date" name="fecha" class="p-2 rounded border border-gray-300" placeholder="Fecha" value="{{ request('fecha') }}">
                            <select name="trimestre" class="p-2 rounded border border-gray-300">
                                <option value="">Seleccionar Trimestre</option>
                                <option value="1ER" {{ request('trimestre') == '1ER' ? 'selected' : '' }}>Primer Trimestre</option>
                                <option value="2DO" {{ request('trimestre') == '2DO' ? 'selected' : '' }}>Segundo Trimestre</option>
                                <option value="3ER" {{ request('trimestre') == '3ER' ? 'selected' : '' }}>Tercer Trimestre</option>
                            </select>
                            <select name="area" class="p-2 rounded border border-gray-300">
                                <option value="">Seleccionar Área</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area }}" {{ request('area') == $area ? 'selected' : '' }}>{{ $area }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Filtrar</button>
                        </div>
                    </form>
                </div>

                <table class="table-auto w-full text-center rounded-lg overflow-hidden shadow-lg">
                    <thead class="bg-black text-white">
                        <tr>
                            <th class="px-4 py-3">{{ __('Fecha') }}</th>
                            <th class="px-4 py-3">{{ __('Ítem') }}</th>
                            <th class="px-4 py-3">{{ __('Área') }}</th>
                            <th class="px-4 py-3">{{ __('Trimestre') }}</th>
                            <th class="px-4 py-3">{{ __('Detalle/Observaciones') }}</th>
                            <th class="px-4 py-3">{{ __('Profesor') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-700">
                        @foreach($reports as $report)
                        <tr class="transition-colors duration-300 hover:bg-yellow-300 dark:hover:bg-yellow-500">
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->fecha }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->item }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->area }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->trimestre }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->detalle_observaciones }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $report->teacher->nombre }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Botones de Exportación -->
<!-- Botones de Exportación -->
<div class="flex justify-between mt-8">
    <a href="{{ route('students.exportReportsCsv', $student->id) }}?fecha={{ request('fecha') }}&trimestre={{ request('trimestre') }}&area={{ request('area') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition-transform transform hover:scale-110">
        Exportar a CSV
    </a>
    <a href="{{ route('students.reports.exportPdf', $student->id) }}?fecha={{ request('fecha') }}&trimestre={{ request('trimestre') }}&area={{ request('area') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition-transform transform hover:scale-110">
        Exportar a PDF
    </a>
</div>


                <!-- Botón de Volver -->
                <div class="mt-8 text-center">
                    <a href="{{ route('students.show', $student->id) }}" class="inline-block bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-lg transition-transform transform hover:scale-110">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>
