@component('mail::message')
# Welcome to Bandaid!

Dear {{ $user['first_name'] }},

Thank you for joining Bandaid!

@component('mail::button', ['url' => ''])
Start now!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
