<div>
    <div>
        @section('title', ' | ')

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black">Notification History</h2>
            <h5 class="text-700 fw-semi-bold">Explore all your notifications</h5>
        </div>

        <div class="mb-5 mx-n4 mx-lg-n6 border-300">

            @if (count($notifications) > 0)
                @foreach ($notifications as $notification)
                    <div class="px-2 py-3 px-sm-3 border-300 border-bottom notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xl me-3">

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
                                </div>
                                <div class="flex-1 me-sm-3">
                                    <h4 class="text-black fs--1">{{ $notification->data['title'] }}</h4>
                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                        {{ $notification->data['description'] }} <br><span
                                            class=" text-400 fw-bold fs--2">{{ \Carbon\Carbon::parse($notification->updated_at)->diffForHumans() }}</span>
                                    </p>
                                    <p class="mb-0 text-800 fs--1"><span class="me-1 fas fa-clock"></span><span
                                            class="fw-bold">{{ \Carbon\Carbon::parse($notification->updated_at)->format('H:i A') }}
                                        </span>{{ \Carbon\Carbon::parse($notification->updated_at)->format('F j, Y') }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

</div>
@push('scripts')
    <script></script>
@endpush
