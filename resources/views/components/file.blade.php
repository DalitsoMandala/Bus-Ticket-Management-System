<div wire:ignore x-data="{
    size: '{{ $attributes['filesize'] }}',
    pond: '',
    uploaded: false,
    changeImage: false,
    picture: @entangle($attributes['wire:model']),
    uploadFiles() {
        process = this.pond;
        process.processFile();

    },
    init() {

        FilePond.setOptions({

            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {


                    @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)

                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)


                }



            }, //server

            maxFileSize: this.size,





        });



        const pond = FilePond.create($refs.input, {
            instantUpload: false, // Files won't be uploaded immediately
            // Other configuration options...
        });



        this.pond = pond;

        pond.on('processfile', (error, file) => {

            // $wire.emitTo('customer.profile', 'clearUp');


            if (!error) {


                setTimeout(() => {

                    pond.removeFiles();


                }, 1000);
            }
        });

    }


}">

    <small class="fs--2">change your profile picture</small>
    <input type="file" x-ref="input" {{ $attributes }} />

</div>
