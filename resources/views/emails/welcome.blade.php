@component('mail::message')
# Hello {{session('Name')}}

Welcome to our website 
You can shop get the best available products at our website

@component('mail::button', ['url' => 'https://builditlogstics.emgss.net/'])
@component('mail::button', ['url' => 'https://builditlogstics.emgss.net/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
