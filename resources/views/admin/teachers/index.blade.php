<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Teachers List') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen2.jpg'); background-size;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 border-b border-red-600 dark:border-red-500">

                    <!-- Barra de búsqueda -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Buscar profesores..." class="w-full p-2 rounded border border-gray-300 bg-gray-700 text-white">
                    </div>

                    <!-- Botón de Crear Profesor -->
                    <div class="mb-4">
                        <a href="{{ route('teachers.create') }}" class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded">Create Teacher</a>
                    </div>

                    <!-- Listado de Profesores -->
                    <div class="space-y-4">
                        @foreach($teachers as $teacher)
                        <div class="bg-gray-700 text-white bg-opacity-85 p-6 rounded-lg shadow-lg transition-shadow duration-300 transform hover:scale-105" style="border: 2px solid transparent; transition: background-color 0.3s, color 0.3s, border-color 0.3s, box-shadow 0.3s;">
                            <div class="flex items-center justify-between">
                                <!-- Información Básica -->
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">{{ $teacher->nombre }} {{ $teacher->apellido }}</h3>
                                    <p class="text-sm mb-1">Especialidad: {{ $teacher->especialidad }}</p>
                                    <p class="text-sm mb-1">Edad: {{ $teacher->edad }}</p>
                                    <p class="text-sm mb-1">Celular: {{ $teacher->celular }}</p>
                                    <p class="text-sm mb-1">Usuario: {{ $teacher->user->name }}</p>
                                </div>
                                <!-- Opciones -->
                                <div class="flex">
                                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                    <button type="button" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $teacher->id }}')">Delete</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="mt-6 flex justify-center">
                        {{ $teachers->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
function confirmDelete(id) {
    alertify.confirm("¿Confirm delete record?", function (e) {
        if (e) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/teachers/' + id;
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
    let teachers = document.querySelectorAll('.space-y-4 > div');

    teachers.forEach(function(teacher) {
        let text = teacher.textContent.toLowerCase();
        teacher.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>

<style>
    .space-y-4 > div:hover {
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
