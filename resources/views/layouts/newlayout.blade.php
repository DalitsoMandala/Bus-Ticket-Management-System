{{-- <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
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
        <div class="navbar-vertical-footer"><a class="border-0 btn btn-link fw-semi-bold d-flex ps-0"
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
        <ul class="flex-row navbar-nav navbar-nav-icons ms-auto">

            <li class="nav-item dropdown d-none"><a aria-expanded="false" aria-haspopup="true"
                    class="px-0 nav-link lh-1 ms-5" data-bs-toggle="dropdown" href="#!" id="navbarDropdownUser"
                    role="button">
                    <span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span>
                </a>
                <div aria-labelledby="navbarDropdownUser"
                    class="py-0 border shadow dropdown-menu dropdown-menu-end dropdown-profile border-300">
                    <div class="bg-white border-0 card position-relative">
                        <div class="p-0 overflow-auto card-body scrollbar">
                            <div
                                class="px-1 py-3 mt-1 d-flex align-items-center justify-content-between border-300 px-lg-1 notification-card border-top bg-soft">
                                <div class="d-flex">
                                    <div class="mb-5 avatar avatar-xl me-3">
                                        <img alt="" class="rounded-circle" src="" />
                                    </div>
                                    <div class="flex-1 mt-2 me-3">
                                        <h4 class="text-black fs--1">Jessie Samson</h4>
                                        <p class="fs--1 text-1000"><span class='me-1'>💬</span>Mentioned
                                            you in a comment<span class="fw-bold"> &quot;Well
                                                done! Proud of you ❤️ &quot; </span><span
                                                class="ms-2 text-400 fw-bold fs--2">10M</span>
                                        </p>
                                        <p class="mb-0 text-800 fs--1"><span class="me-1 fas fa-clock"></span><span
                                                class="fw-bold">10:41 AM </span>August
                                            7,2021</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="p-0 card-footer border-top">

                            <div class="px-3 py-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="#!">
                                    </span>Show all notifications</a></div>

                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                    class="px-0 nav-link lh-1 ms-5" data-bs-toggle="dropdown" href="#!" id="navbarDropdownUser"
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
                    class="py-0 border shadow dropdown-menu dropdown-menu-end dropdown-profile border-300">
                    <div class="bg-white border-0 card position-relative">
                        <div class="p-0 card-body">
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
                        <div class="overflow-auto scrollbar" style="height: 5rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="{{ route('admin-profile') }}">
                                        <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                <li class="nav-item"><a class="px-3 nav-link" href="{{ route('admin-dashboard') }}">
                                        <span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>

                            </ul>
                        </div>
                        <div class="p-0 card-footer border-top">

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
</nav> --}}

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
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#home"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="home">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                    <span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span
                                        class="nav-link-text">Home</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="home">
                                    <li class="collapsed-nav-item-title d-none">Home</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/index.html" data-bs-toggle=""
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">E
                                                    commerce</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/dashboard/project-management.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                    management</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">CRM</span><span
                                                    class="badge ms-2 badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/feed.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Social
                                                    feed</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- label-->
                        <p class="navbar-vertical-label">Apps</p>
                        <hr class="navbar-vertical-line" /><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#e-commerce"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="e-commerce">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                    <span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span
                                        class="nav-link-text">E commerce</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="e-commerce">
                                    <li class="collapsed-nav-item-title d-none">E commerce</li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#admin"
                                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="e-commerce">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Admin</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                id="admin">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/add-product.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Add product</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/products.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Products</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customers.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Customers</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/customer-details.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Customer details</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/orders.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Orders</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Order details</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Refund</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#customer"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="e-commerce">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Customer</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                id="customer">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/homepage.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Homepage</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Product details</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Products filter</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Cart</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/checkout.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Checkout</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/shipping-info.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Shipping info</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/profile.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Profile</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/favourite-stores.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Favourite stores</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/wishlist.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Wishlist</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/order-tracking.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Order tracking</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Invoice</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#CRM"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="CRM">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="phone"></span></span><span
                                        class="nav-link-text">CRM</span><span
                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                        style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="CRM">
                                    <li class="collapsed-nav-item-title d-none">CRM</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/analytics.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Analytics</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deals.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Deals</span><span
                                                    class="badge ms-2 badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/deal-details.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Deal
                                                    details</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/leads.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Leads</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/lead-details.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Lead
                                                    details</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Reports</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/reports-details.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Reports
                                                    details</span><span
                                                    class="badge ms-2 badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/crm/add-contact.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                    contact</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#project-management" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="project-management">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="clipboard"></span></span><span class="nav-link-text">Project
                                        management</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="project-management">
                                    <li class="collapsed-nav-item-title d-none">Project management</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/create-new.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create
                                                    new</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-list-view.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                    list view</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-card-view.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                    card view</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-board-view.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                    board view</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/todo-list.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Todo
                                                    list</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/project-management/project-details.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                    details</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/chat.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="message-square"></span></span><span
                                        class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span>
                                </div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#email"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="email">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="mail"></span></span><span
                                        class="nav-link-text">Email</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="email">
                                    <li class="collapsed-nav-item-title d-none">Email</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/email/inbox.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Inbox</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/email/email-detail.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Email
                                                    detail</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/email/compose.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Compose</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#events"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="events">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="bookmark"></span></span><span
                                        class="nav-link-text">Events</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="events">
                                    <li class="collapsed-nav-item-title d-none">Events</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/events/create-an-event.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create
                                                    an event</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/events/event-detail.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Event
                                                    detail</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#kanban"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="kanban">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="trello"></span></span><span
                                        class="nav-link-text">Kanban</span><span
                                        class="badge ms-2 badge-phoenix badge-phoenix-info nav-link-badge">New</span><span
                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator d-none"
                                        style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="kanban">
                                    <li class="collapsed-nav-item-title d-none">Kanban</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/kanban.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Kanban</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/kanban/create-kanban-board.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Create
                                                    board</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#social"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="social">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="share-2"></span></span><span
                                        class="nav-link-text">Social</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="social">
                                    <li class="collapsed-nav-item-title d-none">Social</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/profile.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Profile</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/apps/social/settings.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Settings</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="calendar"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Calendar</span></span></div>
                            </a></div>
                    </li>
                    <li class="nav-item">
                        <!-- label-->
                        <p class="navbar-vertical-label">Pages</p>
                        <hr class="navbar-vertical-line" /><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="compass"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Starter</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="help-circle"></span></span><span
                                        class="nav-link-text-wrapper"><span class="nav-link-text">Faq</span></span>
                                </div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#landing"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="landing">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="globe"></span></span><span
                                        class="nav-link-text">Landing</span><span
                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                        style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="landing">
                                    <li class="collapsed-nav-item-title d-none">Landing</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/landing/default.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Default</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/landing/alternate.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Alternate</span><span
                                                    class="badge ms-2 badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#pricing"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="pricing">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="tag"></span></span><span
                                        class="nav-link-text">Pricing</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="pricing">
                                    <li class="collapsed-nav-item-title d-none">Pricing</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-column.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                    column</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/pricing/pricing-grid.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                    grid</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/notifications.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="bell"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Notifications</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="users"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Members</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="clock"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Timeline</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#errors"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="errors">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="alert-triangle"></span></span><span
                                        class="nav-link-text">Errors</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="errors">
                                    <li class="collapsed-nav-item-title d-none">Errors</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/errors/404.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">404</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/pages/errors/500.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">500</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#authentication" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="authentication">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="lock"></span></span><span
                                        class="nav-link-text">Authentication</span><span
                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                        style="font-size: 6px"></span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="authentication">
                                    <li class="collapsed-nav-item-title d-none">Authentication</li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="authentication">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Simple</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                id="simple">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign in</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign up</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign out</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Forgot password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Reset password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Lock screen</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="authentication">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Split</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                id="split">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign in</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign up</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign out</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Forgot password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Reset password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Lock screen</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#Card"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="authentication">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Card</span><span
                                                    class="badge ms-2 badge-phoenix badge-phoenix-info ">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                id="Card">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign in</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign up</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Sign out</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Forgot password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Reset password</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Lock screen</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#layouts"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="layouts">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="layout"></span></span><span
                                        class="nav-link-text">Layouts</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="layouts">
                                    <li class="collapsed-nav-item-title d-none">Layouts</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/vertical-sidenav.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Vertical sidenav</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/dark-mode.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Dark
                                                    mode</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/sidenav-collapse.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav
                                                    collapse</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/darknav.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Darknav</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/topnav-slim.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Topnav
                                                    slim</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top-slim.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Navbar
                                                    top slim</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/navbar-top.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Navbar
                                                    top</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/horizontal-slim.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Horizontal slim</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Combo
                                                    nav</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/demo/combo-nav-slim.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Combo
                                                    nav slim</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- label-->
                        <p class="navbar-vertical-label">Modules</p>
                        <hr class="navbar-vertical-line" /><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#forms"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="forms">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="file-text"></span></span><span
                                        class="nav-link-text">Forms</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="forms">
                                    <li class="collapsed-nav-item-title d-none">Forms</li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic"
                                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Basic</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#forms" id="basic">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/form-control.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Form control</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/input-group.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Input group</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/select.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Select</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/checks.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Checks</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/range.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Range</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/floating-labels.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Floating labels</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/basic/layout.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Layout</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance"
                                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Advance</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#forms"
                                                id="advance">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/advance-select.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Advance select</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/date-picker.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Date picker</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/editor.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Editor</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/file-uploader.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">File uploader</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/rating.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Rating</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/forms/advance/emoji-button.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Emoji button</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/forms/validation.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Validation</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/forms/wizard.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Wizard</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="icons">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="grid"></span></span><span
                                        class="nav-link-text">Icons</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="icons">
                                    <li class="collapsed-nav-item-title d-none">Icons</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/icons/feather.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Feather</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/icons/font-awesome.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Font
                                                    awesome</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/icons/unicons.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Unicons</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="tables">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="columns"></span></span><span
                                        class="nav-link-text">Tables</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="tables">
                                    <li class="collapsed-nav-item-title d-none">Tables</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Basic
                                                    tables</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Advance tables</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Bulk
                                                    Select</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#ECharts" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="ECharts">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="bar-chart-2"></span></span><span
                                        class="nav-link-text">ECharts</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="ECharts">
                                    <li class="collapsed-nav-item-title d-none">ECharts</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/line-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Line
                                                    charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/bar-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Bar
                                                    charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/candlestick-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Candlestick charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/geo-map.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Geo
                                                    map</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/scatter-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Scatter charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/pie-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Pie
                                                    charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/gauge-chart.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Gauge
                                                    chart</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/radar-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Radar
                                                    charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/heatmap-charts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Heatmap charts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/echarts/how-to-use.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">How
                                                    to use</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#components" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="components">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="package"></span></span><span
                                        class="nav-link-text">Components</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="components">
                                    <li class="collapsed-nav-item-title d-none">Components</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/accordion.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Accordion</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/avatar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Avatar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/alerts.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Alerts</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/badge.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Badge</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/breadcrumb.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Breadcrumb</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/button.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Buttons</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/calendar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Calendar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/card.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Card</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="components">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Carousel</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#components"
                                                id="carousel">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/bootstrap.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Bootstrap</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/carousel/swiper.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Swiper</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/collapse.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Collapse</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/dropdown.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Dropdown</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/list-group.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">List
                                                    group</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/modal.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Modals</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator"
                                            href="#navs-_and_-Tabs" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="components">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Navs &amp; Tabs</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#components"
                                                id="navs-_and_-Tabs">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navs.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Navs</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/navbar.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Navbar</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/modules/components/navs-and-tabs/tabs.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Tabs</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/offcanvas.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Offcanvas</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/progress-bar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Progress bar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/placeholder.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Placeholder</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/pagination.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Pagination</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/popovers.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Popovers</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/scrollspy.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Scrollspy</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/spinners.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Spinners</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/toast.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Toast</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/tooltips.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Tooltips</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/components/chat-widget.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Chat
                                                    widget</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="utilities">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="tool"></span></span><span
                                        class="nav-link-text">Utilities</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="utilities">
                                    <li class="collapsed-nav-item-title d-none">Utilities</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/background.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Background</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/borders.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Borders</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/colors.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Colors</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/display.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Display</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/flex.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Flex</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/stacks.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Stacks</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/float.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Float</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/grid.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Grid</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/interactions.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Interactions</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/opacity.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Opacity</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/overflow.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Overflow</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/position.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Position</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/shadows.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Shadows</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/sizing.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Sizing</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/spacing.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Spacing</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/typography.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Typography</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/vertical-align.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Vertical align</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/utilities/visibility.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Visibility</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#multi-level" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="multi-level">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="layers"></span></span><span class="nav-link-text">Multi
                                        level</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="multi-level">
                                    <li class="collapsed-nav-item-title d-none">Multi level</li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="multi-level">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Level two</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                id="level-two">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Item 1</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Item 2</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator"
                                            href="#level-three" data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="multi-level">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Level three</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                id="level-three">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Item 3</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                        href="#item-4" data-bs-toggle="collapse"
                                                        aria-expanded="false" aria-controls="level-three">
                                                        <div class="d-flex align-items-center">
                                                            <div class="dropdown-indicator-icon"><span
                                                                    class="fas fa-caret-right"></span></div>
                                                            <span class="nav-link-text">Item 4</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                    <div class="parent-wrapper">
                                                        <ul class="nav collapse parent"
                                                            data-bs-parent="#level-three" id="item-4">
                                                            <li class="nav-item"><a class="nav-link"
                                                                    href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                                    data-bs-toggle="" aria-expanded="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="nav-link-text">Item
                                                                            5</span>
                                                                    </div>
                                                                </a><!-- more inner pages-->
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                    href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                                    data-bs-toggle="" aria-expanded="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="nav-link-text">Item
                                                                            6</span>
                                                                    </div>
                                                                </a><!-- more inner pages-->
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="multi-level">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><span
                                                        class="fas fa-caret-right"></span></div><span
                                                    class="nav-link-text">Level four</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                        <div class="parent-wrapper">
                                            <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                id="level-four">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Item 6</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                        href="#item-7" data-bs-toggle="collapse"
                                                        aria-expanded="false" aria-controls="level-four">
                                                        <div class="d-flex align-items-center">
                                                            <div class="dropdown-indicator-icon"><span
                                                                    class="fas fa-caret-right"></span></div>
                                                            <span class="nav-link-text">Item 7</span>
                                                        </div>
                                                    </a><!-- more inner pages-->
                                                    <div class="parent-wrapper">
                                                        <ul class="nav collapse parent" data-bs-parent="#level-four"
                                                            id="item-7">
                                                            <li class="nav-item"><a class="nav-link"
                                                                    href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                                    data-bs-toggle="" aria-expanded="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="nav-link-text">Item
                                                                            8</span>
                                                                    </div>
                                                                </a><!-- more inner pages-->
                                                            </li>
                                                            <li class="nav-item"><a
                                                                    class="nav-link dropdown-indicator"
                                                                    href="#item-9" data-bs-toggle="collapse"
                                                                    aria-expanded="false" aria-controls="item-7">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="dropdown-indicator-icon">
                                                                            <span class="fas fa-caret-right"></span>
                                                                        </div><span class="nav-link-text">Item
                                                                            9</span>
                                                                    </div>
                                                                </a><!-- more inner pages-->
                                                                <div class="parent-wrapper">
                                                                    <ul class="nav collapse parent"
                                                                        data-bs-parent="#item-7" id="item-9">
                                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                                                data-bs-toggle=""
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="d-flex align-items-center">
                                                                                    <span class="nav-link-text">Item
                                                                                        10</span>
                                                                                </div>
                                                                            </a><!-- more inner pages-->
                                                                        </li>
                                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="https://prium.github.io/phoenix/v1.11.0/#!.html"
                                                                                data-bs-toggle=""
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="d-flex align-items-center">
                                                                                    <span class="nav-link-text">Item
                                                                                        11</span>
                                                                                </div>
                                                                            </a><!-- more inner pages-->
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- label-->
                        <p class="navbar-vertical-label">Documentation</p>
                        <hr class="navbar-vertical-line" /><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link active label-1"
                                href="getting-started.html" role="button" data-bs-toggle=""
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="life-buoy"></span></span><span
                                        class="nav-link-text-wrapper"><span class="nav-link-text">Getting
                                            started</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#customization" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="customization">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span
                                            data-feather="settings"></span></span><span
                                        class="nav-link-text">Customization</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="customization">
                                    <li class="collapsed-nav-item-title d-none">Customization</li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="customization/configuration.html" data-bs-toggle=""
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Configuration</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="customization/styling.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Styling</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="customization/dark-mode.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Dark
                                                    mode</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="customization/plugin.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Plugin</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                href="#layouts-doc" role="button" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="layouts-doc">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                    </div><span class="nav-link-icon"><span data-feather="table"></span></span><span
                                        class="nav-link-text">Layouts doc</span>
                                </div>
                            </a>
                            <div class="parent-wrapper label-1">
                                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                    id="layouts-doc">
                                    <li class="collapsed-nav-item-title d-none">Layouts doc</li>
                                    <li class="nav-item"><a class="nav-link" href="layouts/vertical-navbar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Vertical navbar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="layouts/horizontal-navbar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text">Horizontal navbar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="layouts/combo-navbar.html"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Combo
                                                    navbar</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </div>
                        </div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1" href="gulp.html"
                                role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fa-brands fa-gulp fs-0 ms-1 me-1"></span></span><span
                                        class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span>
                                </div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1" href="design-file.html"
                                role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="figma"></span></span><span
                                        class="nav-link-text-wrapper"><span class="nav-link-text">Design
                                            file</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/changelog.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="git-merge"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Changelog</span></span></div>
                            </a></div><!-- parent pages-->
                        <div class="nav-item-wrapper"><a class="nav-link label-1"
                                href="https://prium.github.io/phoenix/v1.11.0/showcase.html" role="button"
                                data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            data-feather="monitor"></span></span><span
                                        class="nav-link-text-wrapper"><span
                                            class="nav-link-text">Showcase</span></span></div>
                            </a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-vertical-footer"><button
                class="border-0 btn navbar-vertical-toggle fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span
                    class="uil uil-left-arrow-to-left fs-0"></span><span
                    class="uil uil-arrow-from-right fs-0"></span><span
                    class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false"
                    aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="https://prium.github.io/phoenix/v1.11.0/index.html">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png"
                                alt="phoenix" width="27" />
                            <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
                style="width:25rem;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                        placeholder="Search..." aria-label="Search" />
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
                                                data-fa-transform="shrink-2"></span> Store Macbook</div>
                                    </div>
                                </a>
                                <a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-clock-rotate-left"
                                                data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
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
                                        <p class="mb-0 fs--2 d-flex text-700"><span
                                                class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
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
                                                data-fa-transform="shrink-2"></span> Support MacBook House
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item"
                                    href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-link text-900"
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
                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-image text-900"
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
                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-brands fa-chrome text-900"
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
                <li class="nav-item">
                    <div class="px-2 theme-control-toggle fa-icon-wait"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span
                            data-feather="bell" style="height:20px;width:20px;"></span></a>
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
                                                            a comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:41 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                            comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:30 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                            a comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2"></span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:11 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                        aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                        href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
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
                                <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="pb-1 mb-2 nav d-flex flex-column">
                                    <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="user"></span><span>Profile</span></a></li>
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
                                        href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                        href="#!">Cookies</a></div>
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
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false"
                    aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand"
                    href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix <span
                        class="text-1000 d-none d-sm-inline">slim</span></a>
            </div>
            <ul class="flex-row navbar-nav navbar-nav-icons">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                            class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                            type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                                data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                                data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span data-feather="search"
                            style="height:12px;width:12px;"></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                        aria-expanded="false"><span data-feather="bell"
                            style="height:12px;width:12px;"></span></a>
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
                                                            a comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:41 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                            comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:30 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                            a comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2"></span>
                                                        </p>
                                                        <p class="mb-0 text-800 fs--1"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:11 AM </span>August 7,2021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                                                        type="button" data-stop-propagation="data-stop-propagation"
                                                        data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
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
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                        aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap"
                        id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia
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
                                <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="pb-1 mb-2 nav d-flex flex-column">
                                    <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="user"></span><span>Profile</span></a></li>
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
                                        href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                        href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
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
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="shopping-cart"></span>E
                                        commerce</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Orders</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Refund</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Product details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Products filter</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Cart</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Profile</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order tracking</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Invoice</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="calendar"></span>Calendar</div>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="compass"></span>Starter</div>
                            </a></li>
                        <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="help-circle"></span>Faq</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="users"></span>Members</div>
                            </a></li>
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="clock"></span>Timeline</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Simple</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Split</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Card</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                    <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                        <div class="border-0 scrollbar" style="max-height: 60vh;">
                            <div class="px-3 pt-4 pb-3 img-dropdown">
                                <div class="row gx-4 gy-5">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="file-text" style="stroke-width:2;"></span>
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
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="grid" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="package" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="columns" style="stroke-width:2;"></span>
                                            <h6 class="dropdown-item-title">Tables</h6>
                                        </div><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                            Select</a>
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="tool" style="stroke-width:2;"></span>
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item active" href="getting-started.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="life-buoy"></span>Getting started</div>
                            </a></li>
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="customization" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="settings"></span>Customization</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="customization/configuration.html">
                                        <div class="dropdown-item-wrapper"><span
                                                class="me-2 uil"></span>Configuration</div>
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
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="layouts-doc" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
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
            <li class="nav-item">
                <div class="px-2 theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon" data-feather="moon"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal"
                    data-bs-target="#searchBoxModal"><span data-feather="search"
                        style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span
                        data-feather="bell" style="height:20px;width:20px;"></span></a>
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>📅</span>Created an event.<span
                                                            class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                    aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                    aria-expanded="false">
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
                            <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900"
                                            data-feather="user"></span><span>Profile</span></a></li>
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
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                    href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
        style="display:none;">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand" href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix
                <span class="text-1000 d-none d-sm-inline">slim</span></a>
        </div>
        <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
            id="navbarTopCollapse">
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="shopping-cart"></span>E
                                        commerce</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Orders</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Refund</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Product details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Products filter</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Cart</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Profile</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order tracking</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Invoice</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="calendar"></span>Calendar</div>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="compass"></span>Starter</div>
                            </a></li>
                        <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="help-circle"></span>Faq</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="users"></span>Members</div>
                            </a></li>
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="clock"></span>Timeline</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Simple</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Split</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Card</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                    <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                        <div class="border-0 scrollbar" style="max-height: 60vh;">
                            <div class="px-3 pt-4 pb-3 img-dropdown">
                                <div class="row gx-4 gy-5">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="file-text" style="stroke-width:2;"></span>
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
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="grid" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="package" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="columns" style="stroke-width:2;"></span>
                                            <h6 class="dropdown-item-title">Tables</h6>
                                        </div><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                            Select</a>
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="tool" style="stroke-width:2;"></span>
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item active" href="getting-started.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="life-buoy"></span>Getting started</div>
                            </a></li>
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="customization" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="settings"></span>Customization</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="customization/configuration.html">
                                        <div class="dropdown-item-wrapper"><span
                                                class="me-2 uil"></span>Configuration</div>
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
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="layouts-doc" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
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
            <li class="nav-item">
                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                            class="fs--1 fw-bold">Dark</span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                            class="fs--1 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                    data-bs-target="#searchBoxModal"><span data-feather="search"
                        style="height:12px;width:12px;"></span></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>📅</span>Created an event.<span
                                                            class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                    aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    data-bs-auto-close="outside" aria-expanded="false">Olivia <span
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
                            <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900"
                                            data-feather="user"></span><span>Profile</span></a></li>
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
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                    href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
        data-move-target="#navbarVerticalNav" style="display:none;">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
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
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="shopping-cart"></span>E
                                        commerce</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Orders</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Refund</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Product details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Products filter</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Cart</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Profile</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order tracking</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Invoice</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="calendar"></span>Calendar</div>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="compass"></span>Starter</div>
                            </a></li>
                        <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="help-circle"></span>Faq</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="users"></span>Members</div>
                            </a></li>
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="clock"></span>Timeline</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Simple</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Split</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Card</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                    <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                        <div class="border-0 scrollbar" style="max-height: 60vh;">
                            <div class="px-3 pt-4 pb-3 img-dropdown">
                                <div class="row gx-4 gy-5">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="file-text" style="stroke-width:2;"></span>
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
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="grid" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="package" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="columns" style="stroke-width:2;"></span>
                                            <h6 class="dropdown-item-title">Tables</h6>
                                        </div><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                            Select</a>
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="tool" style="stroke-width:2;"></span>
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item active" href="getting-started.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="life-buoy"></span>Getting started</div>
                            </a></li>
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="customization" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="settings"></span>Customization</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="customization/configuration.html">
                                        <div class="dropdown-item-wrapper"><span
                                                class="me-2 uil"></span>Configuration</div>
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
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="layouts-doc" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
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
            <li class="nav-item">
                <div class="px-2 theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon" data-feather="moon"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal"
                    data-bs-target="#searchBoxModal"><span data-feather="search"
                        style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span
                        data-feather="bell" style="height:20px;width:20px;"></span></a>
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>📅</span>Created an event.<span
                                                            class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                    aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                    aria-expanded="false">
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
                            <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900"
                                            data-feather="user"></span><span>Profile</span></a></li>
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
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                    href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg"
        id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav"
        style="display:none;">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand" href="https://prium.github.io/phoenix/v1.11.0/index.html">phoenix
                <span class="text-1000 d-none d-sm-inline">slim</span></a>
        </div>
        <div class="order-1 collapse navbar-collapse navbar-top-collapse order-lg-0 justify-content-center"
            id="navbarTopCollapse">
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/dashboard/crm.html">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-cube"></span>Apps</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="shopping-cart"></span>E
                                        commerce</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Orders</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/order-details.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/admin/refund.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Refund</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Product details</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/products-filter.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Products filter</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/cart.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Cart</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Profile</div>
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
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Order tracking</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/apps/e-commerce/landing/invoice.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Invoice</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/apps/calendar.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="calendar"></span>Calendar</div>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/starter.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="compass"></span>Starter</div>
                            </a></li>
                        <li><a class="dropdown-item" href="https://prium.github.io/phoenix/v1.11.0/pages/faq.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="help-circle"></span>Faq</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/members.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="users"></span>Members</div>
                            </a></li>
                        <li><a class="dropdown-item"
                                href="https://prium.github.io/phoenix/v1.11.0/pages/timeline.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="clock"></span>Timeline</div>
                            </a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Simple</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/simple/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Split</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/split/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card"
                                        href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <div class="dropdown-item-wrapper"><span
                                                class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                                    class="me-2 uil"></span>Card</span></div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-in.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign in</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-up.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign up</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/sign-out.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Sign out</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/forgot-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Forgot password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/reset-password.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Reset password</div>
                                            </a></li>
                                        <li><a class="dropdown-item"
                                                href="https://prium.github.io/phoenix/v1.11.0/pages/authentication/card/lock-screen.html">
                                                <div class="dropdown-item-wrapper"><span
                                                        class="me-2 uil"></span>Lock screen</div>
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts"
                                href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
                    <ul class="py-0 dropdown-menu navbar-dropdown-caret dropdown-menu-card">
                        <div class="border-0 scrollbar" style="max-height: 60vh;">
                            <div class="px-3 pt-4 pb-3 img-dropdown">
                                <div class="row gx-4 gy-5">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="file-text" style="stroke-width:2;"></span>
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
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="grid" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="package" style="stroke-width:2;"></span>
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
                                        <div class="dropdown-item-group"><span class="me-2"
                                                data-feather="columns" style="stroke-width:2;"></span>
                                            <h6 class="dropdown-item-title">Tables</h6>
                                        </div><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/basic-tables.html">Basic
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/advance-tables.html">Advance
                                            tables</a><a class="dropdown-link"
                                            href="https://prium.github.io/phoenix/v1.11.0/modules/tables/bulk-select.html">Bulk
                                            Select</a>
                                        <div class="mt-5 dropdown-item-group"><span class="me-2"
                                                data-feather="tool" style="stroke-width:2;"></span>
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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!"
                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item active" href="getting-started.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                        data-feather="life-buoy"></span>Getting started</div>
                            </a></li>
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="customization" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
                                <div class="dropdown-item-wrapper"><span
                                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                                            class="me-2 uil" data-feather="settings"></span>Customization</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="customization/configuration.html">
                                        <div class="dropdown-item-wrapper"><span
                                                class="me-2 uil"></span>Configuration</div>
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
                        <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle"
                                id="layouts-doc" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
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
            <li class="nav-item">
                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                            class="fs--1 fw-bold">Dark</span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                            class="fs--1 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
                    data-bs-target="#searchBoxModal"><span data-feather="search"
                        style="height:12px;width:12px;"></span></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>📅</span>Created an event.<span
                                                            class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👤</span>Tagged you in a
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                                                    <p class="mb-2 fs--1 text-1000 mb-sm-3 fw-normal"><span
                                                            class='me-1 fs--2'>👍</span>Liked your
                                                        comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                    <p class="mb-0 text-800 fs--1"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="transition-none btn fs--2 btn-sm dropdown-toggle dropdown-caret-none notification-dropdown-toggle"
                                                    type="button" data-stop-propagation="data-stop-propagation"
                                                    data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
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
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                    aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    data-bs-auto-close="outside" aria-expanded="false">Olivia <span
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
                            <div class="mx-3 mb-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="pb-1 mb-2 nav d-flex flex-column">
                                <li class="nav-item"><a class="px-3 nav-link" href="#!"> <span
                                            class="me-2 text-900"
                                            data-feather="user"></span><span>Profile</span></a></li>
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
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                    href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
        data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
            <div class="modal-content mt-15 rounded-pill">
                <div class="p-0 modal-body">
                    <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                        style="width: auto;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                            <input class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                type="search" placeholder="Search..." aria-label="Search" />
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
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        // var navbarPosition = window.config.config.phoenixNavbarPosition;
        var navbarPosition = 'combo';
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

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;

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

