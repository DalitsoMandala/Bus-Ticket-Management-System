<div>
    <x-button class="add-session" wire:click="showModal" wire:loading.attr="disabled">
        ADD SCHEDULE
    </x-button>
    <x-dialog-modal wire:model.defer="showingModalAddSchedule">

        <x-slot name="title">

        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div>
                            <x-input-label class="form-label" for="inputName">Title</x-input-label>

                            <x-input placeholder="Title" wire:model.defer="title" />
                        </div>
                        <div>
                            @error('title')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Check in Time</x-input-label>

                            <x-time type="time" id="check_in" wire:model="check_in_time" />


                        </div>
                        <div>
                            @error('check_in_time')
                                <x-alert>{{ $message }}</x-alert>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div>
                            <x-input-label class="form-label" for="inputName">Depart Time</x-input-label>



                            <x-time type="time" id="depart_time" wire:model="depart_time" />
                        </div>
                        <div>
                            @error('depart_time')
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
