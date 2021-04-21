@extends('main.layouts.base')
@section('title')
    Billing And Shipping
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
				<div class="row">
					<div class="col-lg-9 order-lg-last dashboard-content">
						<h2>Billing  Information</h2>
                        <hr>
						<form action="#">
							<div class="row">
								<div class="col-sm-11">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-name">Address 1</label>
												<input type="text" class="form-control" id="acc-name" name="address1" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group ">
												<label for="acc-lastname">Address 2 <em>(optional)</em></label>
												<input type="text" class="form-control" id="acc-lastname" name="address2" >
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">Country</label>
												<input type="text" class="form-control" id="acc-lastname" name="country" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">City</label>
												<input type="text" class="form-control" id="acc-lastname" name="city" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->
                                        <div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-name">Email</label>
												<input type="text" class="form-control"  id="acc-name" name="email" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">Phone</label>
												<input type="text" class="form-control" id="acc-lastname" name="phone" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->
									</div><!-- End .row -->
								</div><!-- End .col-sm-11 -->
							</div><!-- End .row -->

							<div class="mb-2"></div><!-- margin -->

							
							<div class="form-footer">

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div><!-- End .form-footer -->
						</form>

                        <h2>Shipping  Information</h2>
                        <hr>
						<form action="#">
							<div class="row">
								<div class="col-sm-11">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-name">Address 1</label>
												<input type="text" class="form-control" id="acc-name" name="address1" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group ">
												<label for="acc-lastname">Address 2 <em>(optional)</em></label>
												<input type="text" class="form-control" id="acc-lastname" name="address2" >
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">Country</label>
												<input type="text" class="form-control" id="acc-lastname" name="country" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">City</label>
												<input type="text" class="form-control" id="acc-lastname" name="city" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->
                                        <div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-name">Email</label>
												<input type="text" class="form-control"  id="acc-name" name="email" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->


										<div class="col-md-6">
											<div class="form-group required-field">
												<label for="acc-lastname">Phone</label>
												<input type="text" class="form-control" id="acc-lastname" name="phone" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->
									</div><!-- End .row -->
								</div><!-- End .col-sm-11 -->
							</div><!-- End .row -->

							<div class="mb-2"></div><!-- margin -->

							
							<div class="form-footer">

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-lg-9 -->

					<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>

							<ul class="list">
								<li ><a href="index">Account Dashboard</a></li>
								<li class="active"><a href="billing">Billing And Shipping</a></li> 
								<li><a href="orders">My Orders</a></li>
							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection