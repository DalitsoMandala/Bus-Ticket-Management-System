<div>
    <div>

        @section('title', config('app.name') . ' | Payments')
        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black">Recent Transactions</h2>
            <h5 class="text-700 fw-semi-bold">keep track of your payments</h5>
        </div>


        <div class="card">

            <div class="card-body">
                <livewire:customer.payments-table />
            </div>

        </div>


    </div>

</div>
@push('scripts')
    <script></script>
@endpush
