@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>

        <ul class="alert alert-soft-danger list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
