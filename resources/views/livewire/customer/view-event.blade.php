<div>

    <x-bootstrap-dialog-modal wire:model.defer="showingModalViewEvent">

        <x-slot name="title">
           
        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Title</h5>
                    <p class="mt-2 mb-0">
                        {{ $title }}
                    </p>
                </div>

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Date and Time
                    </h5>

                    <p class="mt-2 mb-0">
                        {{ \Carbon\Carbon::parse($journey_date)->format('d-m-y') }}

                    </p>
                    <p
                        class="badge badge-phoenix mb-0 fs--2 @if ($status) badge-phoenix-warning @else badge-phoenix-danger @endif ">
                        <span class="badge-label text-uppercase">
                            @if ($status)
                                Leaving soon
                            @else
                                Departed
                            @endif
                        </span><span class="ms-1" style="height:12.8px;width:12.8px;"></span>
                    </p>
                </div>

                <div class="pb-3 mt-3 border-bottom d-flex justify-content-between">

                    <div>
                        <h5 class="mb-0 text-800">Check In Time</h5>
                        <p class="mt-2 mb-0">
                            {{ \Carbon\Carbon::parse($check_in_time)->format('H:i A') }}
                        </p>

                    </div>

                    <div>
                        <h5 class="mb-0 text-800">Departing Time</h5>
                        <p class="mt-2 mb-0 text-right">
                            {{ \Carbon\Carbon::parse($journey_time)->format('H:i A') }}
                        </p>

                    </div>


                </div>

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Ticket Number</h5>
                    <p class="mt-2 mb-0">
                        {!! $ticket_no !!}
                    </p>
                </div>

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Seat Number</h5>
                    <p class="mt-2 mb-0">
                        {!! $seat_no !!}
                    </p>
                </div>

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Ticket Price</h5>
                    <p class="mt-2 mb-0">
                        <b>{{ $local_currency }} {!! $ticket_price !!}</b>
                    </p>
                </div>

                <div class="pb-3 mt-3 border-bottom">
                    <h5 class="mb-0 text-800">Amount paid</h5>
                    <p class="mt-2 mb-0">
                        <b>{{ $payment_currency == 'USD' ? '$' : $local_currency }} {!! $amount_paid !!}</b>
                    </p>
                </div>

                <div class="pb-3 mt-3 ">
                    <h5 class="mb-0 text-800">Payment Method</h5>
                    <p class="mt-2 mb-0">
                        {!! $payment_method !!}
                    </p>
                </div>
                <div class="d-flex justify-content-center">

                    <a class="btn btn-secondary" href="{{ asset('storage/invoices/' . $file_name) }}">Download Bus
                        Ticket Receipt</a>

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
