@component('mail::message')
# Introduction

There is message from {{$name}}

With email {{$email}}

The message is:
{{$message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
