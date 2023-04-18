<div>
    <x-button class="add-session" wire:click="showModal" wire:loading.attr="disabled">
        ADD ROUTE
    </x-button>
    <x-dialog-modal wire:model.defer="showingModalAddRoutes">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">DEPART FROM</x-input-label>
                            <select class="form-select" placeholder="depart from" wire:model.defer="depart_from">
                                <option value="">choose one</option>
                                <option value="Dedza"> Dedza</option>
                                <option value="Dowa"> Dowa</option>
                                <option value="Kasungu"> Kasungu</option>
                                <option value="Lilongwe"> Lilongwe</option>
                                <option value="Mchinji"> Mchinji</option>
                                <option value="Nkhotakota"> Nkhotakota</option>
                                <option value="Ntcheu"> Ntcheu</option>
                                <option value="Ntchisi"> Ntchisi</option>
                                <option value="Salima"> Salima</option>
                                <option value="Chitipa"> Chitipa</option>
                                <option value="Karonga"> Karonga</option>
                                <option value="Likoma"> Likoma</option>
                                <option value="Mzimba"> Mzimba</option>
                                <option value="Nkhata Bay"> Nkhata Bay</option>
                                <option value="Rumphi"> Rumphi</option>
                                <option value="Balaka"> Balaka</option>
                                <option value="Blantyre"> Blantyre</option>
                                <option value="Chikwawa"> Chikwawa</option>
                                <option value="Chiradzulu"> Chiradzulu</option>
                                <option value="Machinga"> Machinga</option>
                                <option value="Mangochi"> Mangochi</option>
                                <option value="Mulanje"> Mulanje</option>
                                <option value="Mwanza"> Mwanza</option>
                                <option value="Nsanje"> Nsanje</option>
                                <option value="Thyolo"> Thyolo</option>
                                <option value="Phalombe"> Phalombe</option>
                                <option value="Zomba"> Zomba</option>
                                <option value="Neno"> Neno</option>


                            </select>
                        </div>
                        <div>
                            @error('depart_from')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">DEPART FOR</x-input-label>

                            <select class="form-select" placeholder="depart for" wire:model.defer="depart_for">
                                <option value="">choose one</option>
                                <option value="Dedza"> Dedza</option>
                                <option value="Dowa"> Dowa</option>
                                <option value="Kasungu"> Kasungu</option>
                                <option value="Lilongwe"> Lilongwe</option>
                                <option value="Mchinji"> Mchinji</option>
                                <option value="Nkhotakota"> Nkhotakota</option>
                                <option value="Ntcheu"> Ntcheu</option>
                                <option value="Ntchisi"> Ntchisi</option>
                                <option value="Salima"> Salima</option>
                                <option value="Chitipa"> Chitipa</option>
                                <option value="Karonga"> Karonga</option>
                                <option value="Likoma"> Likoma</option>
                                <option value="Mzimba"> Mzimba</option>
                                <option value="Nkhata Bay"> Nkhata Bay</option>
                                <option value="Rumphi"> Rumphi</option>
                                <option value="Balaka"> Balaka</option>
                                <option value="Blantyre"> Blantyre</option>
                                <option value="Chikwawa"> Chikwawa</option>
                                <option value="Chiradzulu"> Chiradzulu</option>
                                <option value="Machinga"> Machinga</option>
                                <option value="Mangochi"> Mangochi</option>
                                <option value="Mulanje"> Mulanje</option>
                                <option value="Mwanza"> Mwanza</option>
                                <option value="Nsanje"> Nsanje</option>
                                <option value="Thyolo"> Thyolo</option>
                                <option value="Phalombe"> Phalombe</option>
                                <option value="Zomba"> Zomba</option>
                                <option value="Neno"> Neno</option>


                            </select>
                        </div>
                        <div>
                            @error('depart_for')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">BUS SCHEDULE</x-input-label>

                            <select class="form-select" wire:model.defer="schedule">
                                <option value="">choose one</option>
                                @foreach ($schedules as $schedule)
                                    <option value="{{ $schedule->id }}">{{ $schedule->title }}
                                        ({{ \Carbon\Carbon::parse($schedule->depart_time)->format('H:i A') }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            @error('schedule')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">PRICE (MWK)</x-input-label>

                            <x-text-inputtype="text" placeholder="price" wire:model.defer="price" />





                        </div>
                        <div>
                            @error('price')
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
