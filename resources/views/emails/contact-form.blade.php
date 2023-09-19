<x-mail::message>
# Contact Form Submission

<p><b>Name:</b> {{ $name }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p style="text-align: justify"><b>Message:</b> <br>{{ $message }}</p>

<small> <b>This email is sent via the contact form on our website.</b></small>

<small>
{{ $data->company_street }},<br>
{{ $data->company_state}},<br>
{{ $data->company_zip_code}},<br>
{{ $data->company_country }}<br>
{{ $data->company_email }}
</small>

</x-mail::message>
