<?php
    use Illuminate\Routing\UrlGenerator;
    
?>

@component('mail::message')
 New Message on contact from {{$details->email}}

    <table rules="all" style="border-color: #666;" cellpadding="10">
        <tr style='background: #eee;'>
            <td><strong>Name:</strong> </td>
            <td>{{$details->name}}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong> </td>
            <td>{{$details->email}}</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong> </td>
            <td>{{$details->phone}}</td>
        </tr>
        <tr>
            <td><strong>Message:</strong> </td>
            <td>{{$details->message}}</td>
        </tr>
    </table>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
