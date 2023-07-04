@props(['disabled' => true, 'message'])
<button {{ $attributes['data-disabled'] }}
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-secondary fs--1 text-uppercase']) }}>
    {{ $slot }}
</button>
