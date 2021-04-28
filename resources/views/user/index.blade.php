@extends('main.layouts.base')
@section('title')
    My Account
@endsection

@section('content')


<main class="main">
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">My Account</li>
			</ol>
		</div>
	</nav>
	
	<div class="container mb-5">
	
		@if (session('msg'))
			<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<strong>{{session('msg')}}</strong>
			</div>
		@endif
		
		<div class="row">
			<div class="col-lg-9 order-lg-last dashboard-content">
				<h2>Edit Account Information</h2>

				<form method="post" action="/user/update">
					<div class="row">
						<div class="col-sm-11">
							<div class="row">
								<div class="col-md-6">
									@csrf
									<div class="form-group required-field">
										<label for="acc-name">First Name</label>
										<input type="text" name="firstname" value="{{session('user')->firstname}}" class="form-control"  name="firstname" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->

									<input type="hidden" name="id" value="{{session('user')->id}}">
								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-lastname">Last Name</label>
										<input type="text" name="lastname" value="{{session('user')->lastname}}"class="form-control"  name="lastname" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-name">Address</label>
										<input type="text" name="address" value="{{session('user')->address}}" class="form-control"  name="address" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->


								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-name">State</label>
										<input type="text" name="state" value="{{session('user')->state}}"class="form-control"  name="state" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-name">Zip Code</label>
										<input type="text" name="zip" value="{{session('user')->zip}}"class="form-control"  name="zip" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->


								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-lastname">City</label>
										<input type="text" class="form-control" name="city" value="{{session('user')->city}}" name="city" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-name">Email</label>
										<input type="text" name="email" value="{{session('user')->email}}"class="form-control" disabled  name="email" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->


								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-lastname">Phone</label>
										<input type="text" name="phone" value="{{session('user')->phone}}" class="form-control"  name="phone" required>
									</div><!-- End .form-group -->
								</div><!-- End .col-md-4 -->
							</div><!-- End .row -->
						</div><!-- End .col-sm-11 -->
					</div><!-- End .row -->

					<div class="mb-2"></div><!-- margin -->
					<div class="required text-right">* Required Field</div>
					<div class="form-footer">

						<div class="form-footer-right">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div><!-- End .form-footer -->
				</form>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="change-pass-checkbox" value="1">
						<label class="custom-control-label" for="change-pass-checkbox">Change Password</label>
					</div><!-- End .custom-checkbox -->
					
					<form action="/user/userpassword" method="post">
						<div id="account-chage-pass">
							<h3 class="mb-2">Change Password</h3>
							<div class="row">
								@csrf
								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-pass2">Password</label>
										<input type="password" class="form-control" id="acc-pass2" name="new">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group required-field">
										<label for="acc-pass3">Confirm Password</label>
										<input type="password" class="form-control" id="acc-pass3" name="cnew">
									</div><!-- End .form-group -->
								</div><!-- End .col-md-6 -->
							</div><!-- End .row -->
							<div class="row">
							<div class="form-footer-right">
							<button type="submit" class="btn btn-primary">Change Password</button>
						</div>
							</div>
						</div><!-- End #account-chage-pass -->
					</form>
					
			</div><!-- End .col-lg-9 -->

			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li class="active"><a href="index">Account Dashboard</a></li>
						<li><a href="billing">Billing And Shipping</a></li> 
						<li><a href="orders">My Orders</a></li>
						<li><a href="/user/logout">Logout</a></li>
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</main><!-- End .main -->
@endsection