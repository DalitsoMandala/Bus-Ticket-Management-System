<div>
    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" href="#!" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
                <img class="rounded-circle " src="{{ asset('storage/profile_pictures/' . $image) }}"
                    alt="profile-image" />
            </div>
        </a>
        <div class="py-0 border shadow dropdown-menu dropdown-menu-end navbar-dropdown-caret dropdown-profile border-300"
            aria-labelledby="navbarDropdownUser">
            <div class="border-0 card position-relative">
                <div class="p-0 card-body">
                    <div class="pt-4 pb-3 text-center">
                        <div class="avatar avatar-xl ">
                            <img class="rounded-circle " src="{{ asset('storage/profile_pictures/' . $image) }}"
                                alt="profile-image" />
                        </div>
                        <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                    </div>

                </div>
                <hr />
                <div class="overflow-auto scrollbar" style="height: 5rem;">
                    <ul class="pb-1 mb-2 nav d-flex flex-column">
                        <li class="nav-item"><a class="px-3 nav-link" href="{{ route('admin-profile') }}"> <span
                                    class="me-2 text-900" data-feather="user"></span><span>Profile</span></a>
                        </li>
                        <li class="nav-item"><a class="px-3 nav-link" href="{{ route('admin-dashboard') }}"><span
                                    class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                        </li>

                    </ul>
                </div>
                <div class="p-0 card-footer border-top">

                    <div class="px-3 pb-3 mt-3 "> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
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

</div>
@push('scripts')
    <script></script>
@endpush
