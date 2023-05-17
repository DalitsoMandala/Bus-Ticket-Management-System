<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <link id="style-rtl" type="text/css" href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet">
    <link id="style-default" type="text/css" href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet">
    <link id="user-style-rtl" type="text/css" href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet">
    <link id="user-style-default" type="text/css" href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
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

        .bg-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center center;
        }

        .bg-image-overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .nav li a {
            color: #222834;
        }

        .nav li a:hover {
            color: #3c424d;
        }

        .nav-link.active {
            color: #3c424d;
            /* Replace with your desired color */
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

<body class="antialiased">
    <div class="fullscreen" id="loader">
        <span class="loader"></span>
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="alternate-landing" style="--phoenix-scroll-margin-top: 1.2rem;">
        <div class="bg-white sticky-top landing-navbar" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">

            <header class="p-3 ">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none"
                            href="/">
                            <x-application-logo width="40px" />
                        </a>

                        <ul
                            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-uppercase">
                            <li class="nav-item "><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" href="#"
                                    aria-current="page">Home</a></li>
                            <li class="nav-item "><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3"
                                    href="#about-us">About us</a></li>
                            <li class="nav-item "><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3"
                                    href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3"
                                    href="#contact">Contact</a></li>
                        </ul>
                        @if (Auth::check())
                            <div class="dropdown text-end ">
                                <a class="d-block link-dark text-decoration-none " data-bs-toggle="dropdown"
                                    href="#" aria-expanded="false">
                                    <img class="rounded-circle" src="https://github.com/mdo.png" alt="mdo"
                                        width="32" height="32">
                                </a>
                                <ul class="dropdown-menu   py-0 dropdown-profile shadow border border-300"
                                    style="">
                                    <div class="card position-relative border-0">
                                        <div class="card-body p-0">
                                            <div class="text-center pt-4 pb-3">
                                                <div class="avatar avatar-xl ">
                                                    <img class="rounded-circle" src="https://github.com/mdo.png"
                                                        alt="mdo" width="32" height="32">
                                                </div>
                                                <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                                            </div>

                                        </div>
                                        <hr />
                                        <div class="overflow-auto scrollbar" style="height: 5rem;">
                                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                            class="me-2 text-900"
                                                            data-feather="user"></span><span>Profile</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                                            class="me-2 text-900"
                                                            data-feather="pie-chart"></span>Dashboard</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="card-footer p-0 border-top">

                                            <div class="px-3 py-3"> <a
                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                                            </div>

                                            <form class="d-none" id="logout-form" action="{{ route('logout') }}"
                                                method="POST">
                                                @csrf
                                            </form>

                                        </div>
                                    </div>
                                </ul>
                            @else
                                <div class="text-end d-sm-none d-lg-block">
                                    <a class="btn btn-secondary text-uppercase" href="{{ route('login') }}"> <span
                                            data-feather="user"></span> Login</a>
                                </div>
                        @endif

                    </div>
                </div>
        </div>
        </header>

        </div>

        <section class="pb-8 overflow-hidden bg-image-overlay" id="home"
            style="background-image: url('{{ asset('assets/img/public-bus.jpg') }}'); background-size:cover">
            <div class="hero-header-container-alternate position-relative">
                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8 pt-8 pb-6 position-relative z-index-5 text-center text-lg-start">
                            <h1 class="fs-2 fs-md-4 fs-xl-5 fw-black text-white mb-4"><span class=" me-3"
                                    style="color:#b1b9c2">Discover</span>the art<br />of Seamless Travel with
                                Our Bus Booking Service</h1>

                            <p class="mb-5 pe-xl-10 text-light" style="text-align: justify">Looking to travel by bus?
                                Look no further! Our bus booking website
                                provides you with a hassle-free way to plan and book your bus journeys.
                                Whether you're
                                commuting to work, heading out for a weekend getaway, or embarking on a long-distance
                                adventure, we've got you covered.</p><a
                                class="btn btn-lg btn-secondary rounded-pill me-3"
                                href="{{ route('customer-book-a-bus') }}" role="button">Book
                                a Bus
                            </a><a class="btn btn-link text-light me-2 fs-0 p-0 text-decoration-none"
                                href="{{ route('login') }}" role="button">Sign In or Sign Up<span
                                    class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-13 pb-10" id="about-us">
            <div class="container-small px-lg-7 px-xxl-3">

                <div class="row">
                    <div class="col-lg-6 col-sm-12 ">
                        <div class=" mb-10 mb-md-5">
                            <h5 class="text-secondary mb-3">About Us</h5>
                            <h2 class="mb-3 lh-base">Why choose Us</h2>
                            <p class="mb-0 text-justify">Safety is our top priority, and we ensure that all our partner
                                bus
                                operators
                                comply with the highest industry standards. The buses in our network are well-maintained
                                and
                                equipped with modern amenities to ensure your comfort throughout the journey. We work
                                diligently
                                to maintain strong relationships with our partners, continuously monitoring their
                                performance to
                                ensure a reliable and punctual service.</p>

                        </div>
                    </div>
                    <div class="col-lg-6 d-sm-none d-lg-block rounded-2"
                        style="background-image: url('{{ asset('assets/img/driver.jpg') }}'); background-position:center center; background-size:cover;">
                    </div>
                </div>

            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-14 overflow-x-hidden" id="services">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-5 position-relative">
                    <h5 class="text-secondary mb-3">Our Services</h5>
                    <h2 class="mb-2 lh-base">What do we do</h2>
                </div>
                <div class="row  g-3">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card shadow-lg h-100">
                            <div class="card-body text-center">

                                <div class="d-flex justify-content-center">
                                    <div class="card bg-800 text-white rounded-circle border-0"
                                        style="width: 60px; height: 60px;">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <i class="fas fa-road" style="font-size: 20px;"></i>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="text-secondary mb-5 mt-3">Extensive Route Coverage</h4>
                                <p class="text-justify mb-3">
                                    We offer an extensive network of bus routes, covering numerous cities, towns, and
                                    popular tourist destinations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="card shadow-lg h-100">
                            <div class="card-body text-center">

                                <div class="d-flex justify-content-center">
                                    <div class="card bg-800 text-white rounded-circle border-0"
                                        style="width: 60px; height: 60px;">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <i class="fas fa-ticket" style="font-size: 20px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-secondary mb-5 mt-3">Flexible Booking Options</h4>
                                <p class="text-justify ">
                                    We understand that travel plans can change, and we provide flexible booking options
                                    to accommodate your needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="card shadow-lg h-100">

                            <div class="card-body text-center">

                                <div class="d-flex justify-content-center">
                                    <div class="card bg-800 text-white rounded-circle border-0"
                                        style="width: 60px; height: 60px;">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <i class="fas fa-bus" style="font-size: 20px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-secondary mb-5 mt-3">Real-time Seat Availability</h4>
                                <p class="text-justify">
                                    Checking seat availability is quick and easy with our real-time updates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-10 pb-xl-14">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-7">
                    <h5 class="text-secondary mb-3">Contact</h5>
                    <h2 class="mb-2">Connect with Us</h2>
                </div>
                <div class="row mb-3">
                    <div class="col">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30980.30878226589!2d33.72955050143665!3d-13.926505230510838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d45fc22c1c7d%3A0x71a06a86703fefbb!2sArea%2049%2C%20Lilongwe!5e0!3m2!1sen!2smw!4v1684311362054!5m2!1sen!2smw"
                            style="border:0;" width="100%" height="450" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row g-5 g-lg-5">
                    <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
                        <h3 class="mb-3">Stay connected</h3>
                        <p class="mb-5">Stay connected with our Help Center; We are always available for your
                            necessities at all times.</p>
                        <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                            <div class="d-md-flex align-items-center">
                                <div class="shadow-info"><span
                                        class="fas fa-phone text-secondary light fs-2 z-index-1 ms-2"></span></div>
                                <div class="flex-1 ms-3"><a class="link-900"
                                        href="tel:+265997496637">(265)997496637</a></div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <div class=" shadow-info"><span
                                        class="fa-solid fa-envelope text-secondary light fs-2 z-index-1 ms-2"></span>
                                </div>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900"
                                        href="mailto:dalitso.mandala.price@gmail.com">dalitso.mandala.price@gmail.com</a>
                                </div>
                            </div>
                            <div class="mb-6 d-md-flex align-items-center">
                                <div class="shadow-info"><span
                                        class="fas fa-location-dot text-secondary light fs-2 z-index-1 ms-2"></span>
                                </div>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="#!">Area 49
                                        proper sector 4 Majombo Street </a></div>
                            </div>
                            <div class="d-flex"><a href="#!"><span
                                        class="fa-brands fa-facebook fs-2 text-secondary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter fs-2 text-secondary me-3"></span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h3 class="mb-3">Drop us a line</h3>
                        <p class="mb-7">If you have any query or suggestion , we are open to learn from you, Lets
                            talk, reach us anytime.</p>
                        <form class="row g-4">
                            <div class="col-12"><input class="form-control bg-white" name="name" type="text"
                                    placeholder="Name" required="required" /></div>
                            <div class="col-12"><input class="form-control bg-white" name="email" type="email"
                                    placeholder="Email" required="required" /></div>
                            <div class="col-12">
                                <textarea class="form-control bg-white" name="message" rows="6" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="col-12 d-grid"><button class="btn btn-outline-secondary"
                                    type="submit">Submit</button></div>
                            <div class="feedback"></div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-1100 dark__bg-1000">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row gx-xxl-8 gy-5 align-items-center mb-5">
                    <div class="col-xl-auto text-center"><a href="#"><img <x-application-logo height="48" />

                    </div>
                    <div class="col-xl-auto flex-1">
                        <ul
                            class="list-unstyled d-flex justify-content-center flex-wrap mb-0 border-end-xl border-dashed border-800 gap-3 gap-xl-8 pe-xl-5 pe-xxl-8 w-75 w-md-100 mx-auto">
                            <li><a class="text-300 dark__text-300" href="#home">Home</a></li>
                            <li><a class="text-300 dark__text-300" href="#about-us">About Us</a></li>
                            <li><a class="text-300 dark__text-300" href="#services">Services</a></li>
                            <li><a class="text-300 dark__text-300" href="#contact">Contact</a></li>
                            <li><a class="text-300 dark__text-300" href="#login">Login</a></li>

                        </ul>
                    </div>
                    <div class="col-xl-auto">
                        <div class="d-flex align-items-center justify-content-center gap-8"><a
                                class="text-white dark__text-white" href="#!"> <span
                                    class="fa-brands fa-facebook"></span></a><a class="text-white dark__text-white"
                                href="#!"> <span class="fa-brands fa-twitter"></span></a></div>
                    </div>
                </div>
                <hr class="text-800" />
                <div class="d-sm-flex flex-between-center text-center">
                    <p class="text-600 mb-0">Copyright © {{ config('app.name') }}</p>
                    <p class="text-600 mb-0">Developed by Dalitso Mandala</p>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @livewireScripts
    @powerGridScripts

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
    <script src="{{ asset('assets/vendors/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/vendors/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('assets/vendors/filepond/filepond-plugin-file-validate-size.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    @stack('scripts')
</body>

</html>
