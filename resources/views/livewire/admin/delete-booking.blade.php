<div>
    <x-bootstrap-confirmation-modal wire:model="showingModalDeleteBooking">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            {{ $message }}
        </x-slot>

        <x-slot name="footer">

            <x-button-deny class="fs--1" wire:loading.attr="disabled" wire:click="hideModal">
                No
                </x-black-button>

                <x-black-button class="fs--1" wire:loading.attr="disabled" wire:click="confirm_request">
                    Yes
                </x-black-button>

        </x-slot>

    </x-bootstrap-confirmation-modal>

</div>
