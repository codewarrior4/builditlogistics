<?php 
use Illuminate\Routing\UrlGenerator;
?>
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="{{URL::to('/')}}{{asset('/assets/images/logo.png')}}" class="logo" alt="Homeitall Logo">
@endif
</a>
</td>
</tr>
