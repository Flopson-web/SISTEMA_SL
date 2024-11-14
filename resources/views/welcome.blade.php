<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                background-image: url('/images/fondo_bienvenido.jpg');
                background-size: cover;
                background-position: center;
                height: 100vh;
                font-family: Arial, sans-serif;
            }

            main {
                background-color: transparent !important;
                box-shadow: none !important;
                padding: 0 !important;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                flex-direction: column;
            }

            h1 {
                font-size: 4rem;
                text-align: center;
                color: black;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 20px;
                border-radius: 10px;
                margin: 0;
                display: flex;
                justify-content: center;
                gap: 0.2rem; /* Espaciado entre letras */
                overflow: hidden;
            }

            h1 span {
                display: inline-block;
                opacity: 0.3;
                animation: glow 5s linear infinite;
            }

            @keyframes glow {
                0%, 30% {
                    opacity: 0.3;
                    text-shadow: none;
                    color: black;
                }
                60%, 90% {
                    opacity: 1;
                    text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
                    color: #ffffff;
                }
                100% {
                    opacity: 0.3;
                    text-shadow: none;
                    color: black;
                }
            }

            /* Aplicar diferentes delays a cada letra */
            @foreach (range(1, 25) as $i)
                h1 span:nth-child({{ $i }}) {
                    animation-delay: {{ $i * 0.2 }}s;
                }
            @endforeach
        </style>
    </head>
    <body>
        <main>
            <h1>
                @foreach (str_split('SISTEMA KARDEX ESCOLAR') as $char)
                    @if ($char === ' ')
                        <span>&nbsp;</span>
                    @else
                        <span>{{ $char }}</span>
                    @endif
                @endforeach
            </h1>
            <h1>
                @foreach (str_split('SAN LORENZO') as $char)
                    @if ($char === ' ')
                        <span>&nbsp;</span>
                    @else
                        <span>{{ $char }}</span>
                    @endif
                @endforeach
            </h1>
        </main>
    </body>
    </html>
</x-app-layout>
