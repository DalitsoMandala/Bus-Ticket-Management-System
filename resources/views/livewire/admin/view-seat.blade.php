<div>

    <x-bootstrap-dialog-modal wire:model.defer="showingModalViewSeat">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">

                <div class="row g-3">
                    <div class="col-9">
                        <div>
                            <x-input-label class="form-label" for="inputName">Owned by</x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0 border-bottom border-dashed rounded-0"
                                id="exampleTextarea" readonly wire:model="owned_by" />

                        </div>

                        <div>
                            @error('owned_by')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <x-input-label class="form-label" for="inputName">Seat Number</x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="seat_no" readonly placeholder="seat number" />

                        </div>

                        <div>
                            @error('seat_no')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Email</x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="email" readonly placeholder="email" />

                        </div>

                        <div>
                            @error('email')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Phone Number</x-input-label>
                            <x-phone class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="phone_number" readonly placeholder="phone number" />

                        </div>

                        <div>
                            @error('phone_number')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Ticket No.</x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="ticket_no" readonly placeholder="ticket no." />

                        </div>

                        <div>
                            @error('ticket_no')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Route</x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="route" readonly placeholder="route" />

                        </div>

                        <div>
                            @error('ticket_no')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Date of
                                departure
                            </x-input-label>

                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="date" readonly />
                        </div>
                        <div>
                            @error('date')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Time of departure
                            </x-input-label>
                            <x-text-input
                                class="form-control-plaintext outline-none border-bottom border-dashed rounded-0"
                                wire:model="time" readonly />
                        </div>
                        <div>
                            @error('time')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>

        </x-slot>

        <x-slot name="footer">

        </x-slot>

    </x-bootstrap-dialog-modal>

</div>

@push('scripts')
    <script></script>
@endpush
