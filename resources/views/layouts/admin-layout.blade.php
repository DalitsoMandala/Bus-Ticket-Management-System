<nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content overflow scrollbar">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages--><a aria-controls="dashboard" aria-expanded="true"
                        class="nav-link dropdown-indicator" data-bs-toggle="collapse" href="#dashboard" role="button">
                        <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon d-flex flex-center"><span
                                    class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span
                                    data-feather="cast"></span></span><span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                    <ul class="nav collapse parent show" id="dashboard">
                        <li class="nav-item"><a aria-expanded="false"
                                class="nav-link {{ request()->routeIs('admin-dashboard') ? 'active' : '' }}"
                                data-bs-toggle="" href="{{ route('admin-dashboard') }}">

                                <div class="d-flex align-items-center"><span class="nav-link-text">Overview</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a aria-expanded="false"
                                class="nav-link {{ request()->routeIs('admin-profile') ? 'active' : '' }}"
                                data-bs-toggle="" href="{{ route('admin-profile') }}">

                                <div class="d-flex align-items-center"><span class="nav-link-text">Profile
                                        Settings</span></div>
                            </a><!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item d-none">
                    <!-- label-->
                    <p class="navbar-vertical-label">PAGES</p><!-- parent pages--><a aria-controls="e-commerce"
                        aria-expanded="false" class="nav-link dropdown-indicator" data-bs-toggle="collapse"
                        href="#e-commerce" role="button">
                        <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon d-flex flex-center"><span
                                    class="fas fa-caret-right fs-0"></span></div><i aria-hidden="true"
                                class="fa fa-folder-open me-2"></i></span><span class="nav-link-text">Manage
                                Scores</span>
                        </div>
                    </a>

                    <ul class="nav collapse parent" id="e-commerce">
                        <li class="nav-item"><a aria-expanded="false" class="nav-link " data-bs-toggle=""
                                href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text"> <span
                                            class="nav-link-icon"><i class="fa-solid fa-check"></i>
                                            Add marks</span></div>

                            </a><!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a aria-expanded="false" class="nav-link " data-bs-toggle=""
                                href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text"> <span
                                            class="nav-link-icon"><i class="fa-solid fa-check"></i>
                                            Student marks</span></div>

                            </a><!-- more inner pages-->
                        </li>

                    </ul>
                </li>


                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-schedules') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-schedules') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i> Manage Schedules</span></div>
                    </a>

                </li>
                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-routes') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-routes') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i> Manage Routes</span></div>
                    </a>

                </li>

                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-buses') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-buses') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i>
                                Manage Buses</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-seats') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-seats') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i>
                                Manage Seats</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-customers') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-customers') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i>
                                Manage Customers</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-bookings') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-bookings') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i>
                                Manage Bookings</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a aria-expanded="false"
                        class="nav-link {{ request()->routeIs('admin-payments') ? 'active' : '' }}" data-bs-toggle=""
                        href="{{ route('admin-payments') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i aria-hidden="true"
                                    class="fa fa-folder-open me-2"></i>
                                Manage Payments</span></div>
                    </a><!-- more inner pages-->
                </li>



            </ul>
        </div>
        <div class="navbar-vertical-footer"><a class="btn btn-link fw-semi-bold d-flex ps-0 border-0"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><span
                    class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Sign out</span></a></div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-top navbar-expand vertical-navbar">
    <div class="navbar-logo">
        <button aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"
            class="btn navbar-toggler navbar-toggler-humburger-icon" data-bs-target="#navbarVerticalCollapse"
            data-bs-toggle="collapse" type="button"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{ route('login') }}">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img alt="phoenix"
                        src="{{ asset('assets/assets/img/btms.png') }}" width="32" />

                    <p class="logo-text ms-2 d-none d-sm-block text-wrap fs-0">{{ config('app.name') }}
                    </p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <div class="search-box d-none d-lg-none" style="width:25rem;">
            <form class="position-relative" data-bs-display="static" data-bs-toggle="search">
                <x-text-inputaria-label="Search" placeholder="Search..." type="search" />

            </form>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">

            <li class="nav-item dropdown d-none"><a aria-expanded="false" aria-haspopup="true"
                    class="nav-link lh-1 ms-5 px-0" data-bs-toggle="dropdown" href="#!" id="navbarDropdownUser"
                    role="button">
                    <span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span>
                </a>
                <div aria-labelledby="navbarDropdownUser"
                    class="dropdown-menu dropdown-menu-end dropdown-profile border-300 border py-0 shadow">
                    <div class="card position-relative border-0 bg-white">
                        <div class="card-body scrollbar overflow-auto p-0">
                            <div
                                class="d-flex align-items-center justify-content-between border-300 px-lg-1 notification-card border-top bg-soft mt-1 py-3 px-1">
                                <div class="d-flex">
                                    <div class="avatar avatar-xl me-3 mb-5">
                                        <img alt="" class="rounded-circle" src="" />
                                    </div>
                                    <div class="me-3 mt-2 flex-1">
                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                        <p class="fs--1 text-1000"><span class='me-1'>💬</span>Mentioned
                                            you in a comment<span class="fw-bold"> &quot;Well
                                                done! Proud of you ❤️ &quot; </span><span
                                                class="ms-2 text-400 fw-bold fs--2">10M</span>
                                        </p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                                class="fw-bold">10:41 AM </span>August
                                            7,2021</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer border-top p-0">

                            <div class="px-3 py-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="#!">
                                    </span>Show all notifications</a></div>

                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                    class="nav-link lh-1 ms-5 px-0" data-bs-toggle="dropdown" href="#!" id="navbarDropdownUser"
                    role="button">
                    <div class="avatar avatar-l">
                        @if (!empty(Auth::user()->lecturer_profile->profile_image))
                            <img alt="profile-image" class="rounded-circle"
                                src="/storage/{{ Auth::user()->lecturer_profile->profile_image }}" />
                        @else
                            <img alt="profile-image" class="rounded-circle"
                                src="{{ asset('assets/assets/img/blank-image.png') }}" />
                        @endif

                    </div>
                </a>
                <div aria-labelledby="navbarDropdownUser"
                    class="dropdown-menu dropdown-menu-end dropdown-profile border-300 border py-0 shadow">
                    <div class="card position-relative border-0 bg-white">
                        <div class="card-body p-0">
                            <div class="pt-4 pb-3 text-center">
                                <div class="avatar avatar-xl">
                                    @if (!empty(Auth::user()->lecturer_profile->profile_image))
                                        <img alt="profile-image" class="rounded-circle"
                                            src="/storage/{{ Auth::user()->lecturer_profile->profile_image }}" />
                                    @else
                                        <img alt="profile-image" class="rounded-circle"
                                            src="{{ asset('assets/assets/img/blank-image.png') }}" />
                                    @endif

                                </div>
                                <h6 class="mt-2">{{ Auth::user()->name }}</h6>
                            </div>
                        </div>
                        <div class="scrollbar overflow-auto" style="height: 5rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin-profile') }}">
                                        <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin-dashboard') }}">
                                        <span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>

                            </ul>
                        </div>
                        <div class="card-footer border-top p-0">

                            <div class="px-3 py-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>

                            <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
