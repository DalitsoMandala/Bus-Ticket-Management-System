<div>
    <x-button class="add-session" wire:click="showModal" wire:loading.attr="disabled">
        ADD BUS
    </x-button>
    <x-dialog-modal wire:model.defer="showingModalAddBus">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">
                <div class="row g-3">



                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Model</x-input-label>


                            <select wire:model.defer="model" class="form-control">
                                <option value=''>choose one</option>
                                <option value='Abarth'>Abarth</option>
                                <option value='Alfa Romeo'>Alfa Romeo</option>
                                <option value='Aston Martin'>Aston Martin</option>
                                <option value='Audi	'>Audi</option>
                                <option value='Bentley'>Bentley</option>
                                <option value='BMW'>BMW</option>
                                <option value='Bugatti'>Bugatti</option>
                                <option value='Cadillac'>Cadillac</option>
                                <option value='Chevrolet'>Chevrolet</option>
                                <option value='Chrysler'>Chrysler</option>
                                <option value='Citroën'>Citroën</option>
                                <option value='Dacia'>Dacia</option>
                                <option value='Daewoo'>Daewoo</option>
                                <option value='Daihatsu'>Daihatsu</option>
                                <option value='Dodge'>Dodge</option>
                                <option value='Donkervoort'>Donkervoort</option>
                                <option value='DS'>DS</option>
                                <option value='Ferrari'>Ferrari</option>
                                <option value='Fiat'>Fiat</option>
                                <option value='Fisker'>Fisker</option>
                                <option value='Ford'>Ford</option>
                                <option value='Honda'>Honda</option>
                                <option value='Hummer'>Hummer</option>
                                <option value='Hyundai'>Hyundai</option>
                                <option value='Infiniti'>Infiniti</option>
                                <option value='Iveco'>Iveco</option>
                                <option value='Jaguar'>Jaguar</option>
                                <option value='Jeep'>Jeep</option>
                                <option value='Kia'>Kia</option>
                                <option value='KTM'>KTM</option>
                                <option value='Lada'>Lada</option>
                                <option value='Lamborghini'>Lamborghini</option>
                                <option value='Lancia'>Lancia</option>
                                <option value='Land Rover'>Land Rover</option>
                                <option value='Landwind'>Landwind</option>
                                <option value='Lexus'>Lexus</option>
                                <option value='Lotus'>Lotus</option>
                                <option value='Maserati	'>Maserati</option>
                                <option value='Maybach'>Maybach</option>
                                <option value='Mazda'>Mazda</option>
                                <option value='McLaren'>McLaren</option>
                                <option value='Mercedes-Benz'>Mercedes-Benz</option>
                                <option value='MG'>MG</option>
                                <option value='Mini'>Mini</option>
                                <option value='Mitsubishi'>Mitsubishi</option>
                                <option value='Morgan'>Morgan</option>
                                <option value='Nissan'>Nissan</option>
                                <option value='Opel'>Opel</option>
                                <option value='Peugeot'>Peugeot</option>
                                <option value='Porsche'>Porsche</option>
                                <option value='Renault'>Renault</option>
                                <option value='Rolls-Royce'>Rolls-Royce</option>
                                <option value='Rover'>Rover</option>
                                <option value='Saab'>Saab</option>
                                <option value='Seat'>Seat</option>
                                <option value='Skoda'>Skoda</option>
                                <option value='Smart'>Smart</option>
                                <option value='SsangYong'>SsangYong</option>
                                <option value='Subaru'>Subaru</option>
                                <option value='Suzuki'>Suzuki</option>
                                <option value='Tesla'>Tesla</option>
                                <option value='Toyota'>Toyota</option>
                                <option value='Volkswagen'>Volkswagen</option>
                                <option value='Volvo'>Volvo</option>
                                <option value='Other'>Other / Not-Listed</option>
                            </select>
                        </div>
                        <div>
                            @error('model')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Brand</x-input-label>

                            <x-input wire:model.defer="brand" placeholder="brand" />
                        </div>
                        <div>
                            @error('brand')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">S/N</x-input-label>

                            <x-input wire:model.defer="serial_number" placeholder="serial number" />
                        </div>
                        <div>
                            @error('serial_number')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Seats</x-input-label>

                            <x-input wire:model.defer="seats" placeholder="seat number" />
                        </div>
                        <div>
                            @error('seats')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>







                    <div class="col-12 gy-6">
                        <div class="row g-3 justify-content-end">

                            <div class="col-auto">
                                <x-primary-button>{{ $button }}</x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>

        </x-slot>

        <x-slot name="footer">

        </x-slot>

    </x-dialog-modal>

</div>

@push('scripts')
    <script></script>
@endpush
