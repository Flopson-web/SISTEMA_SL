<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold">Bienvenido a la Aplicación</h1>
        <p>Por favor, <a href="{{ route('login') }}" class="text-blue-500">inicia sesión</a> para continuar.</p>
    </div>
</body>
</html>
</x-app-layout>
