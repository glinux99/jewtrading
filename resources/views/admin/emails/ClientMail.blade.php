@component('mail::message')
# {{ $data['object']}}

{{$data['message']}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
