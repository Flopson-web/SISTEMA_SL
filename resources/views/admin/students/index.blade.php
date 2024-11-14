<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen2.jpg'); ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-700 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-gray-800 dark:bg-gray-700 border border-yellow-400 rounded-lg p-6 shadow-lg text-white">

                    <!-- Barra de búsqueda -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Buscar estudiantes..." class="w-full p-2 rounded border border-gray-300">
                    </div>

                    <!-- Botón de Crear Estudiante -->
                    <div class="mb-4">
                        <a href="{{ route('students.create') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Crear Estudiante</a>
                    </div>

                    <!-- Lista de Estudiantes -->
                    <div class="space-y-4">
                        @foreach($students as $student)
                            <div class="relative bg-gray-900 hover:bg-white text-white hover:text-black border border-yellow-500 hover:border-red-500 rounded-lg shadow-lg p-6 transition-all duration-300">
                                <div class="absolute inset-0 bg-yellow-500 opacity-25 rounded-lg animate-pulse"></div>
                                <div class="relative z-10">
                                    <h3 class="text-xl font-semibold mb-2">{{ $student->nombre }} {{ $student->apellido }}</h3>
                                    <p class="mb-1"><strong>Curso:</strong> {{ $student->courses->nombre_curso }}</p>
                                    <p class="mb-1"><strong>Nro de Lista:</strong> {{ $student->nro_de_lista }}</p>
                                    <p class="mb-1"><strong>Usuario:</strong> {{ $student->user->name }}</p>
                                    
                                    <div class="flex justify-between mt-4">
                                        <a href="{{ route('students.show', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver detalles</a>
                        
                                        <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $student->id }}')">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="mt-6">
                        {{ $students->links() }}
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

document.getElementById('search').addEventListener('input', function() {
    let filter = this.value.toLowerCase();
    let students = document.querySelectorAll('.space-y-4 > div');

    students.forEach(function(student) {
        let text = student.textContent.toLowerCase();
        student.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>
