@extends('main.layouts.base')
@section('title')
    About us
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
@endsection
@section('content')
<main class="main">
			<div class="container mt-2 pt-0">
				<div class="outer-container page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('assets/images/page-header-bg.jpg');">
					<div class="container pl-5">
						<h1><span>ABOUT US</span>
							OUR COMPANY</h1>
						
					</div><!-- End .container -->
				</div><!-- End .page-header -->
			</div><!-- End .container -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container pt-0 mb-3">
				<div class="about-section">
					<h2 class="subtitle">OUR STORY</h2>
					<p>{!!$about->description!!}</p>
				</div><!-- End .about-section -->
			</div><!-- End .container -->

			<div class="container pt-0 mb-3">
				<div class="features-section">
					<h2 class="subtitle">WHY CHOOSE US</h2>

					<div class="row">
						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-shipped"></i>

								<div class="feature-box-content">
									<h3>Free Shipping</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-us-dollar"></i>

								<div class="feature-box-content">
									<h3>100% Money Back Guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-online-support"></i>

								<div class="feature-box-content">
									<h3>Online Support 24/7</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->
					</div><!-- End .row -->
				</div><!-- End .features-section -->
			</div><!-- End .container -->

		

			<div class="container pt-0">
				<div class="counters-section">
					<div class="row">
						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="200" data-speed="2000" data-refresh-interval="50">200</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">MILLION CUSTOMERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="1800" data-speed="2000" data-refresh-interval="50">1800</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">TEAM MEMBERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>HR</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->
					</div><!-- End .row -->
				</div><!-- End .counters-section -->
			</div><!-- End .container -->	
		</main><!-- End .main -->
@endsection