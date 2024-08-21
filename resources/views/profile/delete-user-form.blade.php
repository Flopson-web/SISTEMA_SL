<x-action-section>
    <x-slot name="title">
        <h2 class="text-xl font-bold text-white">
            {{ __('Delete Account') }}
        </h2>
    </x-slot>

    <x-slot name="description">
        <p class="text-sm text-gray-300">
            {{ __('Permanently delete your account.') }}
        </p>
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>

        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                <h2 class="text-xl font-bold text-white">
                    {{ __('Delete Account') }}
                </h2>
            </x-slot>

            <x-slot name="content">
                <p class="text-sm text-gray-400">
                    {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <div class="mt-4">
                    <x-input type="password" class="mt-1 block w-3/4 bg-gray-700 text-white border-2 border-gray-500 rounded-lg" autocomplete="current-password" placeholder="{{ __('Password') }}" wire:model="password" />
                    <x-input-error for="password" class="mt-2 text-red-500"/>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled" class="bg-gray-500 text-white">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3 bg-red-600 hover:bg-red-700 text-white" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
