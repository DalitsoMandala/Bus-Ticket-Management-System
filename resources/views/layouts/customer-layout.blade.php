<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
        var navbarStyle = window.config.config.phoenixNavbarStyle;
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" data-bs-toggle="collapse"
                            href="#home" role="button" aria-expanded="false" aria-controls="home">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                <span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span
                                    class="nav-link-text">Home</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" id="home" data-bs-parent="#navbarVerticalCollapse">
                                <li class="collapsed-nav-item-title d-none">Home</li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('admin-dashboard') ? 'active' : '' }}"
                                        data-bs-toggle="" href="{{ route('admin-dashboard') }}" aria-expanded="false">

                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Overview</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('admin-profile') ? 'active' : '' }}"
                                        data-bs-toggle="" href="{{ route('admin-profile') }}" aria-expanded="false">

                                        <div class="d-flex align-items-center"><span class="nav-link-text">Profile
                                                Settings</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Pages</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages-->

                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-schedules') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-schedules') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i> Manage Schedules</span></div>
                    </a>

                </li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-routes') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-routes') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i> Manage Routes</span></div>
                    </a>

                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-buses') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-buses') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i>
                                Manage Buses</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-seats') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-seats') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i>
                                Manage Seats</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-customers') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-customers') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i>
                                Manage Customers</span></div>
                    </a><!-- more inner pages-->
                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-bookings') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-bookings') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i>
                                Manage Bookings</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin-payments') ? 'active' : '' }}"
                        data-bs-toggle="" href="{{ route('admin-payments') }}" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text"> <i
                                    class="fa fa-folder-open me-2" aria-hidden="true"></i>
                                Manage Payments</span></div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer d-none"><button
            class="border-0 btn navbar-vertical-toggle fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span
                class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed
                View</span></button></div>
