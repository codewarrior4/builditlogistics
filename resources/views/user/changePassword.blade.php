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
						<div class="heading">
							<h2 class="title">Password Reset</h2>
							<p>Welcome , {{$user->firstname . ' '. $user->lastname}}</p>
						</div><!-- End .heading -->

						<form method="post" action="/user/changepassword">
						@csrf
							<input type="text" name="new" class="form-control" minlenght="8" maxlength="30" placeholder="New password" required>
							<input type="text" name="cnew" class="form-control" minlenght="8" maxlength="30" placeholder="Confirm New Password" required>

                            <input type="hidden" name="id" value="{{$user->id}}">
							<div class="form-footer">
                                <button type="submit" class="btn btn-primary">Change Password</button>
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
						
					</div><!-- End .col-md-6 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection