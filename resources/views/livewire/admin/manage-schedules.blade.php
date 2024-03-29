<div>
    <div>
        @section('title', 'Bus Schedule | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>


        <div class="card">
            <div class="card-header d-flex justify-content-end">


                <livewire:admin.add-schedule />
                <livewire:admin.delete-schedule />

            </div>
            <div class="card-body">
                <livewire:admin.schedules-table />
            </div>

        </div>


    </div>

</div>
@push('scripts')
    <script></script>
@endpush
