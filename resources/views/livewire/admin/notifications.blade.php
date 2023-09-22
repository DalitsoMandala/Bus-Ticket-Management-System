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

        .translate-middle {
            /* -webkit-transform: translateX(-50%) translateY(-50%) !important; */
            /* -ms-transform: translateX(-50%) translateY(-50%) !important; */
            transform: translateX(-70%) translateY(70%) !important;
        }
    </style>


    <a class="nav-link lh-1 pe-0 show" id="navbarDropdownUser" data-bs-toggle="dropdown" data-bs-auto-close="outside"
       href="#!" role="button" aria-haspopup="true" aria-expanded="true" wire:click="readAll">
        <div>

            <span class="fa-regular @if (count($notifications) === 0) fa-bell-slash @else fa-bell @endif "
                  style="height:20px;width:20px;">{{ count($notifications) }}</span>


            <span
                  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger @if (count($notifications) === 0) d-none @endif">{{ count($notifications) }}</span>


        </div>
    </a>

    <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
         data-bs-popper="static" aria-labelledby="navbarDropdownUser" wire:ignore.self>
        <div class="border-0 card position-relative">
            <div class="card-header">
                <h5 class="fs-1">Notifications</h5>
            </div>
            <div class="overflow-auto scrollbar" style="height: 15rem; ">
                <ul class="pb-1 mb-2 nav d-flex flex-column" wire:ignore>

                    @if (count($notifications_data) > 0)
                        @foreach ($notifications_data as $notification)
                            <div
                                 class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex ">
                                        <a class="flex-shrink-0 avatar-xl me-3" href="{{ $notification->data['link'] }}"
                                           style="text-decoration: none">
                                            @if ($notification->data['link'] == route('admin-schedules'))
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16"
                                                      style="background:#685089;">
                                                    <i class="fa-solid fa-business-time" style="color:#c49aff;"></i>

                                                </span>
                                            @elseif ($notification->data['link'] == route('admin-queries'))
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16"
                                                      style="background:#713d63;">
                                                    <i class="fa-solid fa-comment" style="color:#ff8fe1;"></i>

                                                </span>
                                            @elseif ($notification->data['link'] == route('admin-routes'))
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16"
                                                      style="background:#3a4b69;">
                                                    <i class="fa-solid fa-map-pin" style="color:#8db7ff;"></i>

                                                </span>
                                            @elseif ($notification->data['link'] == route('admin-buses'))
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16"
                                                      style="background:#565330;">
                                                    <i class="fa-solid fa-bus" style="color:#fff589;"></i>

                                                </span>
                                            @endif
                                        </a>
                                        <a class="flex-1 me-sm-3" href="{{ $notification->data['link'] }}"
                                           style="text-decoration: none">
                                            <h4 class="text-black fs--1">{{ $notification->data['title'] }}</h4>
                                            <p
                                               class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal text-break line-clamp-2 lead">
                                                {!! $notification->data['description'] !!} <br><span
                                                      class=" text-400 fw-bold fs--2">{{ \Carbon\Carbon::parse($notification->updated_at)->diffForHumans() }}</span>
                                            </p>
                                            <p class="mb-0 text-800 fs--2"><span class="me-1 fas fa-clock"></span><span
                                                      class="fw-bold">{{ \Carbon\Carbon::parse($notification->updated_at)->format('H:i A') }}
                                                </span>{{ \Carbon\Carbon::parse($notification->updated_at)->format('F j, Y') }}
                                            </p>
                                        </a>
                                    </div>
                                    <div class="font-sans-serif d-none "><button
                                                class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown"
                                                data-boundary="window" data-bs-reference="parent" type="button"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                        <div class="py-2 dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                               href="#!" wire:click="readData('{{ $notification->id }}')">Mark
                                                as
                                                read</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="px-2 py-5 px-sm-3 border-300 position-relative ">
                            <div class="d-flex align-items-center justify-content-center ">

                                <div class=" avatar-xl me-3">
                                    <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                        <i class="fa-solid fa-bell-slash" style="color:#e95555"></i>

                                    </span>
                                </div>
                                <div class="">
                                    <h5 class="fs-18 fw-semibold lh-base">You have no notifications!</h5>
                                </div>

                            </div>
                        </div>
                    @endif
                </ul>
            </div>
            <div class="p-0 card-footer border-top">
                <div
                     class="my-2 text-center fw-bold fs--2 text-600 d-flex justify-content-center align-items-center ms-2 me-2">
                    <a class="btn btn-phoenix-secondary " href="{{ route('admin-notification-history') }}"><i
                           class="fa-solid fa-clock-rotate-left"></i> History </a>


                </div>

            </div>
        </div>
    </div>



</div>
@push('scripts')
    <script></script>
@endpush
