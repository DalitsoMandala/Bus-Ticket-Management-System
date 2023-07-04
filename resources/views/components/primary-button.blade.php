<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-secondary text-uppercase']) }}>
    {{ $slot }}
</button>
