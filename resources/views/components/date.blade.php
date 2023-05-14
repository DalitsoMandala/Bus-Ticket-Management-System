<div wire:ignore x-cloak x-data x-init="() => {
    flatpickr($refs.input, { static: true, minDate: 'today' });
}">
    <input {{ $attributes->merge(['class' => 'form-control', 'placeholder' => 'Choose date']) }} x-ref="input" />

</div>