</nav>
<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" type="button"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.11.0/index.html">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                            width="27" />
                        <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
            style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                    aria-label="Search" placeholder="Search..." />
                <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="shadow-none cursor-pointer btn-close position-absolute end-0 top-50 translate-middle"
                data-bs-dismiss="search"><button class="p-0 btn btn-link btn-close-falcon"
                    aria-label="Close"></button></div>
            <div class="py-0 overflow-hidden border dropdown-menu border-300 font-base start-0 w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                    <div class="pb-3 list">
                        <h6 class="py-2 dropdown-header text-1000 fs--2">24 <span class="text-500">results</span></h6>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Recently Searched </h6>
                        <div class="py-2"><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                                </div>
                            </a>
                            <a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"> <span
                                            class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span>
                                        MacBook Air - 13″</div>
                                </div>
                            </a>
                        </div>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Products</h6>
                        <div class="py-2"><a class="py-2 dropdown-item d-flex align-items-center"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                        src="../assets/img/products/60x60/3.png" alt="" /></div>
                                <div class="flex-1">
                                    <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                    <p class="mb-0 fs--2 d-flex text-700"><span class="fw-medium text-600">8GB
                                            Memory - 1.6GHz - 128GB
                                            Storage</span></p>
                                </div>
                            </a>
                            <a class="py-2 dropdown-item d-flex align-items-center"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                        src="../assets/img/products/60x60/3.png" alt="" /></div>
                                <div class="flex-1">
                                    <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                    <p class="mb-0 fs--2 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep
                                            at 12:30 PM</span></p>
                                </div>
                            </a>
                        </div>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Quick Links</h6>
                        <div class="py-2"><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                                            data-fa-transform="shrink-2"></span> Support MacBook House
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                </div>
                            </a>
                        </div>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Files</h6>
                        <div class="py-2"><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"><span
                                            class="fa-solid fa-file-zipper text-900"
                                            data-fa-transform="shrink-2"></span> Library MacBook
                                        folder.rar</div>
                                </div>
                            </a>
                            <a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"> <span
                                            class="fa-solid fa-file-lines text-900"
                                            data-fa-transform="shrink-2"></span> Feature MacBook
                                        extensions.txt</div>
                                </div>
                            </a>
                            <a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                </div>
                            </a>
                        </div>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Members</h6>
                        <div class="py-2"><a class="py-2 dropdown-item d-flex align-items-center"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="avatar avatar-l status-online me-2 text-900">
                                    <img class="rounded-circle "
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/10.webp"
                                        alt="" />
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                    <p class="mb-0 fs--2 d-flex text-700">anna@technext.it</p>
                                </div>
                            </a>
                            <a class="py-2 dropdown-item d-flex align-items-center"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="avatar avatar-l me-2 text-900">
                                    <img class="rounded-circle "
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/12.webp"
                                        alt="" />
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-0 text-1000 title">John Smith</h6>
                                    <p class="mb-0 fs--2 d-flex text-700">smith@technext.it</p>
                                </div>
                            </a>
                        </div>
                        <hr class="my-0 text-200" />
                        <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                            Related Searches</h6>
                        <div class="py-2"><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"><span
                                            class="fa-brands fa-firefox-browser text-900"
                                            data-fa-transform="shrink-2"></span> Search in the Web MacBook
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center">
                                    <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="flex-row navbar-nav navbar-nav-icons">

            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                        style="height:20px;width:20px;"></span></a>
                <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                    <div class="border-0 card position-relative">
                        <div class="p-2 card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 text-black">Notificatons</h5><button
                                    class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                    read</button>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="scrollbar-overlay" style="height: 27rem;">
                                <div class="border-300">
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jessie Samson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>💬</span>Mentioned you in
                                                        a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span>
                                                    </div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jane Foster</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>📅</span>Created an
                                                        event.<span class="ms-2 text-400 fw-bold fs--2">20m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jessie Samson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-300">
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>💬</span>Mentioned you in
                                                        a comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Herman Carter</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Benjamin Button</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 border-0 card-footer border-top">
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                    history</a></div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#!" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle "
                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                            alt="" />
                    </div>
                </a>
                <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="border-0 card position-relative">
                        <div class="p-0 card-body">
                            <div class="pt-4 pb-3 text-center">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle "
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/72x72/57.webp"
                                        alt="" />
                                </div>
                                <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                            </div>

                        </div>
                        <hr />
                        <div class="overflow-auto scrollbar" style="height: 5rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                                </li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"><span
                                            class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                                </li>

                            </ul>
                        </div>
                        <div class="p-0 card-footer border-top">
                            <ul class="my-3 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="user-plus"></span>Add
                                        another customer</a></li>
                            </ul>
                            <hr />
                            <div class="px-3 pb-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>

                            <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" type="button"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand" href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix
                <span class="text-1000 d-none d-sm-inline">slim</span></a>
        </div>
        <ul class="flex-row navbar-nav navbar-nav-icons">
            {{-- <li class="nav-item">
                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        data-theme-control="phoenixTheme" type="checkbox" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-toggle="tooltip"
                        data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                            class="fs--1 fw-bold">Dark</span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-toggle="tooltip"
                        data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                            class="fs--1 fw-bold">Light</span></label>
                </div>
            </li> --}}
            <li class="nav-item d-none"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBoxModal"
                    href="#"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                    <div class="border-0 card position-relative">
                        <div class="p-2 card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 text-black">Notificatons</h5><button
                                    class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                    read</button>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="scrollbar-overlay" style="height: 27rem;">
                                <div class="border-300">
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jessie Samson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>💬</span>Mentioned you in
                                                        a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span>
                                                    </div>
                                                </div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jane Foster</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>📅</span>Created an
                                                        event.<span class="ms-2 text-400 fw-bold fs--2">20m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Jessie Samson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-300">
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>💬</span>Mentioned you in
                                                        a comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Herman Carter</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                        alt="" /></div>
                                                <div class="flex-1 me-sm-3">
                                                    <h4 class="text-black fs--1">Benjamin Button</h4>
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal">
                                                        <span class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021
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
                                                        class="dropdown-item" href="#!">Mark as
                                                        unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 border-0 card-footer border-top">
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                    history</a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="currentColor">
                        </circle>
                        <circle cx="2" cy="8" r="2" fill="currentColor">
                        </circle>
                        <circle cx="2" cy="14" r="2" fill="currentColor">
                        </circle>
                        <circle cx="8" cy="8" r="2" fill="currentColor">
                        </circle>
                        <circle cx="8" cy="14" r="2" fill="currentColor">
                        </circle>
                        <circle cx="14" cy="8" r="2" fill="currentColor">
                        </circle>
                        <circle cx="14" cy="14" r="2" fill="currentColor">
                        </circle>
                        <circle cx="8" cy="2" r="2" fill="currentColor">
                        </circle>
                        <circle cx="14" cy="2" r="2" fill="currentColor">
                        </circle>
                    </svg></a>
                <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-nide-dots border-300"
                    aria-labelledby="navbarDropdownNindeDots">
                    <div class="bg-white border-0 card position-relative">
                        <div class="px-3 pt-3 pb-0 overflow-auto card-body scrollbar" style="height: 20rem;">
                            <div class="text-center row align-items-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/behance.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Behance
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-cloud.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Cloud</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/slack.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/gitlab.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Gitlab
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/bitbucket.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">BitBucket
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-drive.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Drive</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/trello.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Trello
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/figma.webp"
                                            alt="" width="20" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Figma</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/twitter.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Twitter
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/pinterest.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Pinterest
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/ln.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Linkedin
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-maps.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Maps</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-photos.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Photos
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                        href="#!"><img
                                            src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/spotify.webp"
                                            alt="" width="30" />
                                        <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Spotify
                                        </p>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#!" role="button"
                    aria-haspopup="true" aria-expanded="false">Olivia
                    <span class="fa-solid fa-chevron-down fs--2"></span></a>
                <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="border-0 card position-relative">
                        <div class="p-0 card-body">
                            <div class="pt-4 pb-3 text-center">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle "
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/72x72/57.webp"
                                        alt="" />
                                </div>
                                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                            </div>
                            <div class="mx-3 mb-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                    type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                                </li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"><span
                                            class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                                </li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                        Activity</a></li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="settings"></span>Settings &amp;
                                        Privacy </a>
                                </li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="help-circle"></span>Help
                                        Center</a></li>
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                            </ul>
                        </div>
                        <div class="p-0 card-footer border-top">
                            <ul class="my-3 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900" data-feather="user-plus"></span>Add
                                        another account</a></li>
                            </ul>
                            <hr />
                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="#!"> <span class="me-2" data-feather="log-out">
                                    </span>Sign out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                    href="#!">Privacy policy</a>&bull;<a class="mx-1 text-600"
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
            data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" type="button"
            aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{ route('home') }}">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <x-application-logo width="30" />

                </div>
            </div>
        </a>
    </div>
    <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="{{ route('home') }}">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="home"></span>Home</div>
                        </a></li>
                    <li><a class="dropdown-item" href="{{ route('customer-dashboard') }}">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="box"></span>Dashboard</div>
                        </a></li>
                    <li><a class="dropdown-item" href="{{ route('customer-profile') }}">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="user-check"></span>Profile</div>
                        </a></li>

                </ul>
            </li>

            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">

                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="archive"></span>Booking</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('customer-book-a-bus') }}">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Book a bus
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route('customer-bookings') }}">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>My bookings
                                    </div>
                                </a></li>
                        </ul>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('customer-payments') }}">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="credit-card"></span>Payments</div>
                        </a></li>
                    <li><a class="dropdown-item" href="{{ route('customer-queries') }}">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="alert-circle"></span>Queries</div>
                        </a></li>

                </ul>
            </li>

        </ul>
    </div>
    <ul class="flex-row navbar-nav navbar-nav-icons">
        {{-- <li class="nav-item">
            <div class="px-2 theme-control-toggle fa-icon-wait"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    data-theme-control="phoenixTheme" type="checkbox" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span class="icon"
                        data-feather="moon"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span class="icon"
                        data-feather="sun"></span></label></div>
        </li> --}}
        <li class="nav-item d-none"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBoxModal"
                href="#"><span data-feather="search"
                    style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"
                role="button" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                    style="height:20px;width:20px;"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="border-0 card position-relative">
                    <div class="p-2 card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 text-black">Notificatons</h5><button
                                class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <div class="scrollbar-overlay" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jane Foster</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>📅</span>Created an event.<span
                                                        class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Herman Carter</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                        PM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Benjamin Button</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 border-0 card-footer border-top">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                history</a></div>
                    </div>
                </div>
            </div>
        </li>
  <livewire:customer.pic-component />

    </ul>
