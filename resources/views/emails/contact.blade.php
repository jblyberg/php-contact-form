@component('mail::message')
# You have received a message from the contact form

- Name: {{ $name }}
- Email: {{ $email }}
@if( !empty($phone))
- Phone: {{ $phone }}
@endif

## Message:

{{ $message }}

@component('mail::button', ['url' => 'mailto:' . $email])
    Email {{ $name }}
@endcomponent

@endcomponent