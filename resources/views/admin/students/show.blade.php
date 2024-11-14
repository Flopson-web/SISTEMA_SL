<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-black via-cyan-500 to-yellow-500 animate-gradient" style="background-size: 200% 200%; background-attachment: fixed;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-black dark:bg-gray-700 border border-yellow-400 rounded-lg p-6 shadow-lg text-white">
                    @if ($student !== null)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4 border-b border-yellow-400 pb-2">Información Personal</h3>
                            <p><strong>Nombre:</strong> {{ $student->nombre }}</p>
                            <p><strong>Apellido:</strong> {{ $student->apellido }}</p>
                            <p><strong>Edad:</strong> {{ $student->edad }}</p>
                            <p><strong>Número de Lista:</strong> {{ $student->nro_de_lista }}</p>
                            <p><strong>Celular del Estudiante:</strong> {{ $student->celular_estudiante }}</p>
                            <p><strong>Dirección Actual:</strong> {{ $student->direccion_actual }}</p>
                            <p><strong>Teléfono de Casa:</strong> {{ $student->telefono_casa }}</p>
                            <p><strong>Vive con:</strong> {{ $student->vive_con }}</p>
                            <p><strong>Religión:</strong> {{ $student->religion }}</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold mb-4 border-b border-yellow-400 pb-2">Foto del Estudiante</h3>
                            <div class="flex justify-center mb-4">
                                <img src="{{ $student->foto }}" alt="Foto del Estudiante" class="rounded-full w-40 h-40 object-cover border-4 border-yellow-400">
                            </div>
                            <p><strong>Curso:</strong> {{ $student->courses->nombre_curso }}</p>
                            <p><strong>Usuario:</strong> 
                                @if($student->user)
                                    {{ $student->user->name }}
                                @else
                                    Usuario no asignado
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-2xl font-semibold mb-4 border-b border-yellow-400 pb-2">Información Familiar</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p><strong>Nombre del Padre:</strong> {{ $student->nombre_padre }}</p>
                                <p><strong>Trabajo del Padre:</strong> {{ $student->trabajo_padre }}</p>
                                <p><strong>Celular del Padre:</strong> {{ $student->celular_padre }}</p>
                            </div>
                            <div>
                                <p><strong>Nombre de la Madre:</strong> {{ $student->nombre_madre }}</p>
                                <p><strong>Trabajo de la Madre:</strong> {{ $student->trabajo_madre }}</p>
                                <p><strong>Celular de la Madre:</strong> {{ $student->celular_madre }}</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <p><strong>Número Total de Hermanos:</strong> {{ $student->nro_total_hermanos }}</p>
                            <p><strong>Lugar que Ocupa entre los Hermanos:</strong> {{ $student->lugar_que_ocupa }}</p>
                            <p><strong>Hermanos en el Colegio:</strong> {{ $student->hermanos_en_colegio }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-2xl font-semibold mb-4 border-b border-yellow-400 pb-2">Información de Trabajo y Salud</h3>
                        <div>
                            <p><strong>Trabaja:</strong> {{ $student->trabaja }}</p>
                            <p><strong>Lugar de Trabajo:</strong> {{ $student->lugar_trabajo }}</p>
                            <p><strong>Número de Dosis de COVID:</strong> {{ $student->nro_dosis_covid }}</p>
                        </div>
                    </div>

                    <div class="flex justify-end mt-8">
                        <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                    </div>

                    <div class="flex justify-end mt-8">
                        <a href="{{ route('admin.students.reports', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
                            Ver Reportes
                        </a>
                    </div>

                    <div class="flex justify-end mt-8">
                        <a href="{{ route('students.index')}}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>

                    @else
                        <p>Estudiante no encontrado</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .animate-gradient {
        animation: gradientAnimation 10s ease infinite;
    }

    @keyframes gradientAnimation {
        0% {
            background-position: 0% 0%;
        }
        50% {
            background-position: 100% 100%;
        }
        100% {
            background-position: 0% 0%;
        }
    }
</style>
