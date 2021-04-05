@extends('main.layouts.base')
@section('title')
    Products
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
							<p class="text-body">Free shipping on all orders over $99</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box info-box-icon-left">
						<i class="icon-money pt-1"></i>

						<div class="info-box-content">
							<h4>MONEY BACK GUARANTEE</h4>
							<p class="text-body">100% money back guarantee</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box info-box-icon-left">
						<i class="icon-support pt-1"></i>

						<div class="info-box-content">
							<h4>ONLINE SUPPORT 24/7</h4>
							<p class="text-body">Lorem ipsum dolor sit amet.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->
				</div><!-- End .info-boxes-slider -->

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
						<li class="breadcrumb-item"><a href="#">All Products</a></li>
					</ol>
				</div>
			</nav>

			<div class="container pb-3">
				

				<div class="row">
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-1.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Fleece Jacket</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->

					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-2.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Ray Ban 5228</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$33.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->

					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-3.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-5.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-6.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-7.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-4.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-8.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-9.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-10.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-11.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-12.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->

					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-1.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Fleece Jacket</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->

					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-2.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Ray Ban 5228</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="product-price">$33.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->

					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-3.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-5.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-6.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-7.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-4.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-8.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-9.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="assets/images/products/product-10.jpg">
								</a>
								<a href="/product/1" class="btn-quickview" title="View">View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category" class="product-category">category</a>
									</div>
								</div>
								<h2 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h2>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<span class="old-price">$90.00</span>
									<span class="product-price">$70.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .col-xl-2 -->
				</div><!-- End .row -->

				<nav class="toolbox toolbox-pagination">
					<div class="toolbox-item toolbox-show">
						<label>Show:</label>

						<div class="select-custom">
							<select name="count" class="form-control">
								<option value="12">12</option>
								<option value="24">24</option>
								<option value="36">36</option>
							</select>
						</div><!-- End .select-custom -->
					</div><!-- End .toolbox-item -->

					<ul class="pagination toolbox-item">
						<li class="page-item disabled">
							<a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><span class="page-link">...</span></li>
						<li class="page-item">
							<a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
						</li>
					</ul>
				</nav>
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection