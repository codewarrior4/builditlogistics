@extends('main.layouts.base')
@section('title')
    Password Reset
@endsection

@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Password Reset</li>
					</ol>
				</div>
			</nav>

			<div class="container pb-5">
				<div class="heading mb-4">
                 
					<h2 class="title">Hello {{$user->firstname}}</h2>
					<h4 class="title">Reset your Account Password</h4>

					<p>An email has been sent to your email address <a class="font-weight-bold" target="_blank" href="mailto:{{$user->email}}">{{$user->email}}</a>. Check the spam filter if you do not see any mail</p>
				</div><!-- End .heading -->

				<form action="#">
				

					<div class="form-footer">
						<a href="/user/forgot" class="btn btn-primary">Resend Email</a>
					</div><!-- End .form-footer -->
				</form>
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection