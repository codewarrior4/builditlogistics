<?php
    use Illuminate\Routing\UrlGenerator;
?>

@component('mail::message')
 Hello {{$user->firstname}}
    
    <h4>Welcome to our BuildItCity </h4> <br>
    <p>You requested to change your password</p>
    <p>Please Click on the link below to change your password.</p>


<a class="button button-primary" href="{{URL::to('/')}}/user/password/{{$user->remember_token}}">Change password</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
