<div>
  <div>
    @section('title', 'Payments | '.config('app.name'))

    <div class="mb-3">
        <h2 class="fs-2 fw-black mb-2"></h2>
        <h5 class="text-700 fw-semi-bold"></h5>
    </div>


    <div class="card">
        <div class="card-header d-flex justify-content-end">




        </div>
        <div class="card-body">
            <livewire:admin.payments-table />
        </div>

    </div>


</div>

</div>
@push('scripts')
<script>
</script>
@endpush
