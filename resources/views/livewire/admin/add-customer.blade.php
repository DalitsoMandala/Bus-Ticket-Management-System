<div>
    <x-button class="add-session" wire:click="showModal" wire:loading.attr="disabled">
        ADD CUSTOMER
    </x-button>
    <x-dialog-modal wire:model.defer="showingModalAddCustomer">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">First Name</x-input-label>

                            <x-text-input placeholder="first name" wire:model.defer="first_name" />
                        </div>
                        <div>
                            @error('first_name')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Last Name</x-input-label>

                            <x-text-input placeholder="last name" wire:model.defer="last_name" />
                        </div>
                        <div>
                            @error('last_name')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Email</x-input-label>

                            <x-text-input placeholder="email" type="email" wire:model.defer="email" />
                        </div>
                        <div>
                            @error('email')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Phone Number</x-input-label>

                            <x-phone placeholder="phone number" wire:model.defer="phone_number" />
                        </div>
                        <div>
                            @error('phone_number')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 gy-6">
                        <div class="row g-3 justify-content-end">

                            <div class="col-auto">
                                <x-primary-button>{{ $button }}</x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>

        </x-slot>

        <x-slot name="footer">

        </x-slot>

    </x-dialog-modal>

</div>

@push('scripts')
    <script></script>
@endpush
