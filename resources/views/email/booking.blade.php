@component('mail::message')
You are successfully booked an appointment.
Appointment informations:  
- First Name: {{ $first_name }}
- Last Name: {{ $last_name }}
- Email: {{ $email }}
- Date: {{ $date }}
@endcomponent