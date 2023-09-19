<style>
    @media (max-width: 768px) {
        .flatpickr-input {
            width: 100%;
            /* Expand to full width */
            font-size: 14px;
            /* Adjust font size */
        }
    }
</style>

<div wire:ignore x-cloak x-data x-init="() => {
    flatpickr($refs.input, {
        static: true,
        minDate: 'today',
        disableMobile: true
    });
}">
    <input {{ $attributes->merge(['class' => 'form-control datetimepicker', 'placeholder' => 'dd/mm/yyyy']) }}
        x-ref="input" />

</div>
