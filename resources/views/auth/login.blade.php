<x-guest-layout>
    <div style="background-image: url('/images/SAN_LORENZO_FRENTE_AL_COLEGIO.jpg'); background-size: cover; background-position: center; min-height: 100vh;" class="d-flex justify-content-center align-items-center">
        <div class="card shadow-lg" style="max-width: 400px; border-radius: 10px; backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.85); position: relative;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-center mb-4">
                    <img class="h-16 w-auto" src="/images/SL.png" alt="SL">
                </div>

                <x-validation-errors class="mb-3" />

                @session('status')
                    <div class="mb-3 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mb-3">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">
                            {{ __('Remember me') }}
                        </label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center">
                        <x-button class="btn btn-primary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
            <!-- Borde luminoso con colores intercalados -->
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; border-radius: 10px; pointer-events: none; box-shadow: 0 0 5px red; animation: glow 3s infinite;">
            </div>
        </div>
    </div>

    <!-- Animación CSS -->
    <style>
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px red, 0 0 10px red, 0 0 15px red, 0 0 20px red;
            }
            25% {
                box-shadow: 0 0 5px white, 0 0 10px white, 0 0 15px white, 0 0 20px white;
            }
            50% {
                box-shadow: 0 0 5px red, 0 0 10px red, 0 0 15px red, 0 0 20px red;
            }
            75% {
                box-shadow: 0 0 5px white, 0 0 10px white, 0 0 15px white, 0 0 20px white;
            }
            100% {
                box-shadow: 0 0 5px red, 0 0 10px red, 0 0 15px red, 0 0 20px red;
            }
        }
    </style>
</x-guest-layout>
