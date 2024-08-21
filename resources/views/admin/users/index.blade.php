<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-image: url('/images/imagen2.jpg'); background-size: cover;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-red-600 bg-opacity-90 dark:bg-red-700 dark:bg-opacity-85 border-b border-red-600 dark:border-red-500">

                    <!-- Barra de búsqueda -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Buscar usuarios..." class="w-full p-2 rounded border border-gray-300 bg-gray-700 text-white">
                    </div>

                    <!-- Botón de Crear Usuario -->
                    <div class="mb-4 flex justify-center">
                        <a href="{{ route('users.create') }}" class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded shadow-lg transform hover:scale-105 transition-transform duration-300">Create User</a>
                    </div>

                    <!-- Cuadrícula de Usuarios -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($users as $user)
                        <div class="relative group bg-gray-800 bg-opacity-75 p-6 rounded-lg shadow-lg">
                            <div class="text-center">
                                <h3 class="text-lg font-semibold mb-2 text-white">{{ $user->name }}</h3>
                                <p class="text-sm text-gray-300">ID: {{ $user->id }}</p>
                                <p class="text-sm text-gray-300 mb-4">Email: {{ $user->email }}</p>
                            </div>

                            <!-- Opciones -->
                            <div class="flex justify-center mt-4 space-x-4">
                                <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transform hover:scale-110 transition-transform duration-300">Edit</a>
                                <button type="button" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded transform hover:scale-110 transition-transform duration-300" onclick="confirmDelete('{{ $user->id }}')">Delete</button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="mt-6 flex justify-center">
                        {{ $users->links('pagination::bootstrap-4') }}
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
            form.action = '/users/' + id;
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
    let users = document.querySelectorAll('.grid > div');

    users.forEach(function(user) {
        let text = user.textContent.toLowerCase();
        user.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>

<style>
    .group:hover {
        box-shadow: 0 0 15px 5px rgba(255, 255, 0, 0.8);
        border-color: #FFFF00;
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
