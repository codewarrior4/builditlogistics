<?php
    use Illuminate\Routing\UrlGenerator;
?>

@component('mail::message')
 Hello {{$user->firstname}}
    @component('mail::h3') 
      Welcome to HOMEITALL 
    @endcomponent
    @component('mail::p') 
      You requested to change your password 
    @endcomponent
    @component('mail::p') 
      Please Click on the link below to change your password 
    @endcomponent


<a class="button button-primary" href="{{URL::to('/')}}/user/password/{{$user->remember_token}}">Change password</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
