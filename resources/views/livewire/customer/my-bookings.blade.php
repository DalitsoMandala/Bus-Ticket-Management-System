<div>
    @section('title', config('app.name') . ' | My bookings')
    <style>
        .fc .fc-button {

            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: 700;
        }

        .fc-toolbar-chunk {
            display: flex;
        }

        .fc .fc-next-button,
        .fc .fc-prev-button {
            background-color: white;
            border-color: white;
            color: #2c3e50;
        }

        .fc .fc-next-button:hover,
        .fc .fc-prev-button:hover {
            background-color: white;
            border-color: white;
            color: #2c3e50;
        }

        .fc-toolbar-title {
            font-weight: 600;
        }

        .fc-button-group {
            border: 01px #E3E6ED solid;
            border-radius: .375rem;
        }

        .fc .fc-button-primary:not(:disabled).fc-button-active:focus,
        .fc .fc-button-primary:not(:disabled):active:focus {

            outline: 0;

        }

        @media (max-width: 767.98px) {
            .fc .fc-toolbar.fc-header-toolbar {
                display: block;
                text-align: center;
            }

            .fc-header-toolbar .fc-toolbar-chunk {
                display: block ruby;
                margin: 5px 0px 5px 0px;
            }
        }

        .fc-event:hover {
            cursor: pointer;

        }

        .fc-theme-standard .fc-scrollgrid {
            border: none;
        }

        .scroll {
            max-height: 500px;
            overflow: auto;
        }
    </style>
    <div class="mb-3">
        <h2 class="mb-2 fs-2 fw-black">My Bookings</h2>
        <h5 class="text-700 fw-semi-bold">You can view your calendar and bookings here.</h5>
    </div>

    <div class="py-3 row">
        <div class="col-lg-8 col-sm-12 ">
            <div class="card ">
                <div class="card-header">
                    <b>Calendar</b>
                </div>
                <div class="card-body">
                    {{-- <div id="calendar" wire:ignore></div> --}}
                    <x-countdown-timer wire:model="travelEvents" />
                </div>


            </div>


        </div>
        <hr class="my-2 d-lg-none d-sm-block">
        <div class="col-lg-4 col-sm-12 d-flex align-items-stretch">
            <div class="card col-12 scroll ">
                <div class="card-header">
                    <b>Your upcoming travels</b>
                </div>
                <div class="p-1 card-body ">
                    <div class="list-group ">









                        @foreach ($schedules as $schedule)
                            <a class="my-1 border-0 list-group-item rounded-1 list-group-item-action flex-column align-items-start "
                                href="#{{ $schedule['id'] }}"
                                wire:click="$emitTo('customer.view-event', 'showModal', '{{ $schedule['id'] }}','{{ $schedule['data']['title'] }}','{{ $schedule['data']['className'] }}')">
                                <div class=" d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 fs--0 ">Travel from {{ $schedule['route_from'] }} to
                                        {{ $schedule['route_to'] }}</h5>



                                </div>

                                <small class="fs--1">Journey Date : <b>
                                        {{ \Carbon\Carbon::parse($schedule['date'])->format('d F Y') }}</b></small>
                                <p class="mb-1 fs--1">Check in time: <b>
                                        {{ \Carbon\Carbon::parse($schedule['check_in_time'])->format('H:i A') }}</b>
                                </p>
                                <p class="mb-1 fs--1">Departing time: <b>
                                        {{ \Carbon\Carbon::parse($schedule['time'])->format('H:i A') }}</b></p>



                                <div>

                                    <x-text-input class="inputs d-none" id="{{ $schedule['id'] }}"
                                        value="{{ $schedule['date'] }} {{ \Carbon\Carbon::parse($schedule['time'])->format('H:i') }}" />

                                    <div class=" d-flex justify-content-between col-lg-12">
                                        <div class="me-2" id="badge_{{ $schedule['id'] }}"></div>
                                        <div id="time_{{ $schedule['id'] }}"></div>
                                    </div>




                                </div>




                                <!-- resources/views/alpine/date-component.blade.php -->

                                <div wire:ignore x-data="{
                                    targetDate: '{{ $schedule['date'] }} {{ \Carbon\Carbon::parse($schedule['time'])->format('H:i') }}',
                                    dateDifference: '',
                                    isExpired: false,
                                    updateTime() {

                                        $wire.emitSelf('updateDeparture', '{{ $schedule['id'] }}');
                                    },
                                    calculateDateDifference() {
                                        const targetTime = new Date(this.targetDate).getTime();
                                        const currentTime = new Date().getTime();

                                        const difference = targetTime - currentTime;

                                        if (difference < 0) {
                                            this.dateDifference = 'Day has long passed';
                                            isExpired = true;
                                        } else {
                                            const seconds = Math.floor(difference / 1000);
                                            const minutes = Math.floor(seconds / 60);
                                            const hours = Math.floor(minutes / 60);
                                            const days = Math.floor(hours / 24);

                                            this.dateDifference = `${days} day(s), ${hours % 24} hour(s), ${minutes % 60} minute(s), ${seconds % 60} second(s) remaining`;
                                        }


                                    }
                                }" x-init="calculateDateDifference();
                                status = setInterval(() => calculateDateDifference(), 1000);
                                $watch('isExpired', value => {
                                    if (value === true) updateTime();
                                    clearInterval(status);
                                });">

                                    <input class="form-control d-none" x-model="dateDifference" />
                                    <p class="badge badge-phoenix fs--2 badge-phoenix-warning"
                                        x-show="isExpired === false">
                                        <i class="fa-regular fa-clock"></i>
                                        <span x-text="dateDifference"></span>
                                    </p>

                                    <p class="badge badge-phoenix fs--2 badge-phoenix-success" x-show="isExpired">
                                        <i class="fa-regular fa-circle-check"></i> Departed
                                    </p>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:customer.view-event />


