<div>
    <x-confirmation-modal wire:model="showingModalDeleteBus">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            {{ $message }}
        </x-slot>

        <x-slot name="footer">

            <x-button-deny class="fs--1" wire:loading.attr="disabled" wire:click="hideModal">
                No
                </x-button>



                <x-button class="fs--1" wire:loading.attr="disabled" wire:click="confirm_request">
                    Yes
                </x-button>


        </x-slot>

    </x-confirmation-modal>


</div>
