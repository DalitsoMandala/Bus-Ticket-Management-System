<div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
        src="@if (\App\Models\Company::find(1)->logo != null) {{ asset('storage/logo/' . \App\Models\Company::find(1)->logo) }}@else ' ' @endif"
        alt="logo" {{ $attributes }}></div>
