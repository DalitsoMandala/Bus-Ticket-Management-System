<x-guest-layout>

    <div class="d-flex justify-content-center align-items-center fw-bolder fs-5 d-inline-block">
        <a href="{{ route('home') }}">
            <x-application-logo width="58" />
        </a>
    </div>

    <div class="mt-2 text-center mb-7">
        <h3 class="text-1000">Sign Up</h3>
        <p class="text-700">Create an your account</p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('USERNAME')" />
            <x-text-input id="name" name="name" type="text" :value="old('name')" required autofocus
                          autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div class="mt-4 row">

            <div class="col">
                <div>
                    <x-input-label for="name" :value="__('FIRST NAME')" />
                    <x-text-input id="first_name" name="first_name" type="text" :value="old('first_name')" required autofocus
                                  autocomplete="first_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                </div>
            </div>

            <div class="col">
                <div>
                    <x-input-label for="name" :value="__('LAST NAME')" />
                    <x-text-input id="last_name" name="last_name" type="text" :value="old('last_name')" required autofocus
                                  autocomplete="last_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                </div>
            </div>
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" :value="old('email')" required
                          autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" name="password" type="password" required autocomplete="new-password" />

            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" name="password_confirmation" type="password" required
                          autocomplete="new-password" />

            <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
        </div>


        <div class="mt-2  d-flex justify-content-end mb-7">

            <a class="text-sm text-gray-600 underline rounded-md fs--1 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <div class="mt-4 d-flex justify-content-center">


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
