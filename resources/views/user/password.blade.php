@extends('main.layouts.base')
@section('title')
    Chaneg password
@endsection

@section('content')
@if (session('success'))
<script>
	Swal.fire({
		icon: 'success',
		title: 'Done',
		text: '{{session("success")}}',
		// footer: '<a href="/cart">View Cart</a>'
		})
</script>	

@endif

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
			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li><a href="index">Account Dashboard</a></li>
						<li><a href="billing">Billing And Shipping</a></li> 
						<li><a href="orders">My Orders</a></li>
						<li class="active"><a href="/user/change">Change Password</a></li>
						<li><a href="/user/logout">Logout</a></li>
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
			<div class="col-lg-9 order-lg-last dashboard-content">

				<form action="/user/userpassword" method="post">
						<div>
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

			
		</div><!-- End .row -->
	</div><!-- End .container -->
</main><!-- End .main -->
@endsection