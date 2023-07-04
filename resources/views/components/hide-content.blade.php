<div x-data="{ save: @entangle($attributes->wire('model')) }" x-show="save">
    {{ $slot }}
</div>
