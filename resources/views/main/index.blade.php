@extends('main.layouts.base')

@section('title') Home page @endsection

@section('content')
<main class="main">
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

					<div class="home-slider outer-container w-auto owl-carousel owl-theme owl-carousel-lazy show-nav-hover nav-large nav-outer mb-2">
						<div class="home-slide home-slide1 banner banner-md-vw bg-white">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="assets/images/slider/slide-1.jpg" alt="slider image">
							<div class="banner-layer banner-layer-middle">
								<h4 class="m-b-3">Find the Boundaries. Push Through!</h4>
								<h2 class="font-script mb-0">Jeans Sale</h2>
								<h3 class="upto-text m-b-2"><em>up<br>to</em>80% OFF</h3>
								<h5 class="d-inline-block mb-0 text-uppercase ls-n-20">
									Starting At
									<b class="coupon-sale-text text-white bg-secondary">$<em>199</em>99</b>
								</h5>
								<a href="category.html" class="btn btn-dark btn-lg ls-10">Shop Now!</a>
							</div><!-- End .banner-layer -->
						</div><!-- End .home-slide -->

						<div class="home-slide home-slide2 banner banner-md-vw">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="assets/images/slider/slide-2.jpg" alt="slider image">
							<div class="banner-layer banner-layer-middle">
								<h2 class="ls-n-25 mb-0">Women's Business Fashion</h2>
								<h3 class="upto-text m-b-2"><em>up<br>to</em>60% OFF</h3>
								<h5 class="text-uppercase d-inline-block mb-0 align-top ls-n-20">Starting at
									<span class="text-secondary ml-2 mr-5 pr-sm-5">$<em class="ls-n-20">29</em>99</span>
								</h5>
								<a href="category.html" class="btn btn-dark btn-outline ls-10 btn-xl">Shop Now!</a>
							</div>
						</div><!-- End .home-slide -->
					</div><!-- End .home-slider -->

					<div class="home-products-container text-center">
						<div class="row">
							<div class="col-md-4 mb-2">
								<div class="home-products bg-white px-4 pb-2 pt-4">
									<h3 class="section-sub-title mt-1 m-b-1">Featured Products</h3>

									<div class="owl-carousel owl-theme nav-image-center nav-thin px-3 " data-owl-options="{
										'dots': false,
										'nav': true,
										'responsive': {
											'480': {
												'items': 2
											},
											'768': {
												'items': 1
											}
										}
									}">
										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-6.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-hot">HOT</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-3.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-4.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-10%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-7.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-10.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-30%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>
									</div>
								</div>
							</div><!-- End .col-md-4 -->

							<div class="col-md-4 mb-2">
								<div class="home-products bg-white px-4 pb-2 pt-4">
									<h3 class="section-sub-title mt-1 m-b-1">Best Sellers</h3>

									<div class="owl-carousel owl-theme nav-image-center nav-thin px-3" data-owl-options="{
										'dots': false,
										'nav': true,
										'responsive': {
											'480': {
												'items': 2
											},
											'768': {
												'items': 1
											}
										}
									}">
										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-5.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-20%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-8.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-15.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-10%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-7.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-10.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-30%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>
									</div>
								</div>
							</div><!-- End .col-md-4 -->

							<div class="col-md-4 mb-2">
								<div class="home-products bg-white px-4 pb-2 pt-4">
									<h3 class="section-sub-title mt-1 m-b-1">New Arrivals</h3>

									<div class="owl-carousel owl-theme nav-image-center nav-thin px-3" data-owl-options="{
										'dots': false,
										'nav': true,
										'responsive': {
											'480': {
												'items': 2
											},
											'768': {
												'items': 1
											}
										}
									}">
										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-17.jpg" alt="product" width="300" height="300">
												</a>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-11.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-12.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-10%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>

										<div class="product-default">
											<figure>
												<a href="product.html">
													<img src="assets/images/products/product-2.jpg" alt="product" width="300" height="300">
													<img src="assets/images/products/product-16.jpg" alt="product" width="300" height="300">
												</a>
												<div class="label-group">
													<span class="product-label label-sale">-30%</span>
												</div>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="category.html" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product.html">Product Short Name</a>
												</h3>
												<div class="ratings-container">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span><!-- End .ratings -->
														<span class="tooltiptext tooltip-top"></span>
													</div><!-- End .product-ratings -->
												</div><!-- End .product-container -->
												<div class="price-box">
													<span class="old-price">$59.00</span>
													<span class="product-price">$49.00</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>
									</div>
								</div>
							</div><!-- End .col-md-4 -->
						</div><!-- End .row -->
					</div><!-- End .row.home-products -->

                    <!-- Promo -->
					<div class="banners-slider owl-carousel owl-theme mb-4 mb-md-2">
						<div class="banner banner1 banner-sm-vw">
							<figure>
								<img src="assets/images/banners/banner-1.jpg" alt="banner">
							</figure>
							<div class="banner-layer banner-layer-middle">
								<h3 class="m-b-2">Porto Watches</h3>
								<h4 class="m-b-3 text-primary"><sup class="text-dark mr-1"><del>20%</del></sup>30%<sup>OFF</sup></h4>
								<a href="#" class="btn btn-sm btn-dark ls-10">Shop Now</a>
							</div>
						</div><!-- End .banner -->

						<div class="banner banner2 banner-sm-vw text-uppercase">
							<figure>
								<img src="assets/images/banners/banner-2.jpg" alt="banner">
							</figure>

							<h4 class="banner-layer-circle banner-layer-circle1">50<sup>%<small>OFF</small></sup></h4>

							<h4 class="banner-layer-circle banner-layer-circle2">70<sup>%<small>OFF</small></sup></h4>

							<h4 class="banner-layer-circle banner-layer-circle3 mb-0">30<sup>%<small>OFF</small></sup></h4>

							<div class="banner-layer banner-layer-middle text-center pr-lg-3">
								<div class="row align-items-lg-center">
									<div class="col-lg-7 text-lg-right">
										<h3 class="m-b-1 ls-10">Deal Promos</h3>
										<h4 class="pb-4 pb-lg-0 mb-0 text-body ls-10">Starting at $99</h4>
									</div>
									<div class="col-lg-5 text-lg-left px-0 px-xl-3">
										<a href="#" class="btn btn-sm btn-dark ls-10">Shop Now</a>
									</div>
								</div>
							</div>
						</div><!-- End .banner -->

						<div class="banner banner3 banner-sm-vw">
							<figure>
								<img src="assets/images/banners/banner-3.jpg" alt="banner">
							</figure>

							<h4 class="banner-layer-circle bg-secondary pt-2">40<sup>%<small>OFF</small></sup></h4>

							<div class="banner-layer banner-layer-bottom banner-layer-left banner-layer-brand">
								<img src="assets/images/banners/banner-brand.png" alt="banner brand">
							</div>
							<div class="banner-layer banner-layer-middle text-right">
								<h3 class="mb-1">Handbags</h3>
								<h4 class="m-b-1 ls-10 pb-3 text-secondary text-uppercase">Starting at $99</h4>
								<a href="#" class="btn btn-sm btn-dark ls-10">Shop Now</a>
							</div>
						</div><!-- End .banner -->
					</div>
				</div><!-- End .container-not-boxed -->

				<div class="container">
					<div class="products-container bg-white text-center mb-2 pb-5">
						<div class="row product-ajax-grid mb-2">
							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-1.jpg">
											<img src="assets/images/products/product-16.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-sale">-30%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-2.jpg">
											<img src="assets/images/products/product-16.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-sale">-20%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-3.jpg">
											<img src="assets/images/products/product-4.jpg">
										</a>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-11.jpg">
											<img src="assets/images/products/product-12.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-hot">HOT</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-5.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-hot">HOT</span>
											<span class="product-label label-sale">-30%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-6.jpg">
										</a>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-7.jpg">
											<img src="assets/images/products/product-10.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-sale">-15%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-8.jpg">
											<img src="assets/images/products/product-15.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-hot">HOT</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-9.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-hot">HOT</span>
											<span class="product-label label-sale">-10%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->

							<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
								<div class="product-default inner-quickview inner-icon">
									<figure>
										<a href="product.html">
											<img src="assets/images/products/product-13.jpg">
											<img src="assets/images/products/product-14.jpg">
										</a>
										<div class="label-group">
											<span class="product-label label-sale">-30%</span>
										</div>
										<div class="btn-icon-group">
											<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
										</div>
										<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
									</figure>
									<div class="product-details">
										<div class="category-wrap">
											<div class="category-list">
												<a href="category.html" class="product-category">category</a>
											</div>
											<a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
										</div>
										<h3 class="product-title">
											<a href="product.html">Product Short Name</a>
										</h3>
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<span class="tooltiptext tooltip-top"></span>
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
										<div class="price-box">
											<span class="old-price">$59.00</span>
											<span class="product-price">$49.00</span>
										</div><!-- End .price-box -->
									</div><!-- End .product-details -->
								</div>
							</div><!-- End .col-xl-5col -->
						</div><!-- End .row -->

						<a href="/products" class="btn btn-dark btn-md font1 mb-2">View more</a>
					</div><!-- End .container-box -->
				</div><!-- End .container -->

				<div class="container container-not-boxed">
					<div class="banner banner-big-sale mb-5" data-parallax="{'speed': 3.2, 'enableOnMobile': true}" data-image-src="assets/images/banners/banner-4.jpg">
						<div class="banner-content row align-items-center py-3 mx-0">
							<div class="col-md-9 pt-3">
								<h2 class="text-white text-uppercase mb-md-0 px-3">
									<b class="d-inline-block mr-3 mb-1">Big Sale</b>
									New Items 70% off discount
									<small class="text-transform-none align-middle">Online Purchases Only</small>
								</h2>
							</div>
							<div class="col-md-3 py-3 text-center text-md-right">
								<a class="btn btn-light btn-lg mr-3 ls-10" href="#">View Sale</a>
							</div>
						</div>
					</div>

					<div class="feature-boxes-container row mt-6 mb-1">
						<div class="col-md-4">
							<div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
								<i class="icon-earphones-alt"></i>

								<div class="feature-box-content">
									<h3 class="mb-0 pb-1">Customer Support</h3>
									<h5 class="m-b-3">Need Assistance?</h5>

									<p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-4">
							<div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
								<i class="icon-credit-card"></i>

								<div class="feature-box-content">
									<h3 class="mb-0 pb-1">Secured Payment</h3>
									<h5 class="m-b-3">Safe &amp; Fast</h5>

									<p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-4">
							<div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
								<i class="icon-action-undo"></i>

								<div class="feature-box-content">
									<h3 class="mb-0 pb-1">Returns</h3>
									<h5 class="m-b-3">Easy &amp; Free</h5>

									<p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->
					</div><!-- End .feature-boxes-container.row -->

					<hr class="mt-0 m-b-5">

					<!-- <div class="brands-slider owl-carousel owl-theme images-center pb-2">
						<img src="assets/images/brands/brand1.png" width="140" height="60" alt="brand">
						<img src="assets/images/brands/brand2.png" width="140" height="60" alt="brand">
						<img src="assets/images/brands/brand3.png" width="140" height="60" alt="brand">
						<img src="assets/images/brands/brand4.png" width="140" height="60" alt="brand">
						<img src="assets/images/brands/brand5.png" width="140" height="60" alt="brand">
						<img src="assets/images/brands/brand6.png" width="140" height="60" alt="brand">
					</div><!-- End .brands-slider -->

					<!-- <hr class="mt-4 mb-0">  -->
				</div><!-- End .container-not-boxed -->
			</main><!-- End .main -->	
		</main><!-- End .main -->
@endsection