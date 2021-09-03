<?php
    use Illuminate\Routing\UrlGenerator;
    
?>
[slot]: {{asset('/assets/images/logo.png')}} "Logo"
@component('mail::message')
<p style="font-size: 26px;color:black;">Welcome to HOMEITALL</p>  <br>
<p style="font-size: 20px;">New Message on Order #{{$details->orderid}} </p>
<p style="font-size: 18px;">{{$details->message}}</p>

<a class="button button-primary" href="{{URL::to('/')}}/user/order/{{$details->orderid}}">View More on our website</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
