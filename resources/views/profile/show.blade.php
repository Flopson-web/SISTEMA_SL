<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12" style="position: relative;">
        <!-- Fondo animado -->
        <div class="animated-gradient-background"></div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="bg-red-600 bg-opacity-50 text-white p-6 rounded-lg shadow-lg mb-8">
                        @livewire('profile.update-profile-information-form')
                    </div>

                    <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0 bg-red-600 bg-opacity-50 text-white p-6 rounded-lg shadow-lg mb-8">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-section-border />
                @endif

                <div class="mt-10 sm:mt-0 bg-red-600 bg-opacity-50 text-white p-6 rounded-lg shadow-lg mb-8">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />

                    <div class="mt-10 sm:mt-0 bg-red-600 bg-opacity-50 text-white p-6 rounded-lg shadow-lg">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        /* Fondo degradado animado */
        .animated-gradient-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            z-index: -1;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .bg-red-600 {
            position: relative;
            z-index: 1;
        }
    </style>
</x-app-layout>
