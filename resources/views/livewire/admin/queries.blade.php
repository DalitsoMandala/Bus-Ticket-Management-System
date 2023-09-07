<div>
    <div>
        @section('title', config('app.name') . ' | Queries')
        <style>
            .chat-textarea {
                position: relative;

                border: 1px solid #fff;
                border-radius: 10px;
                background-color: #fff;

            }

            .chat-textarea textarea {
                resize: none;
                border: none;
                width: 100%;
                padding: 0;
                margin: 0;
                font-size: 14px;
            }

            /* Custom CSS for the chat bubble */
            .chat-bubble {
                position: relative;
                padding: 10px;
                max-width: 300px;
                /* Adjust the width as needed */
                border-radius: 15px;
                margin: 20px;
            }

            .chat-bubble::before {
                content: "";
                position: absolute;
                border-style: solid;
                border-width: 10px 10px 10px 0;
                border-color: transparent #fff transparent transparent;
                top: 10px;
                /* Adjust the vertical position of the arrow */
                left: -10px;
                /* Adjust the horizontal position of the arrow */
            }

            /* Style the chat bubble for the sender */
            .chat-bubble.sender::before {
                border-color: transparent transparent transparent #efefef;
                right: -10px;
                /* Adjust the horizontal position for sender bubble */
                left: auto;
            }

            /* Additional styling for the sender bubble */
            .chat-bubble.sender {
                background-color: #efefef;
            }

            input:focus {
                outline: none;
                /* Add any additional styling you want for the focused state */
            }

            .scrollable-card {
                max-height: 500px;
                /* Set the desired maximum height for the card */
                overflow-y: auto;
                /* Enable vertical scrolling if content overflows */
            }
        </style>
        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black">Customer Queries</h2>
            <h5 class="text-700 fw-semi-bold">Communicate with your customers here.</h5>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="p-2 my-4 card scrollable-card">

                    <div class="mt-3 mb-4 form-icon-container d-sm-none d-xl-block"><input
                            class="form-control search-input fuzzy-search rounded-pill form-control-smt" type="text"
                            wire:model.debounce.1s="search"
                            placeholder="Search name, customer id here..."><!--  Font Awesome fontawesome.com -->
                    </div>



                    <div class="list-group list-group-flush">

                        @if (count($people) == 0)
                            <div
                                class="p-3 disabled list-group-item-action flex-column align-items-start p-sm-4 clickable-chat nav-link">
                                No results found!
                            </div>
                        @endif

                        @foreach ($people as $key => $data)
                            @if ($data['user_id'] != Auth::user()->id)
                                <a class="p-3 list-group-item-action flex-column align-items-start p-sm-4 clickable-chat nav-link "
                                    href="#userid-{{ $data['user_id'] }}"
                                    wire:click="viewChat('{{ $data['user_id'] }}')">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                            <div class="avatar avatar-l ">
                                                @if (\App\Models\User::find($data['user_id'])->customers->first()->profile_picture != null)
                                                    <img class="rounded-circle img-fluid userprofile"
                                                        src="{{ asset('storage/profile_pictures/' . \App\Models\User::find($data['user_id'])->customers->first()->profile_picture) }}"
                                                        alt=""><span class="user-status"></span>
                                                @else
                                                    <img class="rounded-circle img-fluid userprofile"
                                                        src="{{ asset('assets/img/user.png') }}" alt=""><span
                                                        class="user-status"></span>
                                                @endif


                                            </div>
                                        </div>
                                        <div class="overflow-hidden flex-grow-1">
                                            <p class="mb-0 text-truncate">
                                                {{ \App\Models\User::find($data['user_id'])->customers->first()->first_name }}
                                                {{ \App\Models\User::find($data['user_id'])->customers->first()->last_name }}
                                            </p>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-0 fs--1 line-clamp-1 text-600 message">CUSTOMER ID -
                                                    {{ \App\Models\User::find($data['user_id'])->customers->first()->customer_uuid }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="ms-auto">
                                            @if ($data['unred'] > 0)
                                                <span
                                                    class="p-1 rounded badge badge-phoenix badge-phoenix-danger text-body">

                                                    {{ $data['unred'] }}

                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach

                    </div>


                </div>

            </div>
            <div class="col-8 ">
                <div class="flex-1 my-4 card ">
                    <div class="p-3 card-header p-md-4 d-flex flex-between-center">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column flex-md-row align-items-md-center"><button
                                    class="p-0 btn fs-1 fw-semi-bold text-1100 d-flex align-items-center me-3 text-start"
                                    data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0"><span
                                        class="line-clamp-1">{{ $selectedUser }}</span><!-- <span class="fa-solid fa-chevron-down ms-2 fs--2"></span> Font Awesome fontawesome.com --></button>
                                <p class="mb-0 fs--1 me-2 d-none">
                                    <span class="fa-solid fa-circle text-success fs--3 me-2"></span>Active now
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="p-3 card-body p-sm-4 scrollable-card" id="scrollable-card">
                        <div class="p-3 text-center alert alert-soft-secondary" role="alert">
                            <em class="fs--1">Your messages will appear here</em> <br>

                            <small> <i class="fa fa-arrow-down" aria-hidden="true"></i></small>
                        </div>


                        @foreach ($msg_data as $chat)
                            <div class="d-flex chat-message">
                                <div class="flex-1 mb-2 d-flex ">
                                    <div class="w-100 w-xxl-75">
                                        <div
                                            class="d-flex @if ($chat->user_id === auth()->user()->id) flex-end-center @endif hover-actions-trigger">

                                            <div class="chat-message-content ">
                                                <div class="p-3 mb-1  sent-message-content light  @if ($chat->user_id === auth()->user()->id) text-white bg-700 @else bg-100 @endif"
                                                    style="border-radius: 20px 20px 20px 20px;">

                                                    <p class="mb-0 fs--1">{{ $chat->content }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" @if ($chat->user_id === auth()->user()->id) text-end @else '' @endif">
                                            <p class="mb-0 fs--2 text-600 fw-semi-bold">

                                                {{ \Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach





                    </div>

                    <div class="border-0 card-footer">
                        <form action="" wire:submit.prevent='save'>




                            <div class="flex-1 gap-3 d-flex align-items-center rounded-pill ">
                                <div class="col">
                                    <div class="mb-1 rounded chat-textarea">
                                        <textarea class="p-3 rounded-pill form-control scrollbar"
                                            style="@if ($errors->has('msg')) border: 1px solid red;  @else border: 1px solid #e3e6ed; @endif "
                                            rows="1" wire:model.defer="msg" autofocus placeholder="Type your message..."></textarea>

                                    </div>

                                </div>
                                <div>
                                    @if ($selected != null)
                                        <x-black-button class="p-3 rounded-circle"> <span
                                                class="fa-solid fa-paper-plane "></span>
                                        </x-black-button>
                                    @endif

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>

</div>
@push('scripts')
    <script>
        $('.clickable-chat').click(function(e) {
            var chatContainer = $('#scrollable-card');

            setTimeout(() => {
                var scrollHeight = chatContainer.prop('scrollHeight');

                chatContainer.animate({
                    scrollTop: scrollHeight
                }, 800);
            }, 1000);


        });

        setInterval(() => {

            var id = @this.selected;

            if (id != null) {
                Livewire.emitTo("admin.queries", "viewChat", id);
            }

        }, 30000);
    </script>
@endpush
