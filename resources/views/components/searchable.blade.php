<div x-data="{
    search: @entangle($attributes->wire('model')),
    input: '',
    show: true,

    items: @entangle('results'),



    get Filtered() {

        if (this.search === '') {
            return [];
        }


        let data = this.items.filter(
            value => value.name.toLowerCase().includes(this.search.toLowerCase())
        );


        return this.items.filter(
            value => value.name.toLowerCase().includes(this.search.toLowerCase())
        );


    },

    getinput(value) {
        this.search = value;

        this.items.filter(
            value => value.name.toLowerCase().includes([])
        );


    }


}" x-init="$watch('items', value => console.log(value))">

    <input class="form-control" {{ $attributes }} />




</div>
