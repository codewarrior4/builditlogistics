@component('mail::message')
 Hello {{session('user')->firstname}}

    <h4>Welcome to our BuildItCity </h4> <br>
    <p>You can shop get the best available products at our website</p>
    <p>Please Click on the click below to verify your account.</p>


<a  class="button button-primary" href="http://127.0.0.1:8000/user/verify/{{session('user')->remember_token}}">Verify Email</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
