<?php
    use Illuminate\Routing\UrlGenerator;

?>
[slot]: {{asset('/assets/images/logo.png')}} "Logo"
@component('mail::message')
    @component('mail::h3') 
    Welcome to HOMEITALL 
    @endcomponent
    @component('mail::p') 
    Hello {{session('mailer')->firstname}} 
    @endcomponent
    @component('mail::p') 
    You can shop get the best available products at our website 
    @endcomponent
    @component('mail::p') 
    Please Click on the link below to verify your account.
    @endcomponent 
   

<br>
<a  class="button button-primary" href="{{URL::to('/')}}/user/verify/{{session('mailer')->remember_token}}">Verify Email</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
