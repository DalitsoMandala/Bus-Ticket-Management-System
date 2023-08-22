<div>
    <div>
        @section('title', ' | ')

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2">Notification History</h2>
            <h5 class="text-700 fw-semi-bold">Explore all your notifications</h5>
        </div>

        <div class="mx-n4 mx-lg-n6 mb-5  border-300">

            @if (count($notifications) > 0)
                @foreach ($notifications as $notification)
                    <div class="px-2 py-3 px-sm-3 border-300 border-bottom notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                                <div class="avatar-xl me-3 flex-shrink-0">
                                    <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                        <i class="fa-solid fa-circle-exclamation" style="color:#ad81eb"></i>
                                    </span>
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
