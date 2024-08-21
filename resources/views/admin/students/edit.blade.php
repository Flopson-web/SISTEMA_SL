<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen.jpg'); background-size: cover;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-500 dark:bg-red-700 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('students.update', $students->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $students->nombre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        @error('nombre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 text-sm font-medium text-white">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $students->apellido) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        @error('apellido')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="foto" class="block mb-2 text-sm font-medium text-white">Foto</label>
                        <input type="file" name="foto" id="foto" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('foto')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="edad" class="block mb-2 text-sm font-medium text-white">Edad</label>
                        <input type="number" name="edad" id="edad" value="{{ old('edad', $students->edad) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        @error('edad')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="nro_de_lista" class="block mb-2 text-sm font-medium text-white">Nro de Lista</label>
                        <input type="text" name="nro_de_lista" id="nro_de_lista" value="{{ old('nro_de_lista', $students->nro_de_lista) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('nro_de_lista')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="nombre_padre" class="block mb-2 text-sm font-medium text-white">Nombre del Padre</label>
                        <input type="text" name="nombre_padre" id="nombre_padre" value="{{ old('nombre_padre', $students->nombre_padre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('nombre_padre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="trabajo_padre" class="block mb-2 text-sm font-medium text-white">Trabajo del Padre</label>
                        <input type="text" name="trabajo_padre" id="trabajo_padre" value="{{ old('trabajo_padre', $students->trabajo_padre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('trabajo_padre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="celular_padre" class="block mb-2 text-sm font-medium text-white">Celular del Padre</label>
                        <input type="text" name="celular_padre" id="celular_padre" value="{{ old('celular_padre', $students->celular_padre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('celular_padre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="nombre_madre" class="block mb-2 text-sm font-medium text-white">Nombre de la Madre</label>
                        <input type="text" name="nombre_madre" id="nombre_madre" value="{{ old('nombre_madre', $students->nombre_madre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('nombre_madre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="trabajo_madre" class="block mb-2 text-sm font-medium text-white">Trabajo de la Madre</label>
                        <input type="text" name="trabajo_madre" id="trabajo_madre" value="{{ old('trabajo_madre', $students->trabajo_madre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('trabajo_madre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="celular_madre" class="block mb-2 text-sm font-medium text-white">Celular de la Madre</label>
                        <input type="text" name="celular_madre" id="celular_madre" value="{{ old('celular_madre', $students->celular_madre) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('celular_madre')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="nro_total_hermanos" class="block mb-2 text-sm font-medium text-white">Nro Total de Hermanos</label>
                        <input type="number" name="nro_total_hermanos" id="nro_total_hermanos" value="{{ old('nro_total_hermanos', $students->nro_total_hermanos) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('nro_total_hermanos')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="lugar_que_ocupa" class="block mb-2 text-sm font-medium text-white">Lugar que Ocupa</label>
                        <input type="text" name="lugar_que_ocupa" id="lugar_que_ocupa" value="{{ old('lugar_que_ocupa', $students->lugar_que_ocupa) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('lugar_que_ocupa')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="hermanos_en_colegio" class="block mb-2 text-sm font-medium text-white">Hermanos en Colegio</label>
                        <input type="number" name="hermanos_en_colegio" id="hermanos_en_colegio" value="{{ old('hermanos_en_colegio', $students->hermanos_en_colegio) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('hermanos_en_colegio')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="direccion_actual" class="block mb-2 text-sm font-medium text-white">Direccion Actual</label>
                        <input type="text" name="direccion_actual" id="direccion_actual" value="{{ old('direccion_actual', $students->direccion_actual) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('direccion_actual')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="telefono_casa" class="block mb-2 text-sm font-medium text-white">Telefono de Casa</label>
                        <input type="text" name="telefono_casa" id="telefono_casa" value="{{ old('telefono_casa', $students->telefono_casa) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('telefono_casa')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="celular_estudiante" class="block mb-2 text-sm font-medium text-white">Celular del Estudiante</label>
                        <input type="text" name="celular_estudiante" id="celular_estudiante" value="{{ old('celular_estudiante', $students->celular_estudiante) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('celular_estudiante')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="trabaja" class="block mb-2 text-sm font-medium text-white">Trabaja</label>
                        <select name="trabaja" id="trabaja" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Sí" {{ old('trabaja', $students->trabaja) == 'Sí' ? 'selected' : '' }}>Sí</option>
                            <option value="No" {{ old('trabaja', $students->trabaja) == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('trabaja')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="lugar_trabajo" class="block mb-2 text-sm font-medium text-white">Lugar de Trabajo</label>
                        <input type="text" name="lugar_trabajo" id="lugar_trabajo" value="{{ old('lugar_trabajo', $students->lugar_trabajo) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('lugar_trabajo')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="nro_dosis_covid" class="block mb-2 text-sm font-medium text-white">Nro Dosis Covid</label>
                        <input type="number" name="nro_dosis_covid" id="nro_dosis_covid" value="{{ old('nro_dosis_covid', $students->nro_dosis_covid) }}" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('nro_dosis_covid')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="vive_con" class="block mb-2 text-sm font-medium text-white">Vive Con</label>
                        <select name="vive_con" id="vive_con" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Padres" {{ old('vive_con', $students->vive_con) == 'Padres' ? 'selected' : '' }}>Padres</option>
                            <option value="Abuelos" {{ old('vive_con', $students->vive_con) == 'Abuelos' ? 'selected' : '' }}>Abuelos</option>
                            <option value="Tios" {{ old('vive_con', $students->vive_con) == 'Tios' ? 'selected' : '' }}>Tíos</option>
                            <option value="Hermanos" {{ old('vive_con', $students->vive_con) == 'Hermanos' ? 'selected' : '' }}>Hermanos</option>
                            <option value="Otros" {{ old('vive_con', $students->vive_con) == 'Otros' ? 'selected' : '' }}>Otros</option>
                        </select>
                        @error('vive_con')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="religion" class="block mb-2 text-sm font-medium text-white">Religion</label>
                        <select name="religion" id="religion" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Catolica" {{ old('religion', $students->religion) == 'Catolica' ? 'selected' : '' }}>Catolica</option>
                            <option value="Evangelica" {{ old('religion', $students->religion) == 'Evangelica' ? 'selected' : '' }}>Evangelica</option>
                            <option value="Otra" {{ old('religion', $students->religion) == 'Otra' ? 'selected' : '' }}>Otra</option>
                        </select>
                        @error('religion')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="user_id" class="block mb-2 text-sm font-medium text-white">User</label>
                        <select name="user_id" id="user_id" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id', $students->user_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="course_id" class="block mb-2 text-sm font-medium text-white">Course</label>
                        <select name="course_id" id="course_id" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id', $students->course_id) == $course->id ? 'selected' : '' }}>{{ $course->nombre_curso }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <a href="{{ route('students.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
