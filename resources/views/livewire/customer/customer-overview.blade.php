<div>

    @section('title', config('app.name') . ' | Dashboard')

    <div class="mb-3">
        <h2 class="mb-2 fs-2 fw-black">Hello {{ Auth::user()->name }},</h2>
        <h5 class="text-700 fw-semi-bold">Welcome to your dashboard.</h5>
    </div>
    <style>
        .table>tbody>tr>td:first-child {
            padding-left: 5px;
        }

        .border-white {
            border-bottom: 1px solid #fff;
        }
    </style>
    <div class="row g-3 ">
        <div class="col-lg-4 col-sm-12">
            <div class="border-0 shadow card">

                <div class="card-body">


                    <div class="flex-wrap d-flex justify-content-between align-items-center ">
                        <div class="words text-start ">
                            <h3 class="fs--1 fw-bold ">Total Departures</h3>
                            <h3>{{ $totalDepartures }}</h3>
                        </div>
                        <div class="icon me-2">
                            <div class="border-0 card card-body" style="background-color:rgba(111, 10, 125, 0.34);">
                                <i class="fa-solid fa-gauge text-light"></i>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="border-0 shadow card">

                <div class="card-body">


                    <div class="flex-wrap d-flex justify-content-between align-items-center ">
                        <div class="words text-start ">
                            <h3 class="fs--1 fw-bold ">Upcoming Booking</h3>
                            <h3>{{ $upcomingBookings }}</h3>
                        </div>
                        <div class="icon me-2">
                            <div class="border-0 card card-body" style="background-color:rgba(2, 233, 198, 0.34);">
                                <i class="fa-solid fa-swatchbook"></i>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="border-0 shadow card">

                <div class="card-body">


                    <div class="flex-wrap d-flex justify-content-between align-items-center ">
                        <div class="words text-start ">
                            <h3 class="fs--1 fw-bold ">Available Buses</h3>
                            <h3>{{ $availableBuses }}</h3>
                        </div>
                        <div class="icon me-2">
                            <div class="border-0 card card-body" style="background-color:rgba(233, 225, 2, 0.34);">
                                <i class="fa-solid fa-van-shuttle"></i>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="col-lg-4 col-sm-12">
            <div class="border-0 shadow card">

                <div class="card-body">


                    <div class="flex-wrap d-flex justify-content-between align-items-center ">
                        <div class="words text-start ">
                            <h3 class="fs--1 fw-bold ">Successful Payments</h3>
                            <h3>{{ $successfulPayments }}</h3>
                        </div>
                        <div class="icon me-2">
                            <div class="border-0 card card-body" style="background-color:rgba(2, 233, 110, 0.34);">
                                <i class="fa-solid fa-arrow-trend-up"></i>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-12">
            <div class="border-0 shadow card">

                <div class="card-body">


                    <div class="flex-wrap d-flex justify-content-between align-items-center ">
                        <div class="words text-start ">
                            <h3 class="fs--1 fw-bold ">Unsuccessful Payments</h3>
                            <h3>{{ $unsuccessfulPayments }}</h3>
                        </div>
                        <div class="icon me-2">
                            <div class="border-0 card card-body" style="background-color:rgba(233, 22, 2, 0.34);">
                                <i class="fa-solid fa-arrow-trend-down"></i>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>







    </div>

    <hr>


    <div class="py-4 row g-3">
        <div class="col-lg-6 col-sm-12 align-items-stretch ">

            <div class="mb-5 col-lg-12 col-sm-12 ">
                <div class="border-0 shadow card">

                    <div class="card-body">


                        <div class="flex-wrap d-flex justify-content-between align-items-center ">
                            <div class="words text-start " x-data="{
                                currentDate: '',
                                dateFunction() {
                                    const now = new Date();
                                    const formatter = new Intl.DateTimeFormat('en', {
                                        year: 'numeric',
                                        month: '2-digit',
                                        day: '2-digit',
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        second: '2-digit'
                                    });
                                    return formatter.format(now);
                                },
                                init() {
                                    this.currentDate = this.dateFunction();
                                    setInterval(() => {
                                        this.currentDate = this.dateFunction();
                                    }, 1000);

                                }
                            }">
                                <h3 class="fs--1 fw-bold ">Current Date & Time</h3>
                                <h3><span x-text="currentDate"></span></h3>
                            </div>
                            <div class="icon me-2">
                                <div class="border-0 card card-body"
                                    style="background-color:rgba(245, 172, 255, 0.34);">
                                    <i class="fa-solid fa-clock"></i>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 col-sm-12">
                <div class="border-0 shadow card">

                    <div class="card-body">


                        <div class="flex-wrap d-flex justify-content-between align-items-center ">
                            <div class="words text-start ">
                                <h3 class="fs--1 fw-bold ">Next Departure</h3>
                                @if ($nextDeparture != '')
                                    <h3>

                                        {{ \Carbon\Carbon::parse($nextDeparture)->format('d/m/Y, H:i A') }}

                                    </h3>


                                    <small
                                        class="text-warning">{{ \Carbon\Carbon::parse($nextDeparture)->diffForHumans() }}</small>
                                @else
                                    <h3 class="text-danger">Not Available</h3>
                                @endif
                            </div>
                            <div class="icon me-2">
                                <div class="border-0 card card-body"
                                    style="background-color:rgba(245, 172, 255, 0.34);">
                                    <i class="fa-solid fa-calendar"></i>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-6  col-sm-12">

            <div class="border-0 shadow card ">

                <div class="pb-0 card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Recent Bookings</h5>
                    <a class="card-title btn btn-link" href="{{ route('customer-bookings') }}">View All</a>
                </div>

                <div class="px-0 pt-0 pb-5 card-body " style="max-height: 261px; overflow-y: auto; ">
                    <div class="p-0 mb-0 table-responsive">
                        <table class="table mb-0 table-hoveralign-items-center ">
                            <thead class="py-5">
                                <tr>
                                    <th scope="col">ROUTE</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">TIME</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentBookings as $key => $booking)
                                    <tr class="p-5 @if ($key == 1) border-white @endif">
                                        <td scope="row">{{ $booking->customer_data['route_from'] }} to
                                            {{ $booking->customer_data['route_to'] }}</td>
                                        <td scope="row">
                                            {{ \Carbon\Carbon::parse($booking->customer_data['journey_date'])->format('d/m/Y') }}
                                        </td>
                                        <td scope="row">
                                            {{ \Carbon\Carbon::parse($booking->customer_data['journey_time'])->format('H:i A') }}
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>



</div>
@push('scripts')
    <script></script>
@endpush
