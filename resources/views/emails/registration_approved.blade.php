@component('mail::message')
# Dear {{$data->username}},
<br>
We are pleased to inform you that your account registration request has been accepted. You can now log in to our system
using the following credentials:
<br>
@component('mail::panel')
**Email:** {{$data->email}}
**Password:** {{$data->password}}
@endcomponent
<br>
Please note that for security purposes and email verification, we recommend you promptly reset your password upon logging in.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/auth/create_reset/' . $data->token . ''])
Click here to Reset Password
@endcomponent

Thank you for joining our system!
<br>

Best regards,<br>
{{ config('app.name') }}
@endcomponent
