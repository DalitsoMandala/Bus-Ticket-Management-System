<x-guest-layout>

    <div class="d-flex justify-content-center align-items-center fw-bolder fs-5 d-inline-block">
        <a href="{{ route('home') }}">
            <x-application-logo width="58" />
        </a>
    </div>

    <div class="text-center mb-7">
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
                    {{ __('Create a student account?') }}</a>
            </div>
        </div>

        <div class="justify-content-center d-flex mt-4 flex">

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
