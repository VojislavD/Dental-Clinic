@component('mail::message')
A New Message From: 
- Name: {{ $name }}
- Email: {{ $email }}
- Message: {{ $body }}
@endcomponent