</nav>
<nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
    style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
            data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" type="button"
            aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand" href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix
            <span class="text-1000 d-none d-sm-inline">slim</span></a>
    </div>
    <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/index.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="shopping-cart"></span>E commerce</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/dashboard/project-management.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clipboard"></span>Project management</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="phone"></span>CRM</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/feed.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="share-2"></span>Social feed</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="shopping-cart"></span>E
                                    commerce</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Admin</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/add-product.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                product</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/products.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customers.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customers</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customer-details.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customer details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/orders.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Customer</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/homepage.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Homepage</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products filter</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/checkout.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Checkout</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/shipping-info.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Shipping info</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/favourite-stores.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Favourite stores</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/wishlist.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Wishlist</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/order-tracking.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                tracking</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/analytics.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deals.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deal-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/leads.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/lead-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/add-contact.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                        contact</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="clipboard"></span>Project
                                    management</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/create-new.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-list-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        list view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-card-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        card view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-board-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        board view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/todo-list.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        details</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/chat.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="message-square"></span>Chat</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="mail"></span>Email</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/inbox.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/email-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                        detail</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/compose.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="bookmark"></span>Events</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/create-an-event.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                        event</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/event-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                        detail</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="trello"></span>Kanban</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/kanban.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/create-kanban-board.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                        board</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="share-2"></span>Social</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/profile.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/settings.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="calendar"></span>Calendar</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="compass"></span>Starter</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="help-circle"></span>Faq</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="globe"></span>Landing</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/default.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/alternate.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-column.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        column</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-grid.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        grid</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="bell"></span>Notifications</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="users"></span>Members</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clock"></span>Timeline</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/404.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/500.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Simple</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Split</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Card</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="layout"></span>Layouts</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/vertical-sidenav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        sidenav</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/sidenav-collapse.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                        collapse</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/darknav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/topnav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/horizontal-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                        slim</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                        <div class="px-3 pt-4 pb-3 img-dropdown">
                            <div class="row gx-4 gy-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Forms</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/form-control.html">Form
                                        control</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/input-group.html">Input
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/select.html">Select</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/checks.html">Checks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/range.html">Range</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/floating-labels.html">Floating
                                        labels</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/layout.html">Layout</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/advance-select.html">Advance
                                        select</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/date-picker.html">Date
                                        picker</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/editor.html">Editor</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/file-uploader.html">File
                                        uploader</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/rating.html">Rating</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/emoji-button.html">Emoji
                                        button</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/validation.html">Validation</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/wizard.html">Wizard</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="grid"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Icons</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/feather.html">Feather</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/font-awesome.html">Font
                                        awesome</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/unicons.html">Unicons</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2"
                                            data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">ECharts</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/line-charts.html">Line
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/bar-charts.html">Bar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/candlestick-charts.html">Candlestick
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/geo-map.html">Geo
                                        map</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/scatter-charts.html">Scatter
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/pie-charts.html">Pie
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/gauge-chart.html">Gauge
                                        chart</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/radar-charts.html">Radar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/heatmap-charts.html">Heatmap
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/how-to-use.html">How
                                        to use</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Components</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/accordion.html">Accordion</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/avatar.html">Avatar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/alerts.html">Alerts</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/badge.html">Badge</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/button.html">Buttons</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/calendar.html">Calendar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/card.html">Card</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/swiper.html">Swiper</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/collapse.html">Collapse</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/dropdown.html">Dropdown</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/list-group.html">List
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/modal.html">Modals</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/offcanvas.html">Offcanvas</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/progress-bar.html">Progress
                                        bar</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/placeholder.html">Placeholder</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/pagination.html">Pagination</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/popovers.html">Popovers</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/scrollspy.html">Scrollspy</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/spinners.html">Spinners</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/toast.html">Toast</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/tooltips.html">Tooltips</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/chat-widget.html">Chat
                                        widget</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Tables</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                        Select</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="tool"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Utilities</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/background.html">Background</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/borders.html">Borders</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/colors.html">Colors</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/display.html">Display</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/flex.html">Flex</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/stacks.html">Stacks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/float.html">Float</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/grid.html">Grid</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/interactions.html">Interactions</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/opacity.html">Opacity</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/overflow.html">Overflow</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/position.html">Position</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/shadows.html">Shadows</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/sizing.html">Sizing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/spacing.html">Spacing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/typography.html">Typography</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/vertical-align.html">Vertical
                                        align</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/visibility.html">Visibility</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span
                        class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item active" href="getting-started.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="life-buoy"></span>Getting started</div>
                        </a></li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                            id="customization" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="settings"></span>Customization</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="customization/configuration.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/styling.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/plugin.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="table"></span>Layouts doc</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="layouts/vertical-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/horizontal-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/combo-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                        navbar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="gulp.html">
                            <div class="dropdown-item-wrapper"><span
                                    class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                        </a></li>
                    <li><a class="dropdown-item" href="design-file.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="figma"></span>Design file</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/changelog.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="git-merge"></span>Changelog</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/showcase.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="monitor"></span>Showcase</div>
                        </a></li>
                </ul>
            </li>
        </ul>
    </div>
    <ul class="flex-row navbar-nav navbar-nav-icons">
        {{-- <li class="nav-item d-none">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    data-theme-control="phoenixTheme" type="checkbox" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                        class="fs--1 fw-bold">Dark</span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                        class="fs--1 fw-bold">Light</span></label></div>
        </li> --}}
        <li class="nav-item d-none"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBoxModal"
                href="#"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="border-0 card position-relative">
                    <div class="p-2 card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 text-black">Notificatons</h5><button
                                class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <div class="scrollbar-overlay" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jane Foster</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>📅</span>Created an event.<span
                                                        class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Herman Carter</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                        PM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Benjamin Button</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 border-0 card-footer border-top">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor">
                    </circle>
                </svg></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-nide-dots border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="bg-white border-0 card position-relative">
                    <div class="px-3 pt-3 pb-0 overflow-auto card-body scrollbar" style="height: 20rem;">
                        <div class="text-center row align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/behance.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-cloud.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/slack.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/gitlab.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/bitbucket.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-drive.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/trello.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/figma.webp"
                                        alt="" width="20" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/twitter.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/pinterest.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/ln.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-maps.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-photos.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/spotify.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#!" role="button"
                aria-haspopup="true" aria-expanded="false">Olivia <span
                    class="fa-solid fa-chevron-down fs--2"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="border-0 card position-relative">
                    <div class="p-0 card-body">
                        <div class="pt-4 pb-3 text-center">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle "
                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/72x72/57.webp"
                                    alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mx-3 mb-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                type="text" placeholder="Update your status" />
                        </div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="pb-1 mb-2 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                            </li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"><span
                                        class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                    Activity</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="settings"></span>Settings
                                    &amp; Privacy </a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                    Center</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="globe"></span>Language</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-0 card-footer border-top">
                        <ul class="my-3 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user-plus"></span>Add
                                    another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                href="#!"> <span class="me-2" data-feather="log-out">
                                </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                href="#!">Privacy policy</a>&bull;<a class="mx-1 text-600"
                                href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
    data-move-target="#navbarVerticalNav" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" type="button"
            aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.11.0/index.html">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                        width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
            </div>
        </a>
    </div>
    <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        {{-- <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/index.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="shopping-cart"></span>E commerce</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/dashboard/project-management.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clipboard"></span>Project management</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="phone"></span>CRM</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/feed.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="share-2"></span>Social feed</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="shopping-cart"></span>E
                                    commerce</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Admin</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/add-product.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                product</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/products.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customers.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customers</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customer-details.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customer details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/orders.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Customer</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/homepage.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Homepage</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products filter</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/checkout.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Checkout</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/shipping-info.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Shipping info</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/favourite-stores.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Favourite stores</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/wishlist.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Wishlist</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/order-tracking.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                tracking</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/analytics.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deals.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deal-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/leads.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/lead-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/add-contact.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                        contact</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="clipboard"></span>Project
                                    management</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/create-new.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-list-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        list view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-card-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        card view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-board-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        board view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/todo-list.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        details</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/chat.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="message-square"></span>Chat</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="mail"></span>Email</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/inbox.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/email-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                        detail</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/compose.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="bookmark"></span>Events</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/create-an-event.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                        event</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/event-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                        detail</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="trello"></span>Kanban</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/kanban.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/create-kanban-board.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                        board</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="share-2"></span>Social</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/profile.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/settings.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="calendar"></span>Calendar</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="compass"></span>Starter</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="help-circle"></span>Faq</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="globe"></span>Landing</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/default.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/alternate.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-column.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        column</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-grid.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        grid</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="bell"></span>Notifications</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="users"></span>Members</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clock"></span>Timeline</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/404.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/500.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Simple</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Split</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Card</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="layout"></span>Layouts</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/vertical-sidenav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        sidenav</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/sidenav-collapse.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                        collapse</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/darknav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/topnav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/horizontal-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                        slim</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                        <div class="px-3 pt-4 pb-3 img-dropdown">
                            <div class="row gx-4 gy-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Forms</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/form-control.html">Form
                                        control</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/input-group.html">Input
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/select.html">Select</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/checks.html">Checks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/range.html">Range</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/floating-labels.html">Floating
                                        labels</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/layout.html">Layout</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/advance-select.html">Advance
                                        select</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/date-picker.html">Date
                                        picker</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/editor.html">Editor</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/file-uploader.html">File
                                        uploader</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/rating.html">Rating</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/emoji-button.html">Emoji
                                        button</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/validation.html">Validation</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/wizard.html">Wizard</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="grid"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Icons</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/feather.html">Feather</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/font-awesome.html">Font
                                        awesome</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/unicons.html">Unicons</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2"
                                            data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">ECharts</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/line-charts.html">Line
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/bar-charts.html">Bar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/candlestick-charts.html">Candlestick
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/geo-map.html">Geo
                                        map</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/scatter-charts.html">Scatter
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/pie-charts.html">Pie
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/gauge-chart.html">Gauge
                                        chart</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/radar-charts.html">Radar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/heatmap-charts.html">Heatmap
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/how-to-use.html">How
                                        to use</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Components</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/accordion.html">Accordion</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/avatar.html">Avatar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/alerts.html">Alerts</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/badge.html">Badge</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/button.html">Buttons</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/calendar.html">Calendar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/card.html">Card</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/swiper.html">Swiper</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/collapse.html">Collapse</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/dropdown.html">Dropdown</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/list-group.html">List
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/modal.html">Modals</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/offcanvas.html">Offcanvas</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/progress-bar.html">Progress
                                        bar</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/placeholder.html">Placeholder</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/pagination.html">Pagination</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/popovers.html">Popovers</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/scrollspy.html">Scrollspy</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/spinners.html">Spinners</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/toast.html">Toast</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/tooltips.html">Tooltips</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/chat-widget.html">Chat
                                        widget</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Tables</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                        Select</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="tool"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Utilities</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/background.html">Background</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/borders.html">Borders</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/colors.html">Colors</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/display.html">Display</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/flex.html">Flex</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/stacks.html">Stacks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/float.html">Float</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/grid.html">Grid</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/interactions.html">Interactions</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/opacity.html">Opacity</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/overflow.html">Overflow</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/position.html">Position</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/shadows.html">Shadows</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/sizing.html">Sizing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/spacing.html">Spacing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/typography.html">Typography</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/vertical-align.html">Vertical
                                        align</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/visibility.html">Visibility</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span
                        class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item active" href="getting-started.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="life-buoy"></span>Getting started</div>
                        </a></li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                            id="customization" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="settings"></span>Customization</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="customization/configuration.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/styling.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/plugin.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="table"></span>Layouts doc</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="layouts/vertical-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/horizontal-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/combo-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                        navbar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="gulp.html">
                            <div class="dropdown-item-wrapper"><span
                                    class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                        </a></li>
                    <li><a class="dropdown-item" href="design-file.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="figma"></span>Design file</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/changelog.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="git-merge"></span>Changelog</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/showcase.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="monitor"></span>Showcase</div>
                        </a></li>
                </ul>
            </li>
        </ul> --}}
    </div>
    <ul class="flex-row navbar-nav navbar-nav-icons">
        {{-- <li class="nav-item">
            <div class="px-2 theme-control-toggle fa-icon-wait"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    data-theme-control="phoenixTheme" type="checkbox" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span class="icon"
                        data-feather="moon"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span class="icon"
                        data-feather="sun"></span></label></div>
        </li> --}}
        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBoxModal"
                href="#"><span data-feather="search"
                    style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"
                role="button" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                    style="height:20px;width:20px;"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="border-0 card position-relative">
                    <div class="p-2 card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 text-black">Notificatons</h5><button
                                class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <div class="scrollbar-overlay" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jane Foster</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>📅</span>Created an event.<span
                                                        class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Herman Carter</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                        PM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Benjamin Button</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 border-0 card-footer border-top">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor">
                    </circle>
                </svg></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-nide-dots border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="bg-white border-0 card position-relative">
                    <div class="px-3 pt-3 pb-0 overflow-auto card-body scrollbar" style="height: 20rem;">
                        <div class="text-center row align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/behance.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-cloud.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/slack.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/gitlab.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/bitbucket.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-drive.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/trello.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/figma.webp"
                                        alt="" width="20" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/twitter.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/pinterest.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/ln.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-maps.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-photos.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/spotify.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#!" role="button"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle "
                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                        alt="" />
                </div>
            </a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="border-0 card position-relative">
                    <div class="p-0 card-body">
                        <div class="pt-4 pb-3 text-center">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle "
                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/72x72/57.webp"
                                    alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mx-3 mb-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                type="text" placeholder="Update your status" />
                        </div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="pb-1 mb-2 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                            </li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"><span
                                        class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                    Activity</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="settings"></span>Settings
                                    &amp; Privacy </a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                    Center</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="globe"></span>Language</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-0 card-footer border-top">
                        <ul class="my-3 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user-plus"></span>Add
                                    another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                href="#!"> <span class="me-2" data-feather="log-out">
                                </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                href="#!">Privacy policy</a>&bull;<a class="mx-1 text-600"
                                href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim"
    data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" type="button"
            aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand" href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix
            <span class="text-1000 d-none d-sm-inline">slim</span></a>
    </div>
    <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/index.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="shopping-cart"></span>E commerce</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/dashboard/project-management.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clipboard"></span>Project management</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="phone"></span>CRM</div>
                        </a></li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/feed.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="share-2"></span>Social feed</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="shopping-cart"></span>E
                                    commerce</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Admin</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/add-product.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                                product</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/products.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customers.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customers</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customer-details.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Customer details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/orders.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Customer</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/homepage.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Homepage</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product
                                                details</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Products filter</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/checkout.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Checkout</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/shipping-info.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Shipping info</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/profile.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/favourite-stores.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Favourite stores</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/wishlist.html">
                                            <div class="dropdown-item-wrapper"><span
                                                    class="me-2 uil"></span>Wishlist</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/order-tracking.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order
                                                tracking</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/analytics.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deals.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deal-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/leads.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/lead-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                                        details</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/crm/add-contact.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add
                                        contact</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="clipboard"></span>Project
                                    management</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/create-new.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-list-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        list view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-card-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        card view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-board-view.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        board view</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/todo-list.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-details.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project
                                        details</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/chat.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="message-square"></span>Chat</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="mail"></span>Email</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/inbox.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/email-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email
                                        detail</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/email/compose.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="bookmark"></span>Events</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/create-an-event.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an
                                        event</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/events/event-detail.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event
                                        detail</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="trello"></span>Kanban</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/kanban.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/create-kanban-board.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create
                                        board</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="share-2"></span>Social</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/profile.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/social/settings.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="calendar"></span>Calendar</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="compass"></span>Starter</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="help-circle"></span>Faq</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="globe"></span>Landing</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/default.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/landing/alternate.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-column.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        column</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-grid.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                                        grid</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item"
                            href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="bell"></span>Notifications</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="users"></span>Members</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="clock"></span>Timeline</div>
                        </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="alert-triangle"></span>Errors</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/404.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/pages/errors/500.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Simple</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Split</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                                    <div class="dropdown-item-wrapper"><span
                                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                class="me-2 uil"></span>Card</span></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign
                                                out</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset
                                                password</div>
                                        </a></li>
                                    <li><a class="dropdown-item"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock
                                                screen</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="layout"></span>Layouts</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/vertical-sidenav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        sidenav</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/sidenav-collapse.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav
                                        collapse</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/darknav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/topnav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/horizontal-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        slim</div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav-slim.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                                        slim</div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                        <div class="px-3 pt-4 pb-3 img-dropdown">
                            <div class="row gx-4 gy-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Forms</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/form-control.html">Form
                                        control</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/input-group.html">Input
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/select.html">Select</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/checks.html">Checks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/range.html">Range</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/floating-labels.html">Floating
                                        labels</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/layout.html">Layout</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/advance-select.html">Advance
                                        select</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/date-picker.html">Date
                                        picker</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/editor.html">Editor</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/file-uploader.html">File
                                        uploader</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/rating.html">Rating</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/emoji-button.html">Emoji
                                        button</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/validation.html">Validation</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/wizard.html">Wizard</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="grid"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Icons</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/feather.html">Feather</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/font-awesome.html">Font
                                        awesome</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/icons/unicons.html">Unicons</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2"
                                            data-feather="bar-chart-2" style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">ECharts</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/line-charts.html">Line
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/bar-charts.html">Bar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/candlestick-charts.html">Candlestick
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/geo-map.html">Geo
                                        map</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/scatter-charts.html">Scatter
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/pie-charts.html">Pie
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/gauge-chart.html">Gauge
                                        chart</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/radar-charts.html">Radar
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/heatmap-charts.html">Heatmap
                                        charts</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/how-to-use.html">How
                                        to use</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Components</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/accordion.html">Accordion</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/avatar.html">Avatar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/alerts.html">Alerts</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/badge.html">Badge</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/breadcrumb.html">Breadcrumb</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/button.html">Buttons</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/calendar.html">Calendar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/card.html">Card</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/bootstrap.html">Bootstrap</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/swiper.html">Swiper</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/collapse.html">Collapse</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/dropdown.html">Dropdown</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/list-group.html">List
                                        group</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/modal.html">Modals</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navs.html">Navs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/offcanvas.html">Offcanvas</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/progress-bar.html">Progress
                                        bar</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/placeholder.html">Placeholder</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/pagination.html">Pagination</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/popovers.html">Popovers</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/scrollspy.html">Scrollspy</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/spinners.html">Spinners</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/toast.html">Toast</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/tooltips.html">Tooltips</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/chat-widget.html">Chat
                                        widget</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Tables</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                        tables</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                        Select</a>
                                    <div class="mt-5 dropdown-item-group"><span class="me-2" data-feather="tool"
                                            style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Utilities</h6>
                                    </div><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/background.html">Background</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/borders.html">Borders</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/colors.html">Colors</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/display.html">Display</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/flex.html">Flex</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/stacks.html">Stacks</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/float.html">Float</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/grid.html">Grid</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/interactions.html">Interactions</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/opacity.html">Opacity</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/overflow.html">Overflow</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/position.html">Position</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/shadows.html">Shadows</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/sizing.html">Sizing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/spacing.html">Spacing</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/typography.html">Typography</a><a
                                        class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/vertical-align.html">Vertical
                                        align</a><a class="dropdown-link"
                                        href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/visibility.html">Visibility</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true"
                    aria-expanded="false"><span
                        class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item active" href="getting-started.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="life-buoy"></span>Getting started</div>
                        </a></li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                            id="customization" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="settings"></span>Customization</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="customization/configuration.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/styling.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/dark-mode.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="customization/plugin.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#">
                            <div class="dropdown-item-wrapper"><span
                                    class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                        class="me-2 uil" data-feather="table"></span>Layouts doc</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="layouts/vertical-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/horizontal-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal
                                        navbar</div>
                                </a></li>
                            <li><a class="dropdown-item" href="layouts/combo-navbar.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo
                                        navbar</div>
                                </a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="gulp.html">
                            <div class="dropdown-item-wrapper"><span
                                    class="me-2 fa-brands fa-gulp fs-0 ms-1 me-1"></span>Gulp</div>
                        </a></li>
                    <li><a class="dropdown-item" href="design-file.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="figma"></span>Design file</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/changelog.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="git-merge"></span>Changelog</div>
                        </a></li>
                    <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/showcase.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                    data-feather="monitor"></span>Showcase</div>
                        </a></li>
                </ul>
            </li>
        </ul>
    </div>
    <ul class="flex-row navbar-nav navbar-nav-icons">
        {{-- <li class="nav-item d-none">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    data-theme-control="phoenixTheme" type="checkbox" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                        class="fs--1 fw-bold">Dark</span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-toggle="tooltip"
                    data-bs-placement="left" for="themeControlToggle" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                        class="fs--1 fw-bold">Light</span></label></div>
        </li> --}}
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBoxModal"
                href="#"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end notification-dropdown-menu border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="border-0 card position-relative">
                    <div class="p-2 card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 text-black">Notificatons</h5><button
                                class="p-0 btn btn-link fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <div class="scrollbar-overlay" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/30.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jane Foster</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>📅</span>Created an event.<span
                                                        class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/avatar.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Jessie Samson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                </p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/57.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Kiera Anderson</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="px-2 py-3 px-sm-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/59.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Herman Carter</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                        PM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 py-3 px-sm-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/58.webp"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="text-black fs--1">Benjamin Button</h4>
                                                <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                        class='me-1 fs--2'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                <p class="mb-0 text-800 fs--1"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                        AM </span>August 7,2021</p>
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
                                                    class="dropdown-item" href="#!">Mark as
                                                    unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 border-0 card-footer border-top">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html">Notification
                                history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor">
                    </circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor">
                    </circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor">
                    </circle>
                </svg></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-nide-dots border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="bg-white border-0 card position-relative">
                    <div class="px-3 pt-3 pb-0 overflow-auto card-body scrollbar" style="height: 20rem;">
                        <div class="text-center row align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/behance.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-cloud.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/slack.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/gitlab.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/bitbucket.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-drive.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/trello.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/figma.webp"
                                        alt="" width="20" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/twitter.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/pinterest.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/ln.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-maps.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/google-photos.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="p-2 mb-3 text-center d-block hover-bg-200 rounded-3 text-decoration-none"
                                    href="#!"><img
                                        src="https://prium.github.io/phoenix/v1.11.0/assets/img/nav-icons/spotify.webp"
                                        alt="" width="30" />
                                    <p class="pt-1 mt-1 mb-0 text-black text-truncate fs--2">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#!" role="button"
                aria-haspopup="true" aria-expanded="false">Olivia <span
                    class="fa-solid fa-chevron-down fs--2"></span></a>
            <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="border-0 card position-relative">
                    <div class="p-0 card-body">
                        <div class="pt-4 pb-3 text-center">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle "
                                    src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/72x72/57.webp"
                                    alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mx-3 mb-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                type="text" placeholder="Update your status" />
                        </div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="pb-1 mb-2 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                            </li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"><span
                                        class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                    Activity</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="settings"></span>Settings
                                    &amp; Privacy </a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                    Center</a></li>
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="globe"></span>Language</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-0 card-footer border-top">
                        <ul class="my-3 nav d-flex flex-column">
                            <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                        class="me-2 text-900" data-feather="user-plus"></span>Add
                                    another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                href="#!"> <span class="me-2" data-feather="log-out">
                                </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                href="#!">Privacy policy</a>&bull;<a class="mx-1 text-600"
                                href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>



