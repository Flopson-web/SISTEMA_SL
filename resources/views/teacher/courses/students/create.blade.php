<x-app-layout>
<div class="container">
    <h1>Crear Estudiante en Curso: {{ $course->nombre_curso }}</h1>
    <form method="POST" action="{{ route('teachers_courses.students.store', ['course' => $course->id]) }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            @error('nombre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
            @error('apellido')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
           
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            @error('foto')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad">
            @error('edad')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nro_de_lista">Número de Lista</label>
            <input type="number" class="form-control" id="nro_de_lista" name="nro_de_lista">
            @error('nro_de_lista')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nombre_padre">Nombre del Padre</label>
            <input type="text" class="form-control" id="nombre_padre" name="nombre_padre">
            @error('nombre_padre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="trabajo_padre">Trabajo del Padre</label>
            <input type="text" class="form-control" id="trabajo_padre" name="trabajo_padre">
            @error('trabajo_padre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="celular_padre">Celular del Padre</label>
            <input type="number" class="form-control" id="celular_padre" name="celular_padre">
            @error('celular_padre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nombre_madre">Nombre de la Madre</label>
            <input type="text" class="form-control" id="nombre_madre" name="nombre_madre">
            @error('nombre_madre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="trabajo_madre">Trabajo de la Madre</label>
            <input type="text" class="form-control" id="trabajo_madre" name="trabajo_madre">
            @error('trabajo_madre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="celular_madre">Celular de la Madre</label>
            <input type="number" class="form-control" id="celular_madre" name="celular_madre">
            @error('celular_madre')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nro_total_hermanos">Número Total de Hermanos</label>
            <input type="number" class="form-control" id="nro_total_hermanos" name="nro_total_hermanos">
            @error('nro_total_hermanos')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lugar_que_ocupa">Lugar que Ocupa</label>
            <input type="text" class="form-control" id="lugar_que_ocupa" name="lugar_que_ocupa">
            @error('lugar_que_ocupa')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="hermanos_en_colegio">Hermanos en el Colegio</label>
            <input type="number" class="form-control" id="hermanos_en_colegio" name="hermanos_en_colegio">
            @error('hermanos_en_colegio')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="direccion_actual">Dirección Actual</label>
            <input type="text" class="form-control" id="direccion_actual" name="direccion_actual">
            @error('direccion_actual')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="telefono_casa">Teléfono de Casa</label>
            <input type="number" class="form-control" id="telefono_casa" name="telefono_casa">
            @error('telefono_casa')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="celular_estudiante">Celular del Estudiante</label>
            <input type="number" class="form-control" id="celular_estudiante" name="celular_estudiante">
            @error('celular_estudiante')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="trabaja">¿Trabaja?</label>
            <select class="form-control" id="trabaja" name="trabaja">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
            </select>
            @error('trabaja')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lugar_trabajo">Lugar de Trabajo</label>
            <input type="text" class="form-control" id="lugar_trabajo" name="lugar_trabajo">
            @error('lugar_trabajo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nro_dosis_covid">Número de Dosis de COVID</label>
            <input type="number" class="form-control" id="nro_dosis_covid" name="nro_dosis_covid">
            @error('nro_dosis_covid')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="vive_con">Vive con</label>
            <select class="form-control" id="vive_con" name="vive_con">
            <option value="Padres">Padres</option>
            <option value="Abuelos">Abuelos</option>
            <option value="Tíos">Tíos</option>
            <option value="Hermanos">Hermanos</option>
            <option value="Otros">Otros</option>
            </select>
            @error('vive_con')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="religion">Religión</label>
            <select class="form-control" id="religion" name="religion">
            <option value="Católica">Católica</option>
            <option value="Evangélica">Evangélica</option>
            <option value="Otra">Otra</option>
            </select>
            @error('religion')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
            <select name="user_id" id="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar Estudiante</button>
    </form>
</div>
</x-app-layout>
