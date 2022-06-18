@component('mail::message')
# Introduction

MERCI D ETRE LA

@component('mail::button', ['url' => $url, 'color'=])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
