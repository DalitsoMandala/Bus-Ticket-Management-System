<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->

    <title>@yield('title')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link href="{{ asset('assets/assets/img/mcms.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('assets/assets/img/mcms.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('assets/assets/img/mcms.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/assets/img/favicons/manifest.json') }}" rel="manifest">
    <meta content="{{ asset('assets/assets/img/favicons/mstile-150x150.png') }}" name="msapplication-TileImage">
    <meta content="#ffffff" name="theme-color">
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets/css/theme.min.css') }}" id="style-default" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/assets/css/user.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">
    <link href="{{ asset('vendor/megaphone/css/megaphone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/choices/choices.min.css') }}" rel="stylesheet" />
    <link
        crossorigin="anonymous"href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/css/intlTelInput.css"
        integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
        referrerpolicy="no-referrer" rel="stylesheet" />

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
    </style>

    @livewireStyles

    @vite(['resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="fullscreen" id="loader">
        <span class="loader"></span>
    </div>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">


            @include('layouts.admin-layout')



            <div class="content">
                <div class="pb-5">
                    {{ $slot }}

                </div>

                <footer class="footer position-absolute">
                    <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mt-sm-0 text-900 mb-0 mt-2">{{ config('app.name') }}<span
                                    class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br
                                    class="d-sm-none" />{{ \Carbon\Carbon::now()->format('Y') }}

                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">

                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </main>

    @livewireScripts
    @powerGridScripts

    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/anchor-js/4.3.1/anchor.min.js"
        integrity="sha512-zPB79j2C+3sFS9zcA3vg/z6bVKzJVEyu9pY5w89akQRys76zpAT2t6S3wZKla3QQ14O5l/Yt0RUQ/DHXx82Y5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/is_js/0.9.0/is.min.js"
        integrity="sha512-DvhVUdQWYI9UoF5HGHhl00nbUFcr+j6dGlg/FSrolqR3EridE8CF82nCNAZsE4iAPkw/ws0O7IrZ1jOUuJQXxg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/9514901553.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
        integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"
        integrity="sha512-93wYgwrIFL+b+P3RvYxi/WUFRXXUDSLCT2JQk9zhVGXuS2mHl2axj6d+R6pP+gcU5isMHRj1u0oYE/mWyt/RjA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
        integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.7/dayjs.min.js"
        integrity="sha512-hcV6DX35BKgiTiWYrJgPbu3FxS6CsCjKgmrsPRpUPkXWbvPiKxvSVSdhWX0yXcPctOI2FJ4WP6N1zH+17B/sAA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/assets/js/phoenix.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.0/echarts.min.js"
        integrity="sha512-LYmkblt36DJsQPmCK+cK5A6Gp6uT7fLXQXAX0bMa763tf+DgiiH3+AwhcuGDAxM1SvlimjwKbkMPL3ZM1qLbag=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/vendors/chart/chart.min.js') }}""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.js"
        integrity="sha512-Dqm3h1Y4qiHUjbhxTuBGQsza0Tfppn53SHlu/uj1f+RT+xfShfe7r6czRf5r2NmllO2aKx+tYJgoxboOkn1Scg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.3/leaflet.markercluster.js"
        integrity="sha512-OFs3W4DIZ5ZkrDhBFtsCP6JXtMEDGmhl0QPlmWYBJay40TT1n3gt2Xuw8Pf/iezgW9CdabjkNChRqozl/YADmg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/assets/js/ecommerce-dashboard.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/intlTelInput.min.js"
        integrity="sha512-hpJ6J4jGqnovQ5g1J39VtNq1/UPsaFjjR6tuCVVkKtFIx8Uy4GeixgIxHPSG72lRUYx1xg/Em+dsqxvKNwyrSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.0.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"
        integrity="sha512-03CCNkeosDFN2zCCu4vLpu3pJfZcrL48F3yB8k87ejT+OVMwco7IH3FW02vtbGhdncS6gyYZ/duYaC/K62xQPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"
        integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"
        integrity="sha256-3ytVDiLNNR0KlhglNHqXDFL94uOszVxoQeU7AZEALYo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);

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

    @stack('scripts')

</body>

</html>
