@extends('main.layouts.base')
@section('title')
    Forgot password
@endsection

@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
					</ol>
				</div>
			</nav>

			<div class="container pb-5">
				<div class="heading mb-4">
					<h2 class="title">Reset Password</h2>
					<p>Please enter your email address below to receive a password reset link.</p>
				</div><!-- End .heading -->

				<form action="/user/forgot" method="post">
					@csrf
					<div class="form-group required-field">
						<label for="reset-email">Email</label>
						<input type="email" class="form-control" id="reset-email" name="email" required>
					</div><!-- End .form-group -->

					<div class="form-footer">
						<button type="submit" class="btn btn-primary">Reset My Password</button>
					</div><!-- End .form-footer -->
					@if (session('msg'))
								<div class="alert alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										<span class="sr-only">Close</span>
									</button>
									<strong>{{session('msg')}}</strong>
								</div>
							@endif
				</form>

			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection