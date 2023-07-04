<div>
    <div>
        @section('title', 'Bookings | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>


        <ul class="nav nav-underline mb-3">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-bookings') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('admin-bookings') }}">Booking Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-book-bus') ? 'active' : '' }}"
                    href="{{ route('admin-book-bus') }}">Book a Bus</a>
            </li>


        </ul>

        <div class="card">
            <div class="card-header d-flex justify-content-end">


                <livewire:admin.add-booking />
                <livewire:admin.delete-booking />
            </div>
            <div class="card-body">
                <livewire:admin.bookings-table />



            </div>

        </div>


    </div>

</div>
@push('scripts')
@endpush
