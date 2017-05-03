@component('mail::message')
# Welcome to Bandaid!

Dear {{ $user['first_name'] }},

Thank you for joining Bandaid!

@component('mail::button', ['url' => 'http://music.dev/profiles/' . {{ $user['username'] .'/activate/' . {{ $data['token'] }}])
Activate your account!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
