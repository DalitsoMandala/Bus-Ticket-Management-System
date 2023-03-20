<div x-data="{
    model: @entangle($attributes->wire('model')),
}" x-init="select2Alpine" wire:ignore>
    <select x-ref="select" {{ $attributes->merge(['class' => 'form-select']) }}>
        {{ $slot }}
    </select>
</div>


@push('scripts')
    <script>
        function select2Alpine() {
            this.select2 = $(this.$refs.select).select2();


        }
    </script>
@endpush
