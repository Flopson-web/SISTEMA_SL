<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Create Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <form method="POST" action="{{ route('students.store') }}" class="max-w-sm mx-auto" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                        <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
                        <input type="number" name="edad" id="edad" value="{{ old('edad') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label for="nro_de_lista" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nro de Lista</label>
                        <input type="text" name="nro_de_lista" id="nro_de_lista" value="{{ old('nro_de_lista') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="nombre_padre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del Padre</label>
                        <input type="text" name="nombre_padre" id="nombre_padre" value="{{ old('nombre_padre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="trabajo_padre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabajo del Padre</label>
                        <input type="text" name="trabajo_padre" id="trabajo_padre" value="{{ old('trabajo_padre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="celular_padre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular del Padre</label>
                        <input type="text" name="celular_padre" id="celular_padre" value="{{ old('celular_padre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="nombre_madre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Madre</label>
                        <input type="text" name="nombre_madre" id="nombre_madre" value="{{ old('nombre_madre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="trabajo_madre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabajo de la Madre</label>
                        <input type="text" name="trabajo_madre" id="trabajo_madre" value="{{ old('trabajo_madre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="celular_madre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular de la Madre</label>
                        <input type="text" name="celular_madre" id="celular_madre" value="{{ old('celular_madre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="nro_total_hermanos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nro Total de Hermanos</label>
                        <input type="number" name="nro_total_hermanos" id="nro_total_hermanos" value="{{ old('nro_total_hermanos') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="lugar_que_ocupa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lugar que Ocupa</label>
                        <input type="text" name="lugar_que_ocupa" id="lugar_que_ocupa" value="{{ old('lugar_que_ocupa') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="hermanos_en_colegio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hermanos en Colegio</label>
                        <input type="number" name="hermanos_en_colegio" id="hermanos_en_colegio" value="{{ old('hermanos_en_colegio') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="direccion_actual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección Actual</label>
                        <input type="text" name="direccion_actual" id="direccion_actual" value="{{ old('direccion_actual') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="telefono_casa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono de Casa</label>
                        <input type="text" name="telefono_casa" id="telefono_casa" value="{{ old('telefono_casa') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="celular_estudiante" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular del Estudiante</label>
                        <input type="text" name="celular_estudiante" id="celular_estudiante" value="{{ old('celular_estudiante') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="trabaja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabaja</label>
                        <select name="trabaja" id="trabaja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Sí" {{ old('trabaja') == 'Sí' ? 'selected' : '' }}>Sí</option>
                            <option value="No" {{ old('trabaja') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="lugar_trabajo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lugar de Trabajo</label>
                        <input type="text" name="lugar_trabajo" id="lugar_trabajo" value="{{ old('lugar_trabajo') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="nro_dosis_covid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nro Dosis Covid</label>
                        <input type="number" name="nro_dosis_covid" id="nro_dosis_covid" value="{{ old('nro_dosis_covid') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="vive_con" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vive Con</label>
                        <select name="vive_con" id="vive_con" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Padres" {{ old('vive_con') == 'Padres' ? 'selected' : '' }}>Padres</option>
                            <option value="Abuelos" {{ old('vive_con') == 'Abuelos' ? 'selected' : '' }}>Abuelos</option>
                            <option value="Tíos" {{ old('vive_con') == 'Tíos' ? 'selected' : '' }}>Tíos</option>
                            <option value="Hermanos" {{ old('vive_con') == 'Hermanos' ? 'selected' : '' }}>Hermanos</option>
                            <option value="Otros" {{ old('vive_con') == 'Otros' ? 'selected' : '' }}>Otros</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</label>
                        <select name="religion" id="religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Católica" {{ old('religion') == 'Católica' ? 'selected' : '' }}>Católica</option>
                            <option value="Evangélica" {{ old('religion') == 'Evangélica' ? 'selected' : '' }}>Evangélica</option>
                            <option value="Otra" {{ old('religion') == 'Otra' ? 'selected' : '' }}>Otra</option>
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

                    <div class="mb-5">
                        <label for="course_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                        <select name="course_id" id="course_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->nombre_curso }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <a href="{{ route('students.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
