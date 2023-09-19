<div>
    <div>
        @section('title', 'Manage seats | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2">Manage Seats</h2>
            <h5 class="text-700 fw-semi-bold">Overview of buses and their seat capacities</h5>
        </div>

        <style>
            .seat {
                width: 30px;
            }

            .seat,
            .seat g:hover {
                fill: red;
            }

            .inner {
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 0px;
                padding-left: 10px;
            }
        </style>

        <div class="row align-items-start">
            <div class="col-4">
                <div class="mb-3">
                    <x-input-label class="form-label" for="">Status</x-input-label>

                    <select class="form-select " wire:model.debounce.500ms="is_booked">
                        <option value="">Select one</option>

                        <option value="booked">Booked</option>
                        <option value="not_booked">Not booked</option>

                    </select>

                </div>

            </div>
            <div class="col-4">
                <div class="mb-3">
                    <x-input-label class="form-label" for="">Date</x-input-label>
                    <select class="form-select " id="" name=""
                        wire:model.debounce.500ms="date_departing">
                        <option value="">Select one</option>

                        @foreach ($date as $dt)
                            <option value="{{ $dt->date_departing }}">
                                {{ \Carbon\Carbon::parse($dt->date_departing)->format('d/m/Y') }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-4">
                <div class="mb-3">
                    <x-input-label class="form-label" for="">Schedule</x-input-label>
                    <select class="form-select " id="" name=""
                        wire:model.debounce.500ms="schedule_time">
                        <option>Select one</option>
                        @foreach ($schedules as $schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->title }} @
                                {{ \Carbon\Carbon::parse($schedule->depart_time)->format('H:i A') }}
                            </option>
                        @endforeach

                    </select>
                </div>

            </div>

        </div>

        <div class="row align-items-start ">
            <div class="col-12">
                @if ($date_departing || $schedule_time || $is_booked)
                    <button class="btn btn-sm btn-outline-secondary rounded-pill me-2 mr-4 mb-1 text-uppercase"
                        type="button" wire:click="cancel('all')">CLEAR ALL FILTERS <i
                            class="fa-solid fa-xmark"></i></button>
                @endif

                @if ($is_booked)
                    <button class="btn btn-sm btn-phoenix-secondary rounded-pill me-2 mr-4 mb-1 text-uppercase"
                        type="button" wire:click="cancel('is_booked')">Status <i
                            class="fa-solid fa-xmark"></i></button>
                @endif

                @if ($date_departing)
                    <button class="btn btn-sm btn-phoenix-secondary rounded-pill me-2 mr-4 mb-1 text-uppercase"
                        type="button" wire:click="cancel('date_departing')">Date <i
                            class="fa-solid fa-xmark"></i></button>
                @endif

                @if ($schedule_time)
                    <button class="btn btn-sm btn-phoenix-secondary rounded-pill me-2 pr-4 mb-1 text-uppercase"
                        type="button" wire:click="cancel('schedule_time')">Schedule <i
                            class="fa-solid fa-xmark"></i></button>
                @endif

            </div>

        </div>

        <hr class="py-2">
        @php
            $bscount = 0;
        @endphp

        <div class="row ">

            @foreach ($bus as $key => $buses)
                <div class="col-lg-6 col-sm-12 d-flex align-items-stretch">

                    <div class="card  my-2   ">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>

                                    <div class="d-flex align-items-center ">
                                        <div class="me-3">
                                            <div class="avatar avatar-xl ">
                                                <div class="avatar-name rounded-circle text-body bg-200">
                                                    <span><i class="fa-solid fa-van-shuttle"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h5 class="m-0 me-2"> {{ $buses->model_name }}</h5>
                                            <small class="text-muted">S/N : {{ $buses->serial_number }}</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="dropdown open d-none">
                                    <button class="btn  " id="triggerId" data-bs-toggle="dropdown" type="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">
                                        <button class="dropdown-item" href="#">View details</button>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card-header" style="padding: 10px">

                            <div class="row ">

                                <div class="col">
                                    <h5 class="text-uppercase fs--1">Total number of Seats </h5>
                                </div>

                                <div class="col">
                                    <h5 class="text-uppercase fs--1">Number of taken Seats </h5>
                                </div>

                                <div class="col">
                                    <h5 class="text-uppercase fs--1">Number of free Seats </h5>
                                </div>
                            </div>

                        </div>

                        <div class="card-header " style="padding: 10px">

                            <div class="row align-items-end">

                                <div class="col">
                                    <span
                                        class="badge badge-phoenix badge-phoenix-secondary">{{ $buses->number_of_seats }}</span>
                                </div>

                                <div class="col">
                                    <span
                                        class="badge badge-phoenix @if ($buses->taken_seats > 0) badge-phoenix-secondary @else badge-phoenix-danger @endif">{{ $buses->taken_seats }}</span>
                                </div>

                                <div class="col">
                                    <span
                                        class="badge badge-phoenix @if ($buses->remaining_seats == 0) badge-phoenix-danger @else badge-phoenix-secondary @endif">{{ $buses->remaining_seats }}</span>
                                </div>
                            </div>

                        </div>
                        <div class="card-body   ">
                            <div class="row">
                                @foreach ($seats as $seat)
                                    @if ($buses->id == $seat->bus_id)
                                        @if ($seat->is_taken == 0)
                                            <div class="col-lg-2 col-sm-6">
                                                <a data-bs-toggle="button" href="#" style="text-decoration: none"
                                                    wire:loading.attr="disabled">
                                                    <div class="card my-1">
                                                        <div class="card-body d-flex justify-content-center "
                                                            style="padding: 10px;">
                                                            <x-seat-untaken />
                                                        </div>

                                                        <div class="card-footer  d-flex justify-content-center "
                                                            style="font-size: 9px; padding:1em">
                                                            #{{ $seat->seat_no }}
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        @else
                                            <div class="col-lg-2" x-data="{
                                                updated(id) {
                                                    window.livewire.emitTo('admin.view-seat', 'showModal', '' + id);
                                                }

                                            }">
                                                <a class="seat_check" id="seat_{{ $seat->id }}"
                                                    data-bs-toggle="button" href="#"
                                                    style="text-decoration: none"
                                                    @click="updated('{{ $seat->id }}')"
                                                    wire:loading.attr="disabled">
                                                    <div class="card   my-1">
                                                        <div class="card-body d-flex justify-content-center "
                                                            style="padding: 10px;">
                                                            <x-seat-taken />
                                                        </div>

                                                        <div class="card-footer  d-flex justify-content-center "
                                                            style="font-size: 9px; padding:1em">
                                                            #{{ $seat->seat_no }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row ">
            <livewire:admin.view-seat />
            {{ $bus->links('pagination::bootstrap-4') }}
        </div>

    </div>

</div>
@push('scripts')
    <script>
        $('.seat_check').click(function(e) {
            let id = $(this).attr('id');
            let seat_id = id.replace('seat_', '');


        });
    </script>
@endpush
