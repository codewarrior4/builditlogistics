@extends('main.layouts.base')
@section('title')
    Login
@endsection

@section('content')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Login</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-5">
				<div class="row">
					<div class="col-md-8 offset-md-2">
					@if (session('msg'))
								<div class="alert alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										<span class="sr-only">Close</span>
									</button>
									<strong>{{session('msg')}}</strong>
								</div>
							@endif
						<div class="heading">
							<h2 class="title">Login</h2>
							<p>If you have an account with us, please log in.</p>
						</div><!-- End .heading -->

						<form method="post" action="/user/login">
						@csrf
							<input type="email" name="email" class="form-control" placeholder="Email Address" required>
							<input type="password" name="password" class="form-control" placeholder="Password" required>

							<div class="form-footer">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
								<a href="/user/forgot" class="forget-pass"> Forgot your password?</a>
							</div><!-- End .form-footer -->
							
                            <div class="form-footer">
                                <a href="/user/register" class="">No account yet Sign up</a>
                            </div>
						</form>
						
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection