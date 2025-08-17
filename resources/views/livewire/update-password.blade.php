<x-filament::card>
    <form wire:submit.prevent="submit" class="space-y-6">

        {{ $this->form }}

        <div class="flex justify-end mt-4">
            <x-filament::button type="submit" form="submit">
                {{ __('filament-breezy::default.profile.password.submit.label') }}
            </x-filament::button>
        </div>
    </form>
</x-filament::card>

