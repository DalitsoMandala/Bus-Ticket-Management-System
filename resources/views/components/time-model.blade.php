<div wire:ignore x-data x-init="() => {
    flatpickr($refs.input2, {
        static: true,
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',
        disableMobile: true
    });
}">
    <input {{ $attributes->merge(['class' => 'form-control ']) }} x-ref="input2" />

</div>
