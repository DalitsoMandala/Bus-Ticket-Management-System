<div wire:ignore x-data="{
    model: @entangle($attributes->wire('model')),
}" x-init="select2 = new Choices($refs.select, {
    position: 'bottom',
    searchPlaceholderValue: '{{ __('Search...') }}',
    shouldSort: true,
    itemSelectText: '',
    removeItems: true,
    removeItemButton: true,
})

$refs.select.addEventListener('addItem', (event) => {
    if (event.target.hasAttribute('multiple')) {
        model = Array.from(event.target.options).filter(option => option.selected).map(option => option.value);
    } else {
        model = event.target.value;
    }
});

$refs.select.addEventListener('removeItem', (event) => {
    if (event.target.hasAttribute('multiple')) {
        model = Array.from(event.target.options).filter(option => option.selected).map(option => option.value);
    } else {
        model = event.target.value;
    }
});
window.addEventListener('edit-choices', event => {
    val = event.detail.newValues;
    select2.setChoiceByValue(val);
})

window.addEventListener('reset-choices', event => {


    select2.removeActiveItems();
})">

    <select {{ $attributes->merge(['class' => 'form-select']) }} x-ref="select">
        {{ $slot }}
    </select>
</div>
