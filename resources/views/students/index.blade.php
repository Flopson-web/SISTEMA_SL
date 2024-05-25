<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Curso</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Name</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Lastname</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">List Number</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">User</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $students)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $students->courses->nombre_curso }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $students->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $students->apellido }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $students->nro_de_lista }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $students->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

