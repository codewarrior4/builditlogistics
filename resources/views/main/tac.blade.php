@extends('main.layouts.base')
@section('title')
    Terms And conditions
@endsection

@section('content')
<main class="main">
			<div class="container mt-2 pt-0">
				<div class="outer-container page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('assets/images/page-header-bg.jpg');">
					<div class="container pl-5">
						<h1><span>Terms And </span>
                        conditions</h1>
					
					</div><!-- End .container -->
				</div><!-- End .page-header -->
			</div><!-- End .container -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">TAC</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container pt-0 mb-3">
				<div class="about-section">
					<h2 class="subtitle">TAC</h2>
					<p>{!!$tac->description!!}</p>

					
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

			
		</main><!-- End .main -->
@endsection