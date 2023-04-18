<div>
    <style>
        .flatpickr-wrapper {
            display: block;
        }
    </style>
    <div class="row">

        <ul class="nav nav-underline mb-3" wire:ignore>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-bookings') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('admin-bookings') }}">Booking Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-book-bus') ? 'active' : '' }}"
                    href="{{ route('admin-book-bus') }}">Book a Bus</a>
            </li>


        </ul>


        <nav class="breadcrumb" style="pointer-events: none">
            <a href="#" x-bind:class="currentStep == 1 ? 'active' : ''" class="breadcrumb-item"
                aria-current="page">Booking
                Details</a>
            <a class="breadcrumb-item " x-bind:class="currentStep == 2 ? 'active' : ''" href="#">Payment
                Details</a>
            <a class="breadcrumb-item" x-bind:class="currentStep == 3 ? 'active' : ''" href="#">Completion</a>

        </nav>


        <form wire:submit.prevent="save" id="my-form" class="px-0">
            <div x-data="{
                currentStep: @entangle('currentStep'),
                totalSteps: @entangle('totalSteps'),
                showCustomer: @entangle('showCustomer'),
                paid: @entangle('paid'),
                reset() {
                    showCustomer = !showCustomer;
                    $wire.emit('resetCustomer');
            
                }
            
            }">
                <div x-show="currentStep === 1">

                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="card">
                                <div class="card-body py-5">
                                    <div class="col-md-12 ">

                                        <x-input-label class="form-label" for="inputName">Customer</x-input-label>
                                        <div wire:ignore>


                                            <select id="select2" wire:model="customer" style="width: 100%"
                                                x-bind:class="{ 'opacity-50': showCustomer }"
                                                :disabled="showCustomer == true">



                                                <option value="">choose customer</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}">
                                                        {{ $customer->first_name }}
                                                        {{ $customer->last_name }} [{{ $customer->customer_uuid }}]
                                                    </option>
                                                @endforeach




                                            </select>
                                        </div>


                                        <div>
                                            @error('customer')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                        <div x-show="showCustomer == false">

                                            <button type="button" class="btn btn-link  px-0 pb-0 text-uppercase"
                                                @click="reset()">

                                                + Add new customer

                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="row py-4" x-show="showCustomer">
                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">First Name
                                                    </x-input-label>

                                                    <x-text-input placeholder="first name"
                                                        wire:model.defer="first_name" />
                                                </div>
                                                <div>
                                                    @error('first_name')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Last Name
                                                    </x-input-label>

                                                    <x-text-input placeholder="last name"
                                                        wire:model.defer="last_name" />
                                                </div>
                                                <div>
                                                    @error('last_name')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Email
                                                    </x-input-label>

                                                    <x-text-input placeholder="email" type="email"
                                                        wire:model.defer="customer_email" />
                                                </div>
                                                <div>
                                                    @error('customer_email')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Phone Number
                                                    </x-input-label>

                                                    <x-phone placeholder="phone number"
                                                        wire:model.defer="phone_number" />
                                                </div>
                                                <div>
                                                    @error('phone_number')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>



                                        <div x-show="showCustomer == true">
                                            <div class="d-flex justify-content-end ">
                                                <button type="button"
                                                    class="btn btn-link text-danger px-0 py-0 text-uppercase me-2"
                                                    @click="showCustomer = !showCustomer">

                                                    Remove

                                                </button>
                                                <span class="px-2">/</span>
                                                <button type="button" class="btn btn-link px-0 py-0 text-uppercase"
                                                    wire:click="saveCustomer">

                                                    SAVE CUSTOMER

                                                </button>


                                            </div>
                                            <hr class="py-2">
                                        </div>


                                    </div>

                                    {{-- another line --}}
                                    <div class="col-md-12">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Route
                                                    </x-input-label>

                                                    <select class="form-select" wire:model="route">
                                                        <option value="">choose route</option>
                                                        @foreach ($routes as $route)
                                                            <option value="{{ $route->id }}">
                                                                {{ $route->from_destination }}
                                                                -
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
                                                    <x-input-label class="form-label" for="inputName">Price (MWK)
                                                    </x-input-label>
                                                    <x-input-g wire:model="price" disabled placeholder="price" />

                                                </div>

                                                <div>
                                                    @error('price')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">

                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Schedule
                                                    </x-input-label>

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

                                            <div class="col-md-6">
                                                <div>
                                                    <x-input-label class="form-label" for="inputName">Date of departure
                                                    </x-input-label>

                                                    <x-date wire:model="date"></x-date>
                                                </div>
                                                <div>
                                                    @error('date')
                                                        <x-alert>{{ $message }}</x-alert>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div x-show="currentStep === 2">
                    <!-- Step 2 form -->

                    <div class="row d-grid-3">
                        <div class="col-lg-8 col-sm-12">
                            <div class="card card-body">

                                <div class=" align-items-end my-4">
                                    <h4 class="mb-2 me-3">Customer Details</h4>
                                    <h5 class="text-700 fw-semi-bold">Customer details will appear here.</h5>
                                </div>


                                <table class="table table-borderless ">
                                    <tbody>
                                        <tr>
                                            <td class="py-2 ps-0 ">
                                                <x-input-label>Full Name</x-input-label>
                                            </td>

                                            <td class="py-2 px-3">
                                                @if ($collect)
                                                    <x-text-input disabled value="{{ $collect['full_name'] }}" />
                                                @endif

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <x-input-label>Email</x-input-label>
                                            </td>

                                            <td class="py-2 px-3">


                                                @if ($collect)
                                                    <x-text-input disabled value="{{ $collect['email'] }}" />
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 ps-0">
                                                <x-input-label>Phone Number</x-input-label>
                                            </td>

                                            <td class="py-2 px-3">
                                                @if ($collect)
                                                    <x-text-input disabled value="{{ $collect['phone'] }}" />
                                                @endif

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class=" align-items-end my-4">
                                    <h4 class="mb-2 me-3">Payment Method</h4>
                                    <h5 class="text-700 fw-semi-bold">Complete your purchase by providing your
                                        payment
                                        details.</h5>
                                </div>


                                <div class="d-flex mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model="payment_method"
                                            id="" value="paypal" checked>
                                        <label class="form-check-label" for="">Paypal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model="payment_method"
                                            id="" value="airtel" disabled>
                                        <label class="form-check-label" for="">Airtel Money</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model="payment_method"
                                            id="" value="tnm" disabled>
                                        <label class="form-check-label" for="">Tnm Mpamba</label>
                                    </div>

                                </div>


                                <div
                                    class="col-4 {{ session()->get('payment_status') == 'success' ? 'd-none' : '' }}">
                                    <div wire:ignore id="paypal-button-container">
                                    </div>
                                    <input type="number" class="d-none" wire:model="amount">
                                </div>



                                <div class="row g-3">
                                    @if (session()->has('payment_status'))
                                        @if (session()->get('payment_status') == 'success')
                                            <div class="alert alert-outline-success d-flex align-items-center"
                                                role="alert">
                                                <span class="fas fa-check-circle text-success fs-3 me-3"></span>
                                                <p class="mb-0 flex-1"> <b>Payment successful!</b> <br>Thank you
                                                    for
                                                    completing
                                                    your secure online payment. Please proceed to the next step to
                                                    finish the
                                                    booking process.</p>

                                            </div>
                                        @else
                                            <div class="alert alert-outline-danger d-flex align-items-center"
                                                role="alert">
                                                <span class="fas fa-times-circle text-danger fs-3 me-3"></span>
                                                <p class="mb-0 flex-1"> <b>Payment failed!</b> <br>Something went
                                                    wrong. Please
                                                    try again!</p>

                                            </div>
                                        @endif
                                    @endif


                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4  col-sm-12">
                            <div class="card text-start">

                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="mb-0">Summary</h3>
                                    </div>
                                    <table class="table table-borderless mt-4 fs--1 mb-0">

                                        <tbody>
                                            <tr class="border-top border-dashed border-bottom align-items-center">
                                                <td class="py-2 ps-0" colspan="2">

                                                    <h6 class="fw-semi-bold text-1000 lh-base">Bus ticket :
                                                        @if ($collect)
                                                            {{ $collect['route'] }}
                                                        @endif
                                                    </h6>
                                                    <h6 class="fw-semi-bold text-1000 lh-base">
                                                        @if ($collect)
                                                            Time : {{ $collect['schedule'] }}
                                                        @endif
                                                    </h6>
                                                    <h5 class="mb-2 fw-semi-bold lh-base text-800">
                                                        @
                                                        @if ($collect)
                                                            MWK {{ number_format($collect['price'], 2) }}
                                                        @endif
                                                    </h5>



                                                </td>



                                            </tr>

                                            <tr class="border-top border-dashed ">
                                                <td>
                                                    <h4 class="mb-0">Total :</h4>
                                                </td>
                                                <td class="text-end">


                                                    <h4 class="mb-0">
                                                        @if ($collect)
                                                            MWK
                                                            {{ number_format($collect['price'], 2) }}
                                                        @endif
                                                    </h4>


                                                </td>
                                            </tr>


                                        </tbody>

                                    </table>







                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Repeat for additional steps -->
                <div x-show="currentStep === totalSteps">
                    <!-- Final step form -->






                    s
                </div>

                <div class=" my-5 card card-body ">

                    <div class="form-group">

                        <div class="text-center ">

                            <button type="button" class="btn btn-secondary "
                                x-bind:disabled="(currentStep === 1) || (currentStep === 3) || paid === true"
                                wire:click="previousStep"><i class="fa-solid fa-angle-left" aria-hidden="true"></i>
                                BACK</button>
                            <button type="button" class="btn btn-secondary " :disabled="showCustomer == true"
                                x-bind:class="{ 'd-none': currentStep === 3 || currentStep === totalSteps }"
                                x-bind:disabled=" paid === ''" wire:click="nextStep">CONTINUE <i
                                    class="fa-solid fa-angle-right" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-secondary "
                                x-bind:class="{ 'd-none': currentStep != totalSteps || paid === true }"
                                wire:click.prevent="save">
                                {{ $button }}
                            </button>

                        </div>


                    </div>

                </div>
            </div>


        </form>



    </div>







