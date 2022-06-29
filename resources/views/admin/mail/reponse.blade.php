@component('mail::message')
# {{ $data ['object']}}

{{ $data['message']}}


Meric,<br>
{{ config('app.name') }}
@endcomponent
