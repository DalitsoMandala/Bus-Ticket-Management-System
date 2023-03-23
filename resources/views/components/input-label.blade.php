@props(['value'])

<label {{ $attributes->merge(['class' => 'px-0']) }}>
    {{ $value ?? $slot }}
</label>
