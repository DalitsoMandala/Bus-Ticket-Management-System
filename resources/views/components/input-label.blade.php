@props(['value'])

<label {{ $attributes->merge(['class' => 'px-0 form-label']) }}>
    {{ $value ?? $slot }}
</label>
