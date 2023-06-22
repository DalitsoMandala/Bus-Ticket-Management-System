<div class="container">
    <style>
        .flatpickr-wrapper {
            display: block;
        }

        .bg-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center center;
        }

        .bg-image-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .flatpickr-calendar {
            background: #f5f5f5;
        }

        .card.purple {
            border: 0.1px solid #222834;
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        label.radio div {
            padding: 7px 14px;
            border: 1px solid #7e8797;
            display: inline-block;
            color: #222834;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: .8rem;
            width: 100%;
            margin-bottom: 10px;
            cursor: pointer;
        }

        label.radio div:hover {
            border-color: #222834;
        }

        label.radio input:checked+div {
            border-color: #222834;
            background-color: #222834;
            color: #fff
        }

        label.radio input:disabled+div {
            opacity: .5;
        }
    </style>
    @section('title', config('app.name') . ' | Book a bus')

    <div class="row">
        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2">Book a bus</h2>
            <h5 class="text-700 fw-semi-bold">Use the available information to get your ticket</h5>
        </div>

        <script>
            var alertList = document.querySelectorAll('.alert');
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert)
            })
        </script>

        <div x-data="{
            currentStep: @entangle('currentStep'),
        
        
        }">
            <nav class="breadcrumb" style="pointer-events: none">
                <a class="breadcrumb-item" href="#" aria-current="page"
                    x-bind:class="currentStep == 1 ? 'active' : ''">
                    <span class="badge badge-phoenix  badge-phoenix-secondary rounded">1</span> Booking
                    Details</a>
                <a class="breadcrumb-item " href="#" x-bind:class="currentStep == 2 ? 'active' : ''"> <span
                        class="badge badge-phoenix  badge-phoenix-secondary rounded">2</span> Payment
                    Details</a>
                <a class="breadcrumb-item" href="#" x-bind:class="currentStep == 3 ? 'active' : ''"> <span
                        class="badge badge-phoenix  badge-phoenix-secondary rounded">3</span> Completion</a>

            </nav>
        </div>
    </div>

    <div class="row card card-body mb-5 p-5 ">
        @if (session()->has('mailable'))
            <div class="alert alert-soft-success alert-dismissible fade show" role="alert">
                <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                <strong>You have successfully booked a bus. You can view your bookings in "My Bookings" Page</strong>
                Thank you!
            </div>
        @endif
        <form class="px-0" id="my-form" wire:submit.prevent="save">
            <div x-data="{
                currentStep: @entangle('currentStep'),
                totalSteps: @entangle('totalSteps'),
                showCustomer: @entangle('showCustomer'),
                paid: @entangle('paid'),
                available: @entangle('canShow'),
                payment_data: @entangle('payment_data'),
                loading: @entangle('loading'),
                reset() {
                    showCustomer = !showCustomer;
                    $wire.emit('resetCustomer');
            
                },
                chosenPaymentMethod: @entangle('payment_method')
            
            }">
                <div x-show="currentStep === 1">

                    <div class="row  mt-4 px-3 ">
                        <div class="col-lg-6 h-100 card-body col-sm-12 mb-3 order-0 ">

                            <h2 class="fs-2 fw-black mb-2 mt-4">Booking Details</h2>
                            <div class="col-md-12 d-none">

                                <x-input-label class="form-label" for="inputName">Customer</x-input-label>
                                <div wire:ignore>

                                    <select id="select2" style="width: 100%" wire:model="customer"
                                        x-bind:class="{ 'opacity-50': showCustomer }" :disabled="showCustomer == true">

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

                                    <button class="btn btn-link  px-0 pb-0 text-uppercase" type="button"
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
                                            <x-input-label class="form-label" for="inputName">Last Name
                                            </x-input-label>

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
                                            <x-input-label class="form-label" for="inputName">Email
                                            </x-input-label>

                                            <x-text-input type="email" placeholder="email"
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

                                            <x-phone placeholder="phone number" wire:model.defer="phone_number" />
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
                                        <button class="btn btn-link text-danger px-0 py-0 text-uppercase me-2"
                                            type="button" @click="showCustomer = !showCustomer">

                                            Remove

                                        </button>
                                        <span class="px-2">/</span>
                                        <button class="btn btn-link px-0 py-0 text-uppercase" type="button"
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
                                    <div class="col-md-12">
                                        <div>
                                            <x-input-label class="form-label" for="inputName">Route
                                            </x-input-label>
                                            <div wire:ignore>
                                                <select class="form-select" id="customer-route" wire:model="route">
                                                    <option value="">choose route</option>
                                                    @foreach ($routes as $route)
                                                        <option value="{{ $route->id }}">
                                                            {{ $route->from_destination }}
                                                            -
                                                            {{ $route->to_destination }} </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            @error('route')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
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

                                    <div class="col-md-12">
                                        <div>
                                            <x-input-label class="form-label" for="inputName">Schedule
                                            </x-input-label>
                                            <div wire:ignore>
                                                <select class="form-select" id="customer-schedule"
                                                    wire:model="schedule">
                                                    <option value="">choose route</option>
                                                    @foreach ($schedules as $schedule)
                                                        <option value="{{ $schedule->id }}">
                                                            {{ $schedule->title }}
                                                            ({{ \Carbon\Carbon::parse($schedule->depart_time)->format('H:i A') }})
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            @error('schedule')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div>
                                            <x-input-label class="form-label" for="inputName">Date of
                                                departure
                                            </x-input-label>

                                            <x-date wire:model="date"></x-date>
                                        </div>
                                        <div>
                                            @error('date')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>
                                    @if ($availability === true && !$errors->has('availability'))
                                        <div class="col-md-12">
                                            <div>
                                                <x-input-label class="form-label" for="inputName">Bus Availability
                                                </x-input-label>

                                                <x-text-input class="d-none" disabled wire:model="availability" />
                                            </div>

                                            <div>

                                                <span class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                        class="badge-label">AVAILABLE</span><span class="ms-1"
                                                        data-feather="check"
                                                        style="height:12.8px;width:12.8px;"></span></span>

                                            </div>

                                            <div>
                                                @error('availability')
                                                    <x-alert>{{ $message }}</x-alert>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif

                                    @if ($errors->has('availability'))
                                        <div class="col-md-12">
                                            <div>
                                                <x-input-label class="form-label" for="inputName">Bus Availability
                                                </x-input-label>

                                                <x-text-input class="d-none" disabled wire:model="availability" />
                                            </div>

                                            <div>
                                                @error('availability')
                                                    <x-alert>{{ $message }}</x-alert>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6  rounded-1   col-sm-12 d-lg-block d-sm-none mb-3 bg-100 bg-image-overlay  position-relative overflow-hidden auth-title-box"
                            style="background-image: url('{{ asset('assets/img/happy.jpg') }}'); height:100%;">

                            <!--/.bg-holder-->
                            <div
                                class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7">
                                <h3 class="mb-3 text-white fs-1 text-capitalize">Book your bus with Us</h3>
                                <p class="text-100"><i class="fa-solid fa-quote-left"></i> From
                                    booking your trip to
                                    arriving at your destination, we're here
                                    to provide you with the best possible customer service <i
                                        class="fa-solid fa-quote-right"></i></p>
                                <ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto" style="color:#dddd">
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-hand-point-right me-3"></i> <span
                                            class="text-100 fw-semi-bold">We are Fast</span>
                                    </li>
                                    <li class="d-flex align-items-center"> <i
                                            class="fa-solid fa-hand-point-right me-3"></i> <span
                                            class="text-100 fw-semi-bold">We are Reliable</span></li>
                                    </li>
                                    <li class="d-flex align-items-center"> <i
                                            class="fa-solid fa-hand-point-right me-3"></i> <span
                                            class="text-100 fw-semi-bold">We are Responsive</span></li>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="position-relative  mb-6 d-none d-md-block text-center mt-md-15 border-top border-dashed text-uppercase">

                                <h3 class="text-white mt-3">Get your ticket <i class="fa-solid fa-ticket"></i></h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div x-show="currentStep === 2">
                    <!-- Step 2 form -->

                    <div class="row d-grid-3 my-2">
                        <div class="col-lg-6 col-sm-12">

                            <div class=" align-items-end mb-4">
                                <h4 class="mb-2 me-3">Payment Method</h4>
                                <h5 class="text-700 fw-semi-bold">Complete your purchase by providing your
                                    payment
                                    details.</h5>
                            </div>

                            <label class="radio col-12"> <input name="payment_method" type="radio" value="paypal"
                                    wire:model="payment_method" checked>
                                <div class="p-3"> <span><i class="fa-brands fa-paypal me-2"></i></span>
                                    <span>Paypal</span>
                                </div>
                            </label>

                            <div class="d-none d-sm-block d-md-none" x-show="chosenPaymentMethod === 'paypal'">

                                <div class=" {{ session()->get('payment_status') == 'success' ? 'd-none' : '' }}">
                                    <div id="paypal-button-container" wire:ignore>
                                    </div>
                                    <input class="d-none" type="number" wire:model="amount">
                                </div>

                            </div>

                            <label class="radio col-12"> <input name="payment_method" type="radio" value="airtel"
                                    wire:model="payment_method" disabled>
                                <div class="p-3"> <span><i class="fa-solid fa-sim-card me-2"></i></span>
                                    <span>Airtel Money</span>
                                </div>
                            </label>
                            <label class="radio col-12"> <input name="payment_method" type="radio" value="tnm"
                                    wire:model="payment_method" disabled>
                                <div class="p-3"> <span><i class="fa-solid fa-sim-card me-2"></i></span> <span>Tnm
                                        Mpamba</span>
                                </div>
                            </label>

                            {{-- <div class="d-flex mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="" type="radio" value="paypal"
                                        wire:model="payment_method" checked>
                                    <label class="form-check-label" for="">Paypal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="" type="radio" value="airtel"
                                        wire:model="payment_method" disabled>
                                    <label class="form-check-label" for="">Airtel Money</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="" type="radio" value="tnm"
                                        wire:model="payment_method" disabled>
                                    <label class="form-check-label" for="">Tnm Mpamba</label>
                                </div>

                            </div> --}}

                            <div class="row g-3">

                                <div class="mb-3 d-none ">
                                    <label class="form-label" for="">Payment</label>
                                    <input class="form-control" id="" name="" type="text"
                                        aria-describedby="helpId" wire:model="paid" placeholder="">

                                </div>
                                <div id="payment_check">
                                    @error('paid')
                                        <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
                                            <span class="fas fa-times-circle text-danger fs-3 me-3"></span>
                                            <p class="mb-0 flex-1"> <b>Payment required!</b> <br>You can't proceed without
                                                payment!</p>

                                        </div>
                                    @enderror
                                </div>

                                @if (session()->has('payment_status'))
                                    @if (session()->get('payment_status') == 'success')
                                        <div class="alert alert-outline-success d-flex align-items-center "
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
                        <div class="col-lg-6  col-sm-12">
                            <div class="card text-start  rounded-0 my-3 border-0 border-sm-0 border-lg">

                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="mb-3">Customer Details</h4>
                                    </div>
                                    @if ($collect)
                                        <div class="mb-1">
                                            <x-input-label class="form-label" for="">Full Name</x-input-label>
                                            <x-text-input class="d-none" value="{{ $collect['full_name'] }}"
                                                disabled />
                                            <br>

                                            <strong class="fw-semi-bold lh-base text-800">
                                                {{ $collect['full_name'] }}</strong>
                                        </div>

                                        <div class="mb-1">
                                            <x-input-label class="form-label" for="">Email</x-input-label>
                                            <x-text-input class="d-none" value="{{ $collect['email'] }}" disabled />
                                            <br>

                                            <strong class="fw-semi-bold lh-base text-800">
                                                {{ $collect['email'] }}</strong>
                                        </div>

                                        <div class="mb-3">
                                            <x-input-label class="form-label" for="">Phone Number
                                            </x-input-label>
                                            <x-text-input class="d-none" value="{{ $collect['phone'] }}" disabled />
                                            <br>

                                            <strong class="fw-semi-bold lh-base text-800">
                                                {{ $collect['phone'] }}</strong>
                                        </div>
                                    @endif

                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="mb-3">Booking Summary</h4>
                                    </div>

                                    <table class="table table-borderless  fs--1 mb-0">

                                        <tbody>
                                            <tr class=" align-items-center  ">

                                                <td class=" px-2 py-1 text-center"><img
                                                        src="{{ asset('assets/img/ticket.png') }}" width="70px">
                                                </td>
                                                <td class="py-2 ps-2 " colspan="2">
                                                    @if ($collect && $collect['payment_method'] == 'paypal')
                                                        <h6>Bus Ticket</h6>
                                                        <p>Starting Point : <b>{{ $collect['route_to'] }}</b>
                                                            <br>
                                                            Destination : <b>{{ $collect['route_from'] }}</b>
                                                            <br>

                                                            Date:
                                                            {{ \Carbon\Carbon::parse($collect['date'])->format('d/m/Y') }}
                                                            <br>
                                                            Depart
                                                            Time:
                                                            {{ $collect['schedule'] }}({{ \Carbon\Carbon::parse($schedule->depart_time)->format('H:i A') }})
                                                            <br>

                                                        </p>
                                                    @endif

                                                </td>
                                                @if (!session()->get('payment_status') == 'success')
                                                    <td class=" py-5 px-2 text-center">
                                                        <a class="btn btn-link btn-sm " href="#" title="Remove"
                                                            role="button" wire:click="clear">
                                                            <i class="fa-solid fa-trash-can text-secondary fs-0"></i>
                                                        </a>

                                                    </td>
                                                @endif
                                            </tr>

                                            <tr class="border-top border-dashed ">
                                                <td>
                                                    <h5 class="mb-0 fw-normal">Subtotal :</h5>
                                                </td>
                                                <td class="text-end" colspan="3">

                                                    <h5 class="mb-0 fw-normal">
                                                        @if ($collect && $collect['payment_method'] == 'paypal')
                                                            $ {{ number_format($subtotal, 2) }}
                                                        @endif
                                                    </h5>

                                                </td>
                                            </tr>

                                            <tr class="border-top border-dashed ">
                                                <td>
                                                    <h5 class="mb-0 fw-normal">Discount :</h5>
                                                </td>
                                                <td class="text-end" colspan="3">

                                                    <h5 class="mb-0 fw-normal">
                                                        @if ($collect && $collect['payment_method'] == 'paypal')
                                                            $ {{ number_format($discount, 2) }}
                                                        @endif
                                                    </h5>

                                                </td>
                                            </tr>
                                            <tr class="border-top border-dashed ">
                                                <td>
                                                    <h5 class="mb-0 fw-normal">Tax :</h5>
                                                </td>
                                                <td class="text-end" colspan="3">

                                                    <h5 class="mb-0 fw-normal">
                                                        @if ($collect && $collect['payment_method'] == 'paypal')
                                                            $ {{ number_format($tax, 2) }}
                                                        @endif
                                                    </h5>

                                                </td>
                                            </tr>

                                            <tr class="border-top border-dashed ">
                                                <td>
                                                    <h4 class="mb-0 ">Total :</h4>
                                                </td>
                                                <td class="text-end" colspan="3">

                                                    <h4 class="mb-0 ">
                                                        @if ($collect && $collect['payment_method'] == 'paypal')
                                                            $ {{ number_format($total, 2) }}
                                                        @endif
                                                    </h4>

                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                    <div class="d-sm-none d-md-block">

                                        <div
                                            class=" {{ session()->get('payment_status') == 'success' ? 'd-none' : '' }}">
                                            <div id="paypal-button-container-lg" wire:ignore>
                                            </div>
                                            <input class="d-none" type="number" wire:model="amount">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Repeat for additional steps -->
                <div x-show="currentStep === totalSteps">
                    <!-- Final step form -->

                    @if (session()->has('booking') && session()->has('payment_status') && session()->get('payment_status') === 'success')
                        @if ($collect && $collect['payment_method'] == 'paypal')

                            <div class="container py-2 mb-7 bg-200">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-xl-7">
                                        <div class="card" id="invoice">
                                            <div class="card-body p-5">
                                                <h2>
                                                    Hey {!! Auth::user()->customers->first()->first_name . ' ' . Auth::user()->customers->first()->last_name !!},
                                                </h2>
                                                <p class="fs-sm">
                                                    This is the receipt for a payment of
                                                    <strong>
                                                        @if ($collect['payment_currency'] == 'USD')
                                                            {!! '$' !!}{{ $collect['amount'] }}
                                                        @else
                                                            {!! 'MWK' !!}{{ $collect['amount'] }}
                                                        @endif

                                                    </strong> you made
                                                    to {{ config('app.name') }}.
                                                </p>

                                                <div class="border-top border-gray-200 pt-4 mt-4">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="text-muted mb-2">Payment No. / Ticket No.</div>
                                                            <strong>{{ $collect['transaction_id'] }}</strong>

                                                        </div>

                                                        <div class="col-md-4 text-md-center ">
                                                            <div class="text-muted mb-2">Seat No.</div>
                                                            <strong>{{ $collect['seat_no'] }}</strong>

                                                        </div>
                                                        <div class="col-md-4 text-md-end">
                                                            <div class="text-muted mb-2">Payment Date</div>
                                                            <strong>{{ $collect['payment_date'] }}</strong>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top border-gray-200 mt-4 py-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text-muted mb-2">Client</div>
                                                            <strong>
                                                                {!! Auth::user()->customers->first()->first_name . ' ' . Auth::user()->customers->first()->last_name !!}
                                                            </strong>
                                                            <p class="fs-sm">
                                                                {!! Auth::user()->customers->first()->phone_number !!}
                                                                <br>
                                                                <a class="text-purple"
                                                                    href="#!">{!! Auth::user()->email !!}
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6 text-md-end">
                                                            <div class="text-muted mb-2">Payment To</div>
                                                            <strong>
                                                                {{ config('app.name') }}
                                                            </strong>
                                                            <p class="fs-sm">

                                                                <a class="text-purple"
                                                                    href="#!">{{ config('mail.from.address') }}
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <table class="table border-bottom border-gray-200 mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th class="fs-sm text-dark text-uppercase-bold-sm px-0"
                                                                scope="col">
                                                                Description
                                                            </th>
                                                            <th class="fs-sm text-dark text-uppercase-bold-sm text-end px-0"
                                                                scope="col">
                                                                Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="px-0">Bus Ticket, <br>
                                                                @if ($collect)
                                                                    {{ $collect['route_to'] }},<br>
                                                                    {{ $collect['schedule'] }}({{ \Carbon\Carbon::parse($schedule->depart_time)->format('H:i A') }})
                                                                @endif
                                                            </td>
                                                            <td class="text-end px-0">
                                                                @if ($collect['payment_currency'] == 'USD')
                                                                    {!! '$' !!}
                                                                @else
                                                                    {!! 'MWK' !!}
                                                                @endif
                                                                {{ $collect['amount'] }}
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <div class="mt-5">
                                                    <div class="d-flex justify-content-end">
                                                        <p class="text-muted me-3">Subtotal:</p>
                                                        <span>
                                                            @if ($collect['payment_currency'] == 'USD')
                                                                {!! '$' !!}
                                                            @else
                                                                {!! 'MWK' !!}
                                                            @endif{{ $collect['amount'] }}
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-end mt-3">
                                                        <h5 class="me-3">Total:</h5>
                                                        <h5 class="text-success">
                                                            @if ($collect['payment_currency'] == 'USD')
                                                                {!! '$' !!}
                                                            @else
                                                                {!! 'MWK' !!}
                                                            @endif{{ $collect['amount'] }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-center my-2">
                                            <button class="btn btn-secondary btn-lg  px-4" wire:click="print">
                                                <span class="fa-solid fa-print">

                                                </span>
                                                Print Invoice
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif

                    @endif
                </div>

                <div class=" mt-10  ">

                    <div class="form-group">

                        <div class="d-flex justify-content-between ">

                            <button class="btn btn-secondary " type="button"
                                x-bind:disabled="(currentStep === 1) || (currentStep === 3) || (paid === true)"
                                wire:click="previousStep"><i class="fa-solid fa-angle-left" aria-hidden="true"></i>
                                BACK</button>
                            <button class="btn btn-secondary " type="button" :disabled="showCustomer == true"
                                x-bind:class="{ 'd-none': currentStep === totalSteps }" x-bind:disabled="(paid === '')"
                                wire:click="nextStep">CONTINUE
                                <i class="fa-solid fa-angle-right" aria-hidden="true"></i></button>
                            <button class="btn btn-secondary " type="button"
                                x-bind:class="{ 'd-none': currentStep != totalSteps }"
                                x-bind:disabled="loading === 'PLEASE WAIT...'" wire:click.prevent="save">
                                <i class="fa-solid fa-check"
                                    x-bind:class="{
                                        'd-none': loading === 'PLEASE WAIT...'
                                    }"></i>
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



        document.addEventListener('livewire:load', function() {

            paypal.Buttons({

                style: {

                    layout: 'horizontal',

                    color: 'silver',

                    shape: 'rect',

                    label: 'pay',

                    size: '55',
                    tagline: 'false'

                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: @this.total
                            },

                        }]
                    });


                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        Livewire.emit('payment', [details.id, 'success', details.purchase_units[
                            0]]);
                    });
                },
                onError: function(err) {
                    Livewire.emit('payment', [details.id, 'failure', details.purchase_units[0]]);


                }
            }).render('#paypal-button-container');


            paypal.Buttons({

                style: {

                    layout: 'horizontal',

                    color: 'silver',

                    shape: 'rect',

                    label: 'pay',

                    size: '55',
                    tagline: 'false'

                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: @this.total
                            },

                        }]
                    });


                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        Livewire.emit('payment', [details.id, 'success', details.purchase_units[
                            0]]);
                    });
                },
                onError: function(err) {
                    Livewire.emit('payment', [details.id, 'failure', details.purchase_units[0]]);


                }
            }).render('#paypal-button-container-lg');
        })




        document.addEventListener('livewire:load', function() {
            $('#select2').select2({

            }).on('change', function() {
                @this.set('customer', $(this).val());
            });

            $('#customer-route').select2({

            }).on('change', function() {
                @this.set('route', $(this).val());
            });

            $('#customer-schedule').select2({

            }).on('change', function() {
                @this.set('schedule', $(this).val());
            });





            // Default export is a4 paper, portrait, using millimeters for units
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();
            doc.text("Hello world!", 100, 100);
            doc.save("newFile.pdf");
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

        $(window).on('print', function(e) {

            $('#invoice').printThis({
                debug: false,
            });

        });
    </script>
@endpush
