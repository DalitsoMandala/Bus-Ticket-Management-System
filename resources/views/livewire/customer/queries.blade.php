<div>
    <div>
        @section('title', config('app.name') . ' | Queries')

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black">Submit your Queries</h2>
            <h5 class="text-700 fw-semi-bold">Get in touch with us if you have any queries.</h5>
        </div>
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

        <div class="flex-1 my-4 card">
            <div class="p-3 card-header p-md-4 d-flex flex-between-center">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button
                            class="p-0 btn fs-1 fw-semi-bold text-1100 d-flex align-items-center me-3 text-start"
                            data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0"><span
                                class="line-clamp-1">{{ $admin->first_name }}
                                {{ $admin->last_name }}</span>

                            <!-- <span class="fa-solid fa-chevron-down ms-2 fs--2"></span> Font Awesome fontawesome.com --></button>
                        <p class="mb-0 fs--1 me-2">
                            <small>Administrator</small>
                        </p>
                    </div>
                </div>

            </div>
            <div class="p-3 card-body p-sm-4 scrollable-card" id="scrollable-card">
<<<<<<< HEAD
                <div class="text-center alert alert-soft-secondary fs--1" role="alert">
=======
                <div class="text-center alert alert-soft-warning" role="alert">
>>>>>>> 8a0f52d914dd1b773abd0c08053fc5af1165d51d
                    <em>Feel free to send us your queries. You will be able to get back to you within 24hours.</em>
                </div>



                @foreach ($msg_data as $chat)
                    @if ($chat->user_id == auth()->user()->id)
                        <div class="d-flex chat-message" wire:key="'chat_sent'.$chat->id">
                            <div class="flex-1 mb-2 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="d-flex flex-end-center hover-actions-trigger">

                                        <div class="chat-message-content ">
                                            <div class="p-3 mb-1 text-white sent-message-content light bg-700"
                                                style="border-radius: 20px 20px 3px 20px;">

                                                <p class="mb-0 fs--1">{{ $chat->content }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <p class="mb-0 fs--2 text-600 fw-semi-bold">
                                            You - {{ \Carbon\Carbon::parse($chat->updated_at)->diffForHumans() }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="d-flex chat-message" :wire:key="'chat_recieved'.$chat->id">
                            <div class="flex-1 mb-2 d-flex">
                                <div class="w-100 w-xxl-75">
                                    <div class="d-flex hover-actions-trigger">

                                        <div class="chat-message-content received ">
                                            <div class="p-3 mb-1 border received-message-content "
                                                style="border-radius: 3px 20px 20px 20px;">
                                                <p class="mb-0 fs--1">{{ $chat->content }}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <p class="mb-0 fs--2 text-600 fw-semi-bold">
                                            {{ \Carbon\Carbon::parse($chat->updated_at)->diffForHumans() }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
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

                            <x-black-button class="p-3 rounded-circle"> <span class="fa-solid fa-paper-plane "></span>
                            </x-black-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.2/perfect-scrollbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/offline.min.js"
        integrity="sha512-KTivTC9CKUCyHiWM0wIqmkGMlMPREqaQlPIXcEMzza3fceLHnyuzJ00VSRw75TUXQE80MmugpySjAVu75S+bNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener('livewire:load', function() {

            const scrollableCard = $('#scrollable-card');
            scrollableCard.scrollTop(scrollableCard[0].scrollHeight);

            Offline.options = {
                // Should we check the connection status immediatly on page load.
                checkOnLoad: false,

                // Should we monitor AJAX requests to help decide if we have a connection.
                interceptRequests: true,

                // Should we store and attempt to remake requests which fail while the connection is down.
                requests: true,

                // Change default file check
                //checks: {image: {url: 'makitweb-logo.png'}, active: 'image'},


                // Should we show a snake game while the connection is down?
                //game: true
            }


        });

        setInterval(() => {


            Livewire.emitTo("customer.queries", "viewChat");


        }, 10000);
    </script>
@endpush
