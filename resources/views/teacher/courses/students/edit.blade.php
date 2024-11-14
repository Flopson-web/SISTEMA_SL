<x-app-layout>
<div class="container">
    <h1>Editar Estudiante: {{ $student->nombre }}</h1>
    <form method="POST" action="{{ route('teachers_courses.students.update', ['course' => $course->id, 'student' => $student->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $student->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $student->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="{{ $student->edad }}">
        </div>
        <div class="form-group">
            <label for="nro_de_lista">Número de Lista</label>
            <input type="number" class="form-control" id="nro_de_lista" name="nro_de_lista" value="{{ $student->nro_de_lista }}">
        </div>
        <div class="form-group">
            <label for="nombre_padre">Nombre del Padre</label>
            <input type="text" class="form-control" id="nombre_padre" name="nombre_padre" value="{{ $student->nombre_padre }}">
        </div>
        <div class="form-group">
            <label for="trabajo_padre">Trabajo del Padre</label>
            <input type="text" class="form-control" id="trabajo_padre" name="trabajo_padre" value="{{ $student->trabajo_padre }}">
        </div>
        <div class="form-group">
            <label for="celular_padre">Celular del Padre</label>
            <input type="number" class="form-control" id="celular_padre" name="celular_padre" value="{{ $student->celular_padre }}">
        </div>
        <div class="form-group">
            <label for="nombre_madre">Nombre de la Madre</label>
            <input type="text" class="form-control" id="nombre_madre" name="nombre_madre" value="{{ $student->nombre_madre }}">
        </div>
        <div class="form-group">
            <label for="trabajo_madre">Trabajo de la Madre</label>
            <input type="text" class="form-control" id="trabajo_madre" name="trabajo_madre" value="{{ $student->trabajo_madre }}">
        </div>
        <div class="form-group">
            <label for="celular_madre">Celular de la Madre</label>
            <input type="number" class="form-control" id="celular_madre" name="celular_madre" value="{{ $student->celular_madre }}">
        </div>
        <div class="form-group">
            <label for="nro_total_hermanos">Número Total de Hermanos</label>
            <input type="number" class="form-control" id="nro_total_hermanos" name="nro_total_hermanos" value="{{ $student->nro_total_hermanos }}">
        </div>
        <div class="form-group">
            <label for="lugar_que_ocupa">Lugar que Ocupa</label>
            <input type="text" class="form-control" id="lugar_que_ocupa" name="lugar_que_ocupa" value="{{ $student->lugar_que_ocupa }}">
        </div>
        <div class="form-group">
            <label for="hermanos_en_colegio">Hermanos en el Colegio</label>
            <input type="number" class="form-control" id="hermanos_en_colegio" name="hermanos_en_colegio" value="{{ $student->hermanos_en_colegio }}">
        </div>
        <div class="form-group">
            <label for="direccion_actual">Dirección Actual</label>
            <input type="text" class="form-control" id="direccion_actual" name="direccion_actual" value="{{ $student->direccion_actual }}">
        </div>
        <div class="form-group">
            <label for="telefono_casa">Teléfono de Casa</label>
            <input type="number" class="form-control" id="telefono_casa" name="telefono_casa" value="{{ $student->telefono_casa }}">
        </div>
        <div class="form-group">
            <label for="celular_estudiante">Celular del Estudiante</label>
            <input type="number" class="form-control" id="celular_estudiante" name="celular_estudiante" value="{{ $student->celular_estudiante }}">
        </div>
        <div class="form-group">
            <label for="trabaja">Trabaja</label>
            <select class="form-control" id="trabaja" name="trabaja">
            <option value="Sí" {{ $student->trabaja == 'Sí' ? 'selected' : '' }}>Sí</option>
            <option value="No" {{ $student->trabaja == 'No' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lugar_trabajo">Lugar de Trabajo</label>
            <input type="text" class="form-control" id="lugar_trabajo" name="lugar_trabajo" value="{{ $student->lugar_trabajo }}">
        </div>
        <div class="form-group">
            <label for="nro_dosis_covid">Número de Dosis de COVID</label>
            <input type="number" class="form-control" id="nro_dosis_covid" name="nro_dosis_covid" value="{{ $student->nro_dosis_covid }}">
        </div>
        <div class="form-group">
            <label for="vive_con">Vive con</label>
            <select class="form-control" id="vive_con" name="vive_con">
            <option value="Padres" {{ $student->vive_con == 'Padres' ? 'selected' : '' }}>Padres</option>
            <option value="Abuelos" {{ $student->vive_con == 'Abuelos' ? 'selected' : '' }}>Abuelos</option>
            <option value="Tíos" {{ $student->vive_con == 'Tíos' ? 'selected' : '' }}>Tíos</option>
            <option value="Hermanos" {{ $student->vive_con == 'Hermanos' ? 'selected' : '' }}>Hermanos</option>
            <option value="Otros" {{ $student->vive_con == 'Otros' ? 'selected' : '' }}>Otros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="religion">Religión</label>
            <select class="form-control" id="religion" name="religion">
            <option value="Catolica" {{ $student->religion == 'Catolica' ? 'selected' : '' }}>Católica</option>
            <option value="Evangelica" {{ $student->religion == 'Evangelica' ? 'selected' : '' }}>Evangélica</option>
            <option value="Otra" {{ $student->religion == 'Otra' ? 'selected' : '' }}>Otra</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
            <select name="user_id" id="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
</x-app-layout>

