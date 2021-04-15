@extends('main.layouts.base')
@section('title')
    Register
@endsection

@section('content')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Register</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-5">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="heading">
							<h2 class="title">Register</h2>
							<p>If you don't have an account with us, please sign up.</p>
						</div><!-- End .heading -->

						<form action="/user/register" method="post">
							@csrf
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
							<input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
							<input type="text" name="city" class="form-control" placeholder="city" required>
                            <input type="text" name="zip" class="form-control" placeholder="Zip code" required>
							<input type="text" name="address" class="form-control" placeholder="Address" required>
							<input type="email" name="email" class="form-control" placeholder="Email Address" required>
							<input type="password" name="password" class="form-control" placeholder="Password" required>

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Register</button>
							</div><!-- End .form-footer -->
                            <div class="form-footer">
                                <a href="/user/login" class="">Have an account already? Sign in</a>
                            </div>
							
						</form>
							@if (session('msg'))
								<div class="alert alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										<span class="sr-only">Close</span>
									</button>
									<strong>{{session('msg')}}</strong>
								</div>
							@endif
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection