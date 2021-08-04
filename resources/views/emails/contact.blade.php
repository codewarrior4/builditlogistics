<?php
    use Illuminate\Routing\UrlGenerator;

?>
@component('mail::message')
    <p style="font-size: 30px;">Welcome to HOMEITALL</p>  <br>
    <p style="font-size: 26px;">New Message on contact from {{$details['email']}} </p>
    <p style="font-size: 20px;">Name: {{$details['name']}}    </p>  
    <p style="font-size: 20px;">Email: {{$details['email']}}  </p>  
    <p style="font-size: 20px;">Phone: {{$details['phone']}}  </p>  
    <p style="font-size: 20px;">Message: {{$details['message']}} </p> 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
