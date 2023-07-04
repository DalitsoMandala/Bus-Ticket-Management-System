<div>
    <div>
        @section('title', 'Buses | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>


        <div class="card">
            <div class="card-header d-flex justify-content-end">

                <livewire:admin.add-bus />
                <livewire:admin.delete-bus />

            </div>
            <div class="card-body">
                <livewire:admin.buses-table />
            </div>

        </div>


    </div>

</div>
@push('scripts')
    <script></script>
@endpush
