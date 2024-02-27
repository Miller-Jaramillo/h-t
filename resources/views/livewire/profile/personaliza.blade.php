<x-form-section submit="updateRedes">
    <x-slot name="title">
        {{ __('Personaliza') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agrega tus slogan y conecta con tus huespedes.') }}
    </x-slot>


    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="slogan" value="{{ __('Slogan principal') }}" />
            <x-input id="slogan" type="text" class="mt-1 block w-full" wire:model="state.slogan" autocomplete="current-password" />
            <x-input-error for="slogan" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="final_slogan" value="{{ __('Slogan Final') }}" />
            <x-input id="final_slogan" type="text" class="mt-1 block w-full" wire:model="state.final_slogan" autocomplete="new-final_slogan" />
            <x-input-error for="final_slogan" class="mt-2" />
        </div>



    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Guardado.') }}
        </x-action-message>

        <x-button>
            {{ __('Guardar') }}
        </x-button>
    </x-slot>
</x-form-section>
