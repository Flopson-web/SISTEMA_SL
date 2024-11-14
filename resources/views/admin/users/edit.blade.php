<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-center justify-center min-h-screen" style="background-image: url('/images/imagen2.jpg'); background-size: cover;">
        <div class="max-w-lg w-full bg-gray-900 bg-opacity-90 p-8 rounded-lg shadow-xl transform transition-all hover:scale-105 hover:shadow-2xl">
            <h3 class="text-2xl font-bold text-yellow-500 text-center mb-6">Editar Detalles de Usuario</h3>
            <form method="POST" action="{{ route('users.update', $users->id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="relative">
                    <label for="name" class="absolute -top-3 left-3 bg-gray-900 px-1 text-yellow-500">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $users->name) }}" class="w-full bg-gray-800 border border-gray-600 text-yellow-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 p-3 transition-all duration-300" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="email" class="absolute -top-3 left-3 bg-gray-900 px-1 text-yellow-500">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $users->email) }}" class="w-full bg-gray-800 border border-gray-600 text-yellow-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 p-3 transition-all duration-300" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="password" class="absolute -top-3 left-3 bg-gray-900 px-1 text-yellow-500">Contraseña</label>
                    <input type="password" name="password" id="password" class="w-full bg-gray-800 border border-gray-600 text-yellow-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 p-3 transition-all duration-300">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="password_confirmation" class="absolute -top-3 left-3 bg-gray-900 px-1 text-yellow-500">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-gray-800 border border-gray-600 text-yellow-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 p-3 transition-all duration-300">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-8">
                    <button type="submit" class="bg-yellow-500 text-gray-900 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-bold rounded-lg text-sm w-full sm:w-auto px-6 py-3 transition-all duration-300">
                        Guardar
                    </button>
                    <a href="{{ route('users.index') }}" class="bg-red-500 text-white hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-lg text-sm w-full sm:w-auto px-6 py-3 transition-all duration-300">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
