<x-filament::card>
    <form wire:submit.prevent="submit" >

        {{ $this->form }}

        <div class="flex justify-end mt-4">
            <x-filament::button type="submit" form="submit">
                {{ __('filament-breezy::default.profile.personal_info.submit.label') }}
            </x-filament::button>
        </div>
    </form>
</x-filament::card>

