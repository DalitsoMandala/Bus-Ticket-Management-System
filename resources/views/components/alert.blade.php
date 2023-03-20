<div {{ $attributes->merge(['class' => 'alert alert-soft-danger p-2 fs--1 mt-2 ', 'role' => 'alert']) }}>
    <span><i aria-hidden="true" class="fa fa-exclamation-circle me-2"></i></span>
    {{ $slot }}
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
