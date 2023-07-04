@props(['value'])

<label {{ $attributes->merge(['class' => 'fs--1']) }}>
    {{ $value ?? $slot }}
</label>
