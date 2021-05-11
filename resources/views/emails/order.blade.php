<?php
    use Illuminate\Routing\UrlGenerator;
    
?>

@component('mail::message')
 New Message on Order #{{$details->orderid}}

{{$details->message}}


<a class="button button-primary" href="{{URL::to('/')}}/user/order/{{$details->orderid}}">View More on our website</a>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
