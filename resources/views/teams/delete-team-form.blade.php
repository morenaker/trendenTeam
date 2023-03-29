<x-jet-action-section>
    <x-slot name="title">
        {{ __('Odstranit Team') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Trvale smazat tento tým.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Jakmile je tým smazán, všechny jeho zdroje a data budou trvale smazány. Před smazáním tohoto týmu si prosím stáhněte všechna data nebo informace týkající se tohoto týmu, které si přejete zachovat.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Odstranit Team') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Odstranit Team') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Opravdu chcete tento tým smazat? Jakmile je tým smazán, všechny jeho zdroje a data budou trvale smazány.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Zrušit') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Odstranit Team') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
