<div>
    <div>
        @section('title', config('app.name') . ' | Profile')

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>




        <div class="mb-3 row">
            <div class="col-lg-3 col-md-5 col-sm-12">
                <div class="mb-3 shadow card">
                    <div class="p-4 card-body">
                        <div class="text-center">
                            <div class="avatar avatar-xl " style="height: 10rem; width: 10rem;">
                                <img class="shadow rounded-circle"
                                    src="{{ asset('storage/profile_pictures/' . $image) }}" alt="user-profile-image" />
                            </div>



                            <x-file filesize="2MB" wire:model="profile_picture" />


                            @error('profile_picture')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                            <h5 class="mb-1 fs-16">{{ Auth::user()->name }}</h5>

                        </div>
                    </div>
                </div>


                <div
                    class="shadow card {{ $twitter == null && $instagram == null && $facebook == null ? 'd-none' : '' }}">
                    <div class="card-body">
                        @if ($facebook != null)
                            <div class="py-1 d-flex align-items-center">
                                <div class="avatar avatar-xl me-3 ">
                                    <div class="avatar-emoji rounded-circle text-light" style="background: #1778F2">
                                        <span class="fa-brands fa-facebook-f fs-1"></span>
                                    </div>
                                </div>

                                <span class="fs--1">{{ '@' }}{{ $facebook }}</span>

                            </div>
                        @endif
                        @if ($instagram != null)
                            <div class="py-1 d-flex align-items-center">
                                <div class="avatar avatar-xl me-3 ">
                                    <div class="avatar-emoji rounded-circle text-light "
                                        style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);">
                                        <span class="fa-brands fa-instagram fs-1"></span>
                                    </div>
                                </div>
                                <span class="fs--1">{{ '@' }}{{ $instagram }}</span>
                            </div>
                        @endif
                        @if ($twitter != null)
                            <div class="py-1 d-flex align-items-center">
                                <div class="avatar avatar-xl me-3 ">
                                    <div class="avatar-emoji rounded-circle text-light " style="background:#14171A">
                                        <span class="fa-brands fa-twitter fs-1"></span>
                                    </div>
                                </div>
                                <span class="fs--1">{{ '@' }}{{ $twitter }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-7 col-sm-12">

                <div class="card">

                    <div class="pb-0 card-header">

                        <ul class="rounded nav nav-underline " role="tablist" wire:ignore>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 1 ? 'active' : '' }}" data-bs-toggle="tab"
                                    href="#personalDetails" role="tab" aria-selected="true"
                                    wire:click="$set('tab', '1')">
                                    <i class="fas fa-home"></i>
                                    Personal Details
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $tab == 2 ? 'active' : '' }}" data-bs-toggle="tab"
                                    href="#changePassword" role="tab" aria-selected="false" tabindex="-1"
                                    wire:click="$set('tab', '2')">
                                    <i class="far fa-user"></i>
                                    Email & Password
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="card-body">
                        <div class="mt-3 tab-content" id="myTabContent">
                            <div class="tab-pane fade  {{ $tab == 1 ? 'active show' : '' }}" id="personalDetails"
                                role="tabpanel" aria-labelledby="personalDetails">
                                <div class="row">
                                    <div class="w-25">


                                    </div>
                                </div>


                                <div class=" row">

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> First Name</x-input-label>
                                        <x-text-input wire:model.defer="first_name" />

                                        <div>
                                            @error('first_name')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> Last Name</x-input-label>
                                        <x-text-input wire:model.defer="last_name" />
                                        <div>
                                            @error('last_name')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> Phone Number</x-input-label>
                                        <x-phone wire:model.defer="phone_number" />
                                        <div>
                                            @error('phone_number')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-3 col">
                                        <x-input-label>Gender</x-input-label>
                                        <div class="">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" id="form-check-radio-default"
                                                    name="gender" type="radio" value="male"
                                                    wire:model.defer="gender">
                                                <label class="form-check-label" for="form-check-radio-default">
                                                    Male
                                                </label>
                                            </div>

                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" id="form-check-radio-default-checked"
                                                    name="gender" type="radio" value="female"
                                                    wire:model.defer="gender" checked="">
                                                <label class="form-check-label" for="form-check-radio-default-checked">
                                                    Female
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class=" row">

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> Home Address</x-input-label>
                                        <x-text-input wire:model.defer="home_address" />
                                        <div>
                                            @error('home_address')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> Birth Date</x-input-label>
                                        <x-date wire:model.defer="birth_date" />

                                        <div>
                                            @error('birth_date')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class=" row">

                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> Facebook URL</x-input-label>
                                        <div class="input-group">

                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-brands fa-facebook"></i>
                                            </span>
                                            <x-text-input class="" wire:model.defer="facebook_link" />
                                            <div>
                                                @error('facebook_link')
                                                    <x-alert>{{ $message }}</x-alert>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> INSTAGRAM URL</x-input-label>
                                        <div class="input-group">

                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-brands fa-instagram"></i>
                                            </span>
                                            <x-text-input class="" wire:model.defer="instagram_link" />
                                            <div>
                                                @error('instagram_link')
                                                    <x-alert>{{ $message }}</x-alert>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> TWITTER URL </x-input-label>
                                        <div class="input-group">

                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-brands fa-twitter"></i>
                                            </span>
                                            <x-text-input class="" wire:model.defer="twitter_link" />
                                            <div>
                                                @error('twitter_link')
                                                    <x-alert>{{ $message }}</x-alert>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="mt-3 row g-2 g-sm-3">

                                    <div class="col-auto">
                                        <x-black-button wire:click="save()">Update </x-black-button>


                                        {{-- <button class="mb-1 btn btn-soft-danger me-1" type="button">Reset Details</button> --}}
                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane fade {{ $tab == 2 ? 'active show' : '' }}" id="changePassword"
                                role="tabpanel" aria-labelledby="changePassword">

                                <div class=" row">

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> Email <span class="text-danger">*</span></x-input-label>
                                        <x-text-input wire:model.defer="email" placeholder="your email" />
                                        <div>
                                            @error('email')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <x-input-label> USERName <span class="text-danger">*</span></x-input-label>
                                        <x-text-input wire:model.defer="name" placeholder="your username" />
                                        <div>
                                            @error('name')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="my-2 row justify-content-end">

                                    <div class="col-auto">

                                        <x-black-button wire:click="saveEmail()">UPDATE EMAIL &
                                            USERNAME</x-black-button>
                                    </div>



                                    {{-- <button class="mb-1 btn btn-soft-danger me-1" type="button">Reset Details</button> --}}



                                </div>
                                <div class=" row">
                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> Old Password <span class="text-danger">*</span></x-input-label>
                                        <x-text-input type="password" wire:model.defer="old_password"
                                            placeholder="your old password" />

                                        <div>
                                            @error('old_password')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> New password <span class="text-danger">*</span></x-input-label>
                                        <x-text-input type="password" placeholder="your new password"
                                            wire:model.defer="new_password" />
                                        <div>
                                            @error('new_password')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <x-input-label> Confirm Password <span
                                                class="text-danger">*</span></x-input-label>
                                        <x-text-input type="password" placeholder="confirm your new password"
                                            wire:model.defer="new_password_confirmation" />

                                        <div>
                                            @error('new_password_confirmation')
                                                <x-alert>{{ $message }}</x-alert>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="my-2 row justify-content-between">
                                    <div class="col-auto">
                                        <div class="mb-3">
                                            <a class="link-primary text-decoration-underline fs--1" href="#!"
                                                wire:click='forgot()'>Forgot
                                                Password ?</a>
                                        </div>
                                    </div>
                                    <div class="col-auto">

                                        <x-black-button wire:click="savePassword()">CHANGE YOUR PASSWORD
                                        </x-black-button>
                                    </div>



                                    {{-- <button class="mb-1 btn btn-soft-danger me-1" type="button">Reset Details</button> --}}



                                </div>



                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@push('scripts')
    <script></script>
@endpush
