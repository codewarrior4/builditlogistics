@component('mail::message')
# Hello {{session('Name')}}

[slot]: {{asset('/assets/images/logo.png')}} "Logo"
Welcome to HOMEITALL 
You can shop get the best available products at our website
<!-- <img src="/assets/images/logo-black.png" class="logo" alt="Laravel Logo"> -->
@component('mail::button', ['url' => 'https://builditlogstics.emgss.net/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
