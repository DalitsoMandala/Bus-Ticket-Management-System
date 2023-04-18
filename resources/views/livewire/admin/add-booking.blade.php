<div>
    <x-black-button class="add-session" wire:click="showModal" wire:loading.attr="disabled">
        ADD BOOKING
    </x-black-button>
    <x-dialog-modal wire:model.defer="showingModalAddBooking">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Customer</x-input-label>

                            <select class="form-select" wire:model.defer="customer">
                                <option value="">choose customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->first_name }}
                                        {{ $customer->last_name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            @error('customer')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Route</x-input-label>

                            <select class="form-select" wire:model="route">
                                <option value="">choose route</option>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->from_destination }} -
                                        {{ $route->to_destination }} </option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            @error('route')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Price (MWK)</x-input-label>
                            <x-text-input wire:model="price" disabled placeholder="price" />

                        </div>

                        <div>
                            @error('price')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Schedule</x-input-label>

                            <select class="form-select" wire:model="schedule">
                                <option value="">choose route</option>
                                @foreach ($schedules as $schedule)
                                    <option value="{{ $schedule->id }}">{{ $schedule->title }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            @error('schedule')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div id="paypal-area">


                        <div id="paypal-button-container"></div>
                    </div>

                    <div class="col-12 gy-6">
                        <div class="row g-3 justify-content-center">

                            <div class="col-auto">


                                <x-primary-button>proceed to
                                    payment
                                </x-primary-button>
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
@endpush
