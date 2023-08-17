@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-soft-success']) }}>
        {{ $status }}
    </div>
@endif
