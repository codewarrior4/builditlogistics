<?php
    use Illuminate\Routing\UrlGenerator;
?>

@component('mail::message')
 Hello {{session('user')->firstname}}

    <h4>Welcome to our BuildItCity </h4> <br>
    <p>You can shop get the best available products at our website</p>
    <p>Please Click on the link below to verify your account.</p>


<a  class="button button-primary" href="{{URL::to('/')}}/user/verify/{{session('user')->remember_token}}">Verify Email</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