</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            let event = @this.travelEvents;

            function loadCalendar() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'today',
                        center: 'prev title next',
                        right: 'dayGridMonth,dayGridWeek,dayGridDay'
                    },
                    timeZone: 'UTC',

                    events: event,
                    eventClick: function(info) {
                        let id = info.event.id;

                        let eventid = id.replace('event_', '');
                        let eventtitle = info.event.title;
                        let str = info.el.className;
                        let searchTerm = /text-success/g;
                        let result = str.search(searchTerm);
                        let status = '';
                        if (result !== -1) { // if found
                            status = 'success';
                        } else {
                            status = 'danger';
                        }
                        window.livewire.emitTo('customer.view-event', 'showModal', '' + eventid + '',
                            '' +
                            eventtitle + '', '' + status + '');

                    }


                });
                calendar.render();
            }
            //load calendar
            loadCalendar();

            function updatedTime() {
                var currentDate = new Date();

                var options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true,
                    second: 'numeric'
                };

                var formattedDate = currentDate.toLocaleDateString('en-US', options);

                return formattedDate;
            }

            function realTime(value) {

                var givenDate = new Date(value);

                // Get the current date
                var currentDate = new Date();

                // Calculate the time difference in milliseconds
                var timeDiff = Math.abs(givenDate - currentDate);

                // Calculate the time components
                var months = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 30));
                var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                var hours = Math.floor(timeDiff / (1000 * 60 * 60));
                var minutes = Math.floor(timeDiff / (1000 * 60));
                var seconds = Math.floor(timeDiff / 1000);

                // Determine if the date is in the past or future
                var isPast = givenDate < currentDate;
                var isFuture = givenDate > currentDate;

                // Display the results
                // console.log("Months: " + months);
                // console.log("Days: " + days);
                // console.log("Hours: " + hours);
                // console.log("Minutes: " + minutes);
                // console.log("Seconds: " + seconds);
                // console.log("Is in the past? " + isPast);
                // console.log("Is in the future? " + isFuture);

                return {
                    isPast: isPast,
                    remainingTime: {
                        Months: months,
                        Days: days,
                        Hours: hours,
                        Minutes: minutes,
                        Seconds: seconds
                    }


                }

            }

            //



            var all_inputs = document.querySelectorAll('.inputs');

            // setInterval(() => {

            //     all_inputs.forEach(function(input) {
            //         var value = input.value;
            //         var id = input.id;
            //         var realValue = realTime(value);
            //         var remainingTime = realValue.remainingTime;

            //         if (realValue.isPast == true) {

            //             var div = $("<div id='badge_status_" + id +
            //                 "'> <i class='fa fa-check'></i> Departed</div>").addClass(
            //                 "badge badge-phoenix fs--2 badge-phoenix-success");
            //             $('#badge_' + id).html(div);
            //             //  $('#calendar').remove();



            //         } else {

            //             var div = $("<div id='badge_status_" + id +
            //                     "'><i class='fa fa-clock'></i> Leaving Soon</div>")
            //                 .addClass(
            //                     "badge badge-phoenix fs--2 badge-phoenix-warning");
            //             $('#badge_' + id).html(div);

            //         }

            //         if (remainingTime.Minutes <= 30 && remainingTime.Minutes > 0 && realValue
            //             .isPast == false) {
            //             var div = $("<div id='time_status_" + id + "'>" + remainingTime.Minutes +
            //                 " min remaining</div>").addClass(
            //                 "badge badge-phoenix fs--2 badge-phoenix-danger");
            //             $('#time_' + id).html(div);
            //         } else {
            //             var div = '';
            //             $('#time_' + id).html(div);
            //         }
            //         if (remainingTime.Minutes == 0 && realValue.isPast == false && remainingTime
            //             .Seconds > 0) {
            //             var div = $("<div id='time_status_" + id + "'>" + remainingTime.Seconds +
            //                 " s remaining</div>").addClass(
            //                 "badge badge-phoenix fs--2 badge-phoenix-danger");
            //             $('#time_' + id).html(div);
            //         }
            //         if (remainingTime.Minutes == 0 && realValue.isPast == true && remainingTime
            //             .Seconds == 0) {
            //             var div = '';
            //             $('#time_' + id).html(div);
            //         }


            //     });
            // }, 1000);

        });
    </script>
@endpush
