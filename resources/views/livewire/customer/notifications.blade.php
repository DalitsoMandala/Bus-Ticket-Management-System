<div>
    <style>
        .avatar-title {
            align-items: center;
            background-color: #e6daf7;
            color: #fff;
            display: flex;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }
    </style>

    <a class="nav-link position-relative" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"
        role="button" aria-haspopup="true" aria-expanded="false">

        <div wire:poll.15s>


            <span class="fa-regular @if (count($notifications) === 0) fa-bell-slash @else fa-bell @endif "
                style="height:20px;width:20px;">{{ count($notifications) }}</span>


            <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger @if (count($notifications) === 0) d-none @endif">{{ count($notifications) }}</span>


        </div>


    </a>

    <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret "
        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication" wire:ignore.self>
        <div class="border-0 card position-relative">
            <div class="p-2 card-header">
                <div class="py-1 mx-2 d-flex justify-content-between">
                    <h5 class="mb-0 text-black">Notifications
                    </h5>
                </div>
            </div>


            <x-customer-notifications>

                <div class="p-0 card-body">
                    <div class="scrollbar-overlay" style="height: 14rem;">

                        <div class="border-300">

                            @if (count($notifications_data) > 0)
                                @foreach ($notifications_data as $notification)
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xl me-3">
                                                    <span
                                                        class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                        <i class="fa-solid fa-circle-exclamation"
                                                            style="color:#ad81eb"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">{{ $notification->data['title'] }}</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        {{ $notification->data['description'] }} <br><span
                                                            class=" text-400 fw-bold fs--2">{{ \Carbon\Carbon::parse($notification->updated_at)->diffForHumans() }}</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">{{ \Carbon\Carbon::parse($notification->updated_at)->format('H:i A') }}
                                                        </span>{{ \Carbon\Carbon::parse($notification->updated_at)->format('F j, Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    data-bs-reference="parent" type="button" aria-haspopup="true"
                                                    aria-expanded="false"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="py-2 dropdown-menu dropdown-menu-end"><a
                                                        class="dropdown-item" href="#!"
                                                        x-on:click="$wire.call('readData','{{ $notification->id }}')">Mark
                                                        as
                                                        read</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="px-2 py-5 px-sm-3 border-300 position-relative ">
                                    <div class="d-flex align-items-center justify-content-center position-relative">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-xl me-3">
                                                <span
                                                    class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                    <i class="fa-solid fa-bell-slash" style="color:#e95555"></i>

                                                </span>
                                            </div>
                                            <div class="flex-1 me-sm-3">
                                                <h5 class="fs-18 fw-semibold lh-base">You have no notifications!</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        </div>

            </x-customer-notifications>


            <div class="p-0 border-0 card-footer ">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="btn btn-phoenix-secondary "
                        href="{{ route('customer-notification-history') }}">Notification
                        history <i class="fas fa-arrow-up "></i></a>

                    <a class="btn btn-soft-success fs--1 fw-normal" data-bs-toggle="button" href="#!"
                        role="button" wire:click="readAll"><i class="fa-solid fa-check-double"></i> Mark
                        all as
                        read</a>
                </div>
            </div>
        </div>
    </div>



</div>
@push('scripts')
    <script>
        var objects = @json($notifications);
    </script>
@endpush
