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

                    <div class="mb-4">
                        <a href="{{ route('courses.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Create Course</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>                                                   
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre Curso</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Paralelo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Gestión Académica</th>                             
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Turno</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Asesor 1</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Asesor 2</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $courses)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->nombre_curso }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->paralelo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->gestion_academica }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->turno }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->asesor1->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $courses->asesor2->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('courses.edit', $courses->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                        <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $courses->id }}')">Delete</button>
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