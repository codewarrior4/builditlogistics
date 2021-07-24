<?php
    use Illuminate\Routing\UrlGenerator;
    
?>

@component('mail::message')
 New Message on contact from {{$details['email']}}

        <tr style='background: #eee;'>
            <td><strong>Name:</strong> </td>
            <td>{{$details['name']}}</td>
        </tr>
        <tr style='background: #eee;'>
            <td><strong>Email:</strong> </td>
            <td>{{$details['email']}}</td>
        </tr>
        <tr style='background: #eee;'>
            <td><strong>Phone:</strong> </td>
            <td>{{$details['phone']}}</td>
        </tr>
        <tr style='background: #eee;'>
            <td><strong>Message:</strong> </td>
            <td>{{$details['message']}}</td>
        </tr>
  



Thanks,<br>
{{ config('app.name') }}
@endcomponent
