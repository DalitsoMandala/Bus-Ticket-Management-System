<x-guest-layout>

    <div class="d-flex justify-content-center align-items-center fw-bolder fs-5 d-inline-block">
        <a href="{{ route('home') }}">
            <x-application-logo width="58" />
        </a>
    </div>

    <div class="text-center mb-7 mt-2">
        <h3 class="text-1000">Sign In</h3>
        <p class="text-700">Get access to your account</p>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3 text-start">
            <x-input-label class="form-label" for="email">Email address</x-label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-regular fa-envelope"></i></span>
                    <x-text-input class="form-control form-icon-input" id="email" name="email" type="email"
                                  :value="old('email')" placeholder="name@gmail.com" required />

                    <!-- <span class="fas fa-user text-900 fs--1 form-icon"></span> Font Awesome fontawesome.com -->
                </div>
        </div>
        <!-- Email Address -->

        <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-unlock"></i></span>
                <x-text-input class="form-control form-icon-input" id="password" name="password" type="password"
                              autocomplete="current-password" placeholder="password" required />

                <!-- <span class="fas fa-user text-900 fs--1 form-icon"></span> Font Awesome fontawesome.com -->
            </div>
        </div>

        <!-- Remember Me -->

        <div class="row d-flex justify-content-between mb-7">

            <div class="col-auto">
                @if (Route::has('password.request'))
                    <a class="fs--1 fw-semi-bold" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}</a>
                @endif
            </div>
            <div class="col-auto">
                <a class="fs--1 fw-semi-bold" href="{{ route('register') }}">
                    {{ __('Create an account?') }}</a>
            </div>
        </div>

        <div class="justify-content-center d-flex mt-4 flex">

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>


    <hr>

    <h6 class="text-center text-uppercase">Demo</h6>

    <div class="d-flex justify-content-around">
        <button class="btn btn-phoenix-secondary me-1 mb-1 demo" data-selected="admin" type="button">Admin</button>
        <button class="btn btn-phoenix-info me-1 mb-1 demo" data-selected="customer" type="button">Customer</button>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.demo').click(function(e) {
                    if ($(this).attr('data-selected') == 'admin') {
                        $('#email').val('admin@gmail.com');
                        $('#password').val('password');
                    } else {
                        $('#email').val('customer@gmail.com');
                        $('#password').val('password');
                    }

                });
            });
        </script>
    @endpush

</x-guest-layout>
