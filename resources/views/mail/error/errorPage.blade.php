@component('mail::message')
# {{ $content['title'] }}

{{ $content['body'] }}

{{ config('app.name') }}
@endcomponent