<div class="modal fade" id="searchBoxModal" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal"
    aria-hidden="true" tabindex="-1" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
            <div class="p-0 modal-body">
                <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                    style="width: auto;">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                        <input class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                            type="search" aria-label="Search" placeholder="Search..." />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                    <div class="shadow-none cursor-pointer btn-close position-absolute end-0 top-50 translate-middle"
                        data-bs-dismiss="search"><button class="p-0 btn btn-link btn-close-falcon"
                            aria-label="Close"></button></div>
                    <div class="py-0 overflow-hidden border dropdown-menu border-300 font-base start-0 w-100">
                        <div class="scrollbar-overlay" style="max-height: 30rem;">
                            <div class="pb-3 list">
                                <h6 class="py-2 dropdown-header text-1000 fs--2">24 <span
                                        class="text-500">results</span></h6>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Recently Searched </h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"><span
                                                    class="fa-solid fa-clock-rotate-left"
                                                    data-fa-transform="shrink-2"></span> Store Macbook
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"> <span
                                                    class="fa-solid fa-clock-rotate-left"
                                                    data-fa-transform="shrink-2"></span> MacBook Air - 13″
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Products</h6>
                                <div class="py-2"><a class="py-2 dropdown-item d-flex align-items-center"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="file-thumbnail me-2"><img
                                                class="h-100 w-100 fit-cover rounded-3"
                                                src="../assets/img/products/60x60/3.png" alt="" /></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                            <p class="mb-0 fs--2 d-flex text-700"><span
                                                    class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                                                    Storage</span></p>
                                        </div>
                                    </a>
                                    <a class="py-2 dropdown-item d-flex align-items-center"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="file-thumbnail me-2"><img class="img-fluid"
                                                src="../assets/img/products/60x60/3.png" alt="" /></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                            <p class="mb-0 fs--2 d-flex text-700"><span
                                                    class="fw-medium text-600 ms-2">30 Sep at 12:30
                                                    PM</span></p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Quick Links</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"><span
                                                    class="fa-solid fa-link text-900"
                                                    data-fa-transform="shrink-2"></span> Support MacBook
                                                House</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"> <span
                                                    class="fa-solid fa-link text-900"
                                                    data-fa-transform="shrink-2"></span> Store MacBook″
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Files</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"><span
                                                    class="fa-solid fa-file-zipper text-900"
                                                    data-fa-transform="shrink-2"></span> Library MacBook
                                                folder.rar</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"> <span
                                                    class="fa-solid fa-file-lines text-900"
                                                    data-fa-transform="shrink-2"></span> Feature MacBook
                                                extensions.txt</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"> <span
                                                    class="fa-solid fa-image text-900"
                                                    data-fa-transform="shrink-2"></span> MacBook
                                                Pro_13.jpg</div>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Members</h6>
                                <div class="py-2"><a class="py-2 dropdown-item d-flex align-items-center"
                                        href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                        <div class="avatar avatar-l status-online me-2 text-900">
                                            <img class="rounded-circle "
                                                src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/10.webp"
                                                alt="" />
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                            <p class="mb-0 fs--2 d-flex text-700">anna@technext.it</p>
                                        </div>
                                    </a>
                                    <a class="py-2 dropdown-item d-flex align-items-center"
                                        href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                        <div class="avatar avatar-l me-2 text-900">
                                            <img class="rounded-circle "
                                                src="https://prium.github.io/phoenix/v1.11.0/assets/img/team/40x40/12.webp"
                                                alt="" />
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-1000 title">John Smith</h6>
                                            <p class="mb-0 fs--2 d-flex text-700">smith@technext.it</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="my-0 text-200" />
                                <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm">
                                    Related Searches</h6>
                                <div class="py-2"><a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"><span
                                                    class="fa-brands fa-firefox-browser text-900"
                                                    data-fa-transform="shrink-2"></span> Search in the Web
                                                MacBook</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                        <div class="d-flex align-items-center">
                                            <div class="fw-normal text-1000 title"> <span
                                                    class="fa-brands fa-chrome text-900"
                                                    data-fa-transform="shrink-2"></span> Store MacBook″
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var navbarTopShape = 'default';
    // var navbarPosition = window.config.config.phoenixNavbarPosition;
    var navbarPosition = 'horizontal';
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTop = document.querySelector('#navbarTop');
    var topNavSlim = document.querySelector('#topNavSlim');
    var navbarTopSlim = document.querySelector('#navbarTopSlim');
    var navbarCombo = document.querySelector('#navbarCombo');
    var navbarComboSlim = document.querySelector('#navbarComboSlim');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        topNavSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarVertical.remove();
        navbarTop.remove();
        topNavSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarTopSlim.removeAttribute('style');
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
        navbarDefault.remove();
        //- navbarVertical.remove();
        navbarTop.remove();
        topNavSlim.remove();
        navbarCombo.remove();
        navbarTopSlim.remove();
        navbarComboSlim.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        topNavSlim.remove();
        navbarVertical.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarTop.removeAttribute('style');
        documentElement.classList.add('navbar-horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
        topNavSlim.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarDefault.remove();
        navbarComboSlim.remove();
        navbarCombo.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        documentElement.classList.add('navbar-combo')

    } else {
        topNavSlim.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = 'darker';

    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
    }

    //   var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVerticalStyle = 'darker';
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
    }
</script>