</div>

@push('scripts')
    <script
        src="https://www.paypal.com/sdk/js?client-id=ASrAQJzOKewNu0ebmPWd3EAR2zLjwMTXjmNISzq6S1kHI020jqXS5dBqyWC7j9Lzt8vVY-qHuz0fAQXm&currency=USD">
    </script>
    <script>
        $(window).on('showButton', function() {





        });


        paypal.Buttons({

            style: {

                layout: 'horizontal',

                color: 'black',

                shape: 'pill',

                label: 'pay',

                size: '55'

            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: @this.amount
                        },

                    }]
                });


            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    Livewire.emit('payment', [details.id, 'success']);
                });
            },
            onError: function(err) {
                Livewire.emit('payment', [details.id, 'failure']);


            }
        }).render('#paypal-button-container');





        document.addEventListener('livewire:load', function() {
            $('#select2').select2({

            }).on('change', function() {
                @this.set('customer', $(this).val());
            });





        });


        $(window).on('refreshSelect', function(e) {


            $('#select2').empty();
            $.each(e.detail.array, function(index, option) {
                $('#select2').append($('<option>', {
                    value: option.id,
                    text: option.first_name + ' ' + option.last_name
                }));




            });
            $('#select2').val(e.detail.lastId).trigger('change');
        });
    </script>
@endpush
