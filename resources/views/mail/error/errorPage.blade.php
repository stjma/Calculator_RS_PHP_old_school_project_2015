@component('mail::message')
# {{ $content['title'] }}

{{ $content['body'] }}

{{--@component('mail::table')--}}
{{--http://itsolutionstuff.com/post/laravel-54-send-email-using-markdown-mailablesexample.html--}}
{{--| Laravel       | Table         | Example  |--}}
{{--| ------------- |:-------------:| --------:|--}}
{{--| PHP           | Centered      | $100     |--}}
{{--| Laravel       | Right-Aligned | $200     |--}}
{{--@endcomponent--}}

{{--@component('mail::button', ['url' => ''])--}}
{{--{{ $content['button'] }}--}}
{{--@endcomponent--}}

{{--Thanks,--}}
{{ config('app.name') }}
@endcomponent