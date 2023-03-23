<div wire:ignore x-cloak x-data x-init="() => {
    flatpickr($refs.input, {
        static: true,
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',

    });
}">
    <input type="time" {{ $attributes->merge(['class' => 'form-control']) }} x-ref="input" />

</div>
