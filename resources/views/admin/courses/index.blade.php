<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen.jpg'); background-size: cover;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-500 dark:bg-red-700 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-red-500 dark:bg-red-700 border-b border-red-700 dark:border-red-600">

                    <!-- Barra de búsqueda -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Buscar cursos..." class="w-full p-2 rounded border border-gray-300">
                    </div>

                    <!-- Botón de Crear Curso -->
                    <div class="mb-4">
                        <a href="{{ route('courses.create') }}" class="bg-teal-500 dark:bg-teal-700 hover:bg-teal-600 dark:hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">Create Course</a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($courses as $course)
                        <div class="bg-opacity-70 p-6 rounded-lg shadow-lg border-2 border-white" style="background-color: {{ ['#1c1c1c', '#FFFF00', '#B0B0B0'][($loop->index % 3)] }};">
                            <h3 class="text-lg font-semibold mb-2" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">{{ $course->nombre_curso }}</h3>
                            <p class="mb-1" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">Paralelo: {{ $course->paralelo }}</p>
                            <p class="mb-1" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">Gestión Académica: {{ $course->gestion_academica }}</p>
                            <p class="mb-1" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">Turno: {{ $course->turno }}</p>
                            <p class="mb-1" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">Asesor 1: {{ $course->asesor1->nombre }}</p>
                            <p class="mb-4" style="color: {{ ['#FFFFFF', '#000000', '#000000'][($loop->index % 3)] }};">Asesor 2: {{ $course->asesor2->nombre }}</p>
                            <div class="flex justify-between">
                                <a href="{{ route('courses.edit', $course->id) }}" class="bg-red-500 dark:bg-red-700 hover:bg-red-600 dark:hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <button type="button" class="bg-red-500 dark:bg-red-700 hover:bg-red-600 dark:hover:bg-red-800 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $course->id }}')">Delete</button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="mt-6">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
function confirmDelete(id) {
    alertify.confirm("¿Está seguro de borrar el curso?", function (e) {
        if (e) {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/courses/' + id;
            form.innerHTML = '@csrf @method("DELETE")';
            document.body.appendChild(form);
            form.submit();
        } else {
            alertify.error('Cancel');
            return false;
        }
    });
} 

document.getElementById('search').addEventListener('input', function() {
    let filter = this.value.toLowerCase();
    let courses = document.querySelectorAll('.grid > div');

    courses.forEach(function(course) {
        let text = course.textContent.toLowerCase();
        course.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>
