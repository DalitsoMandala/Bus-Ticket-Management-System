@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'fs--1 alert alert-soft-danger list-unstyled ']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
