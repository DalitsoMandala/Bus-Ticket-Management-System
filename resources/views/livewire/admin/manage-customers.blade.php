<div>
    <div>
        @section('title', ' | ')

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>


        <div class="card">
            <div class="card-header d-flex justify-content-end">



                <livewire:admin.add-customer />
                <livewire:admin.delete-customer />

            </div>
            <div class="card-body">

                <livewire:admin.customer-table />

            </div>

        </div>


    </div>

</div>
@push('scripts')
    <script></script>
@endpush
