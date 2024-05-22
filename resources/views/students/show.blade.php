<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    @if ($student !== null)
                    <table class="table table-striped">
                        <tr>
                            <th>Nombre</th>
                            <td>{{ $student->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellido</th>
                            <td>{{ $student->apellido }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td><img src="{{ $student->foto }}" alt="Foto del Estudiante" style="width: 100px;"></td>
                        </tr>
                        <tr>
                            <th>Edad</th>
                            <td>{{ $student->edad }}</td>
                        </tr>
                        <tr>
                            <th>Número de Lista</th>
                            <td>{{ $student->nro_de_lista }}</td>
                        </tr>
                        <tr>
                            <th>Nombre del Padre</th>
                            <td>{{ $student->nombre_padre }}</td>
                        </tr>
                        <tr>
                            <th>Trabajo del Padre</th>
                            <td>{{ $student->trabajo_padre }}</td>
                        </tr>
                        <tr>
                            <th>Celular del Padre</th>
                            <td>{{ $student->celular_padre }}</td>
                        </tr>
                        <tr>
                            <th>Nombre de la Madre</th>
                            <td>{{ $student->nombre_madre }}</td>
                        </tr>
                        <tr>
                            <th>Trabajo de la Madre</th>
                            <td>{{ $student->trabajo_madre }}</td>
                        </tr>
                        <tr>
                            <th>Celular de la Madre</th>
                            <td>{{ $student->celular_madre }}</td>
                        </tr>
                        <tr>
                            <th>Número Total de Hermanos</th>
                            <td>{{ $student->nro_total_hermanos }}</td>
                        </tr>
                        <tr>
                            <th>Lugar que Ocupa</th>
                            <td>{{ $student->lugar_que_ocupa }}</td>
                        </tr>
                        <tr>
                            <th>Hermanos en el Colegio</th>
                            <td>{{ $student->hermanos_en_colegio }}</td>
                        </tr>
                        <tr>
                            <th>Dirección Actual</th>
                            <td>{{ $student->direccion_actual }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono de Casa</th>
                            <td>{{ $student->telefono_casa }}</td>
                        </tr>
                        <tr>
                            <th>Celular del Estudiante</th>
                            <td>{{ $student->celular_estudiante }}</td>
                        </tr>
                        <tr>
                            <th>Trabaja</th>
                            <td>{{ $student->trabaja }}</td>
                        </tr>
                        <tr>
                            <th>Lugar de Trabajo</th>
                            <td>{{ $student->lugar_trabajo }}</td>
                        </tr>
                        <tr>
                            <th>Número de Dosis de COVID</th>
                            <td>{{ $student->nro_dosis_covid }}</td>
                        </tr>
                        <tr>
                            <th>Vive con</th>
                            <td>{{ $student->vive_con }}</td>
                        </tr>
                        <tr>
                            <th>Religión</th>
                            <td>{{ $student->religion }}</td>
                        </tr>
                        <tr>
                            <th>Curso</th>
                            <td>{{ $student->courses->nombre_curso }}</td>
                        </tr>
                        <tr>
                            <th>User</th>
                            <td> @if($student->user)
                                {{ $student->user->name }}
                            @else
                                Usuario no asignado
                            @endif
                            </td>
                        </tr>
                    </table>
                @else
                    <p>Estudiante no encontrado</p>
                @endif
            

                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mt-4">
        <a href="{{ route('students.edit', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Editar
        </a>
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