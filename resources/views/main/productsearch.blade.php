@extends('main.layouts.base')
@section('title')
    Products Search Result
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo.png
@endsection
@section('content')
<main class="main">
			<div class="container container-not-boxed">
				<div class="info-boxes-slider owl-carousel owl-theme" data-owl-options="{
					'dots': false,
					'loop': false,
					'responsive': {
						'576': {
							'items': 2
						},
						'992': {
							'items': 3
						}
					}
				}">
				<div class="info-box info-box-icon-left">
							<i class="icon-shipping font-35 pt-1"></i>

							<div class="info-box-content pt-1">
								<h4>FREE SHIPPING &amp; RETURN</h4>
								<p class="text-body">Free shipping on all orders over &#8358; 5,000</p>
							</div><!-- End .info-box-content -->
						</div><!-- End .info-box -->

						<div class="info-box info-box-icon-left">
							<i class="icon-money pt-1"></i>

							<div class="info-box-content">
								<h4>MONEY BACK GUARANTEE</h4>
								<p class="text-body">100% money back guarantee on damaged goods returned</p>
							</div><!-- End .info-box-content -->
						</div><!-- End .info-box -->

						<div class="info-box info-box-icon-left">
							<i class="icon-support pt-1"></i>

							<div class="info-box-content">
								<h4>ONLINE SUPPORT 24/7</h4>
								<p class="text-body">Use the whatsApp link to have a chat with our 24hr support agent.</p>
							</div><!-- End .info-box-content -->
						</div><!-- End .info-box -->

				<div class="outer-container category-banner banner banner-big-sale" style="background: #35393C no-repeat center/cover url(assets/images/banners/banner-top.jpg)">
					<div class="banner-content row align-items-center px-5">
						<div class="col-md-9">
							<h2 class="text-white text-uppercase mb-md-0">
								<b class="d-inline-block mr-3 mb-1">Big Sale</b>
								All new fashion brands items up to 70% off
								<small class="text-transform-none align-middle">Online Purchases Only</small>
							</h2>
						</div>
						<div class="col-md-3 text-center text-md-right">
							<a class="btn btn-light bg-white btn-lg ls-10" href="#">View Sale</a>
						</div>
					</div>
				</div>
			</div><!-- End .container-not-boxed -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Product Search</a></li>
					</ol>
				</div>
			</nav>

			<div class="container pb-3">
				

				<div class="row">

					@if (count($products) == 0)
						<div class="col-sm-12">
								<div class="jumbotron jumbotron-fluid">
									<h1 class="display-4 text-center">No Products Available in this Category</h1>
									
									<hr class="my-4">
									<a  class="d-flex justify-content-center btn btn-primary " href="/products">Continue Shopping</a>
								</div>
							</div>
							
					@else
						@foreach ($products as $product)
							<div class="col-sm-12 col-sm-4 col-md-3 col-xl-3">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="/product/{{$product->pid}}">
											<img src="/uploads/{{$product->banner}}" style="min-height:170px !important;max-height:170px !important">
										</a>
										<a href="/product/{{$product->pid}}" class="btn-quickview" title="View">View</a> 
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="/category/{{$product->category}}" class="product-category">category</a>
											</div>
										</div>
										<h2 class="product-title">
											<a href="/product/{{$product->pid}}">{{$product->pname}}</a>
										</h2>
										<div class="price-box">
											<span class="old-price">&#8358; {{number_format($product->compare_price,2)}}</span>
											<span class="product-price">&#8358; {{number_format($product->price,2)}}</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div>
						@endforeach
					@endif


					
				</div>
		</main><!-- End .main -->
@endsection