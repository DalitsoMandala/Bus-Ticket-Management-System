@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            <img src="{{ asset('storage/logo/' . \App\Models\Company::find(1)->logo) }}" class="logo"
                alt="{{ config('app.name') }}">
        </a>
    </td>
</tr>