<div>
    <div>
        @section('title', 'Dashboard | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>

        <style>

        </style>

        <div class="my-5 card ">

            <div class="p-0 px-3 card-body">

                <div class="row ">
                    <div class="pb-3 border-end-lg border-end-sm-0 col-lg-3 col-sm-12 ">
                        <div class="py-4">
                            <h5 class="mb-6 text-muted text-uppercase fs--1">CUSTOMERS <i
                                    class="align-middle text-success fs-18 float-end"></i></h5>

                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                <div>
                                    <h4 class="mb-4 fs-4 fw-semibold ff-secondary"><span class="counter-value"
                                            data-target="183.35">{{ $customers }}</span>
                                    </h4>
                                    <a class=" btn-link" href="{{ route('admin-customers') }}">See details <i
                                            class="fas fa-arrow-right "></i></a>
                                </div>
                                <div class="flex-shrink-0 avatar avatar-xl">
                                    <span class="rounded avatar-title bg-warning ">
                                        <i class="fa-solid fa-person-walking-luggage fs-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="pb-3 col-lg-3 col-sm-12 border-end-lg border-end-sm-0 border-top-sm border-top-lg-0">
                        <div class="py-4 ">
                            <h5 class="mb-6 text-muted text-uppercase fs--1">BOOKINGS <i
                                    class="align-middle text-success fs-18 float-end"></i></h5>
                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                <div>
                                    <h4 class="mb-4 fs-4 fw-semibold ff-secondary"><span class="counter-value"
                                            data-target="183.35">{{ $bookings }}</span>
                                    </h4>
                                    <a class=" btn-link" href="{{ route('admin-bookings') }}">See details <i
                                            class="fas fa-arrow-right "></i></a>
                                </div>
                                <div class="flex-shrink-0 avatar avatar-xl">
                                    <span class="rounded avatar-title bg-danger ">
                                        <i class="fa-solid fa-calendar-days s-2"></i>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>


                    <div class="pb-3 col-lg-3 col-sm-12 border-end-lg border-end-sm-0 border-top-sm border-top-lg-0">
                        <div class="py-4 ">
                            <h5 class="mb-6 text-muted text-uppercase fs--1">BUSES <i
                                    class="align-middle text-success fs-18 float-end"></i></h5>
                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                <div>
                                    <h4 class="mb-4 fs-4 fw-semibold ff-secondary"><span class="counter-value"
                                            data-target="183.35">{{ $buses }}</span>
                                    </h4>
                                    <a class=" btn-link" href="{{ route('admin-buses') }}">See details <i
                                            class="fas fa-arrow-right "></i></a>
                                </div>
                                <div class="flex-shrink-0 avatar avatar-xl">
                                    <span class="rounded avatar-title " style="background-color: #299cdb">
                                        <i class="fa-solid fa-bus fs-2"></i>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="pb-3 col-lg-3 col-sm-12 border-top-sm border-top-lg-0 ">
                        <div class="py-4 ">

                            <h5 class="mb-2 text-muted text-uppercase fs--1 ">INCOME <i
                                    class="align-middle text-success fs-18 float-end"></i></h5>







                            <div class="">

                                @foreach ($income as $currency => $money)
                                    <h4 class=" fs-1 fw-semibold ff-secondary line-clamp-1">{{ $currency }}<span
                                            class="ms-2 text-success fw-bolder ">{!! number_format($money, 2) !!}</span>
                                    </h4>
                                @endforeach




                            </div>




                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                <div>



                                    <div>
                                        <a class=" btn-link" href="{{ route('admin-payments') }}">See details <i
                                                class="fas fa-arrow-right "></i></a>
                                    </div>



                                </div>


                                <div class="flex-shrink-0 avatar avatar-xl">
                                    <span class="rounded avatar-title " style="background-color: #45CB85;">
                                        <i class="fa-solid fa-hand-holding-dollar fs-2"></i>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>


        <div class="my-3 row">
            <div class="col-lg-6 col-sm-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6>Bookings chart</h6>
                        <div class="">

                            <select class="form-select form-select-sm" id=""
                                wire:model.debounce.500ms="bookingChartChange">
                                <option value="month" selected>Months</option>
                                <option value="day">Days</option>
                                <option value="today">Today</option>

                            </select>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="echart-bar-line-mixed-chart-example" id="main"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Popular Routes</h6>
                    </div>
                    <div class="card-body" style="min-height:350px" wire:ignore>
                        <div class="echart-bar-line-mixed-chart-example" id="main2"></div>
                    </div>

                </div>
            </div>
        </div>


    </div>

</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('livewire:load', function() {

            var data = @this.bookingsChart;
            var series = [];
            for (serie in data) {

                series.push(data[serie]);
            }


            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];


            var options = {
                chart: {
                    type: 'line',
                    stacked: true
                },

                fill: {
                    colors: ['#5adcff']
                },
                series: [{
                        name: 'Bookings',
                        type: 'area', // Specify the chart type for this series (line)
                        data: series,
                    },

                ],
                xaxis: {
                    categories: months,
                    labels: {
                        rotate: 0 // Set the rotation angle to 0 degrees (horizontal)
                    }
                },
                stroke: {
                    curve: 'smooth',
                    colors: ['#00BAEC'],
                },

            }

            var chart = new ApexCharts(document.querySelector("#main"), options);

            chart.render();


            function updateChart(type) {


                var data = @this.bookingsChart;
                var series = [];
                for (serie in data) {

                    series.push(data[serie]);
                }


                const months = [
                    "January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];


                const daysOfWeek = [
                    'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
                ];

                const hours = [];

                for (let hour = 0; hour < 24; hour++) {
                    for (let minute = 0; minute < 60; minute += 30) {
                        let formattedHour = hour % 12 || 12; // Convert to 12-hour format
                        const period = hour < 12 ? 'AM' : 'PM'; // Determine AM or PM
                        formattedHour = formattedHour.toString().padStart(2, '0');
                        const formattedMinute = minute.toString().padStart(2, '0');
                        hours.push(`${formattedHour}:${formattedMinute} ${period}`);
                    }
                }

                if (type == 'day') {
                    // Update the chart options
                    const updatedOptions = {
                        xaxis: {
                            categories: daysOfWeek
                        },
                        series: [{
                            data: series,
                            type: 'column'
                        }]
                    };

                    // Update the chart with new options
                    chart.updateOptions(updatedOptions);

                } else if (type == 'month') {

                    // Update the chart options
                    const updatedOptions = {
                        xaxis: {
                            categories: months
                        },
                        series: [{
                            data: series,
                            type: 'area'
                        }]
                    };

                    // Update the chart with new options
                    chart.updateOptions(updatedOptions);

                } else {
                    // Update the chart options
                    const updatedOptions = {


                        xaxis: {
                            categories: hours
                        },
                        series: [{
                            data: series,
                            type: 'bar'
                        }]
                    };

                    // Update the chart with new options
                    chart.updateOptions(updatedOptions);

                }




            }


            document.addEventListener('updateBookingschart', function(e) {
                updateChart(e.detail);
            });


            const routes = @this.popularRoutes;
            var categories = [];
            var values = [];
            $.each(routes, function(indexInArray, valueOfElement) {
                categories.push(indexInArray);
                values.push(valueOfElement);
            });



            var options = {
                series: values,
                labels: categories,
                chart: {
                    type: 'donut',
                },

                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]

            };

            var chart2 = new ApexCharts(document.querySelector("#main2"), options);
            chart2.render();


        });
    </script>
@endpush
