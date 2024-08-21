<x-form-section submit="updatePassword">
    <x-slot name="title">
        <h2 class="text-xl font-bold text-white">
            {{ __('Update Password') }}
        </h2>
    </x-slot>

    <x-slot name="description">
        <p class="text-sm text-gray-300">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" class="text-gray-300"/>
            <x-input id="current_password" type="password" class="mt-1 block w-full bg-gray-700 text-white border-2 border-gray-500 rounded-lg" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2 text-red-500"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" class="text-gray-300"/>
            <x-input id="password" type="password" class="mt-1 block w-full bg-gray-700 text-white border-2 border-gray-500 rounded-lg" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2 text-red-500"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-gray-300"/>
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full bg-gray-700 text-white border-2 border-gray-500 rounded-lg" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2 text-red-500"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3 text-green-500" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button class="bg-blue-600 hover:bg-blue-700 text-white">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
