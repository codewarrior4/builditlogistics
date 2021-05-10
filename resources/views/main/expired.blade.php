@extends('main.layouts.base')
@section('title')
    Link Expired
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
@endsection
@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Error</li>
					</ol>
				</div>
			</nav>

			<div class="container pb-5">
				<div class="heading mb-4">
					<h2 class="title">Invalid Link</h2>
					<h4 class="title">Please check your email again or request for another link</h4>

				</div><!-- End .heading -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection