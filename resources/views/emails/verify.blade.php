<?php
    use Illuminate\Routing\UrlGenerator;
    $message ='    <h4>Welcome to our BuildItCity </h4> <br>
    <p>You can shop get the best available products at our website</p>
    <p>Please Click on the link below to verify your account.</p>';
?>

@component('mail::message')
 Hello {{session('user')->firstname}}

{!! $message !!}


<a  class="button button-primary" href="{{URL::to('/')}}/user/verify/{{session('user')->remember_token}}">Verify Email</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
