<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">


                    <table class="table-auto w-full">
                        <thead>
                            <tr>                                                   
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre Curso</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Paralelo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Gestión Académica</th>                             
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Turno</th>                     
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $course->nombre_curso }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $course->paralelo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $course->gestion_academica }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $course->turno }}</td>                         
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    <a href="{{ route('teachers_courses.show', $course->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Show</a>
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