@extends('main.layouts.base')
@section('title')
    Verify
@endsection

@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Verify</li>
					</ol>
				</div>
			</nav>

			<div class="container pb-5">
				<div class="heading mb-4">
					<h2 class="title">Verify Your Account</h2>
					<p>An email has been sent to your email address <a class="font-weight-bold" target="_blank" href="mailto:myowatop@mail.com">mayowatop***@mail.com</a>. Check the spam filter if you do not see any mail</p>
				</div><!-- End .heading -->

				<form action="#">
				

					<div class="form-footer">
						<button type="submit" class="btn btn-primary">Resend Email</button>
					</div><!-- End .form-footer -->
				</form>
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection