<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<!-- Mirrored from prium.github.io/phoenix/v1.11.0/documentation/getting-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 11:35:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link href="https://prium.github.io/phoenix/v1.11.0/assets/img/favicons/manifest.json" rel="manifest">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link href="{{ asset('assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/unicons.iconscout.com/release/v4.0.0/css/line.css') }}" rel="stylesheet">
    <link id="style-rtl" type="text/css" href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet">
    <link id="style-default" type="text/css" href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet">
    <link id="user-style-rtl" type="text/css" href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet">
    <link id="user-style-default" type="text/css" href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link
          crossorigin="anonymous"href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/css/intlTelInput.css"
          integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
          referrerpolicy="no-referrer" rel="stylesheet" />
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>

    <style>
        .intl-tel-input {
            width: 100%;
        }

        .iti {
            width: 100%;
        }

        .choices .choices__list--multiple .choices__item {
            background-color: #31374a;
            color: #fff;
        }

        .choices[data-type*="select-multiple"] .choices__button,
        .choices[data-type*="text"] .choices__button {
            border-left: 1px solid #b5acac;
            padding-bottom: 3px;
            padding-top: 3px;
        }

        .choices .choices__inner {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .livesearch {
            position: absolute;
            width: 93%;
            display: block;
            max-height: 200px;
            margin-bottom: 10px;
            overflow: scroll;
            -webkit-overflow-scrolling: touch;
        }

        .list-group-item-action:active {
            color: #fff;
            background-color: #222834;
        }

        .select2-container .select2-choice {
            height: 34px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            background-color: #fff;
            background-image: none;
            background: #fff;
        }

        .select2-container--bootstrap-5 .select2-dropdown .select2-search .select2-search__field:focus {
            border-color: #e0e7ff;
            box-shadow: none
        }

        .select2-container--bootstrap-5.select2-container--focus .select2-selection,
        .select2-container--bootstrap-5.select2-container--open .select2-selection {
            border-color: #e0e7ff;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(45, 13, 97, 0.18);
            box-shadow: 0 0 0 0.2rem rgba(45, 13, 97, 0.18);
        }

        .fullscreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            /* Optional: Customize the loader background color */
            z-index: 9999;
        }

        .loader {
            width: 48px;
            height: 48px;
            border: 3px solid #dddd;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .loader::after {
            content: '';
            box-sizing: border-box;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-bottom-color: #31374a;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    @livewireStyles

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="fullscreen" id="loader">
        <span class="loader"></span>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="px-0 container-fluid" data-layout="container">
            @role('admin')
                @include('layouts.admin-layout')
            @endrole

            @role('customer')
                @include('layouts.customer-layout')
            @endrole
            <div class="content">

                {{ $slot }}


                @role('customer')
                    <livewire:bus-departed />
                    <livewire:customer.reminder-app />
                @endrole
                <footer class="footer position-absolute ">
                    <div class="row g-0 justify-content-between align-items-center h-100">
                        <div class="text-center col-12 col-sm-auto">
                            <p class="mt-2 mb-0 mt-sm-0 text-900">Developed by Dalitso Mandala &copy; 2023</p>
                        </div>
                        <div class="text-center col-12 col-sm-auto">
                            <p class="mb-0 text-600">v1.11.0</p>
                        </div>
                    </div>
                </footer>
            </div>

    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <livewire:check-session>

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        @livewireScripts


        <x-livewire-alert::scripts />
        <x-livewire-alert::flash />

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
                integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/lodash/lodash.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/polyfill.io/v3/polyfill.min58be.js') }}"></script>
        <script src="{{ asset('assets/vendors/list.js/list.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/dayjs/dayjs.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/prism/prism.js') }}"></script>
        <script src="{{ asset('assets/js/phoenix.js') }}"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/intlTelInput.min.js"
                integrity="sha512-hpJ6J4jGqnovQ5g1J39VtNq1/UPsaFjjR6tuCVVkKtFIx8Uy4GeixgIxHPSG72lRUYx1xg/Em+dsqxvKNwyrSg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="{{ asset('assets/vendors/filepond/filepond-plugin-file-validate-size.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"
                integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
        </script>
        <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
            FilePond.registerPlugin(FilePondPluginImageExifOrientation);
            FilePond.registerPlugin(FilePondPluginImageResize);
            FilePond.registerPlugin(FilePondPluginFileEncode);
            FilePond.registerPlugin(FilePondPluginImageTransform);
            FilePond.registerPlugin(FilePondPluginImageEdit);
            $(function() {
                $('#loader').fadeOut();
            });

            const tooltipTriggerList = document.querySelectorAll('[title]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


            setInterval(() => {
                const tooltipTriggerList = document.querySelectorAll('[title]')
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                    tooltipTriggerEl))
            }, 2000);
        </script>
        <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        @stack('scripts')
</body>

<!-- Mirrored from prium.github.io/phoenix/v1.11.0/documentation/getting-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 11:35:52 GMT -->

</html>
