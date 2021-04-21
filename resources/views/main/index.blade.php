@extends('main.layouts.base')

@section('title') Home page @endsection

@section('content')
@if (session('success'))
<script>
	Swal.fire({
		icon: 'success',
		title: 'Done',
		text: '{{session("success")}}',
		footer: '<a href="/cart">View Cart</a>'
		})
</script>	

@endif

@if(session('error'))
<script>
	Swal.fire({
		icon: 'info',
		title: 'Oops!',
		text: '{{session("error")}}',
		footer: '<a href="/cart">View Cart</a>'
		})
</script>	
@endif
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
						@foreach ($sliders as $slider)
							<div class="home-slide home-slide1 banner banner-md-vw" >
							<img class="owl-lazy slide-bg" src="/uploads/{{$slider->photo}}" data-src="/uploads/{{$slider->photo}}" style="max-height:500px !important" alt="slider image">
							<div class="banner-layer banner-layer-middle">
								<h4 class="m-b-3" style="color:white !important">{{$slider->header}}</h4>
								<h2 class="font-script mb-0" style="color:white !important">{{$slider->detail}}</h2>
								<a href="{{$slider->url}}"  style="color:white !important" class="btn btn-dark btn-lg ls-10">{{$slider->button}}</a>
							</div>
						</div>
						@endforeach
						
					</div>

					<div class="home-products-container text-center">
						<div class="row">
							<div class="col-md-6 mb-2">
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
									@foreach ($featured as $feature)
										<div class="product-default">
											<figure>
												<a href="/products">
													<img src="/uploads/{{$feature->banner}}" alt="product" width="300" height="300">
												</a>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="/category/{{$feature->category}}" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product/{{$feature->pid}}">{{$feature->pname}}</a>
												</h3>
												
												<div class="price-box">
													<span class="old-price">&#8358; {{number_format($feature->compare_price,2)}}</span>
													<span class="product-price">&#8358; {{number_format($feature->price,2)}}</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>
										@endforeach
									</div>
								</div>
							</div><!-- End .col-md-4 -->


							<div class="col-md-6 mb-2">
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
										@foreach ($latest as $latest)
										<div class="product-default">
											<figure>
												<a href="/products">
													<img src="/uploads/{{$latest->banner}}" alt="product" width="300" height="300">
												</a>
											</figure>
											<div class="product-details">
												<div class="category-list">
													<a href="/category/{{$latest->category}}" class="product-category">category</a>
												</div>
												<h3 class="product-title">
													<a href="product/{{$latest->pid}}">{{$latest->pname}}</a>
												</h3>
												
												<div class="price-box">
													<span class="old-price">&#8358; {{number_format($latest->compare_price,2)}}</span>
													<span class="product-price">&#8358; {{number_format($latest->price,2)}}</span>
												</div><!-- End .price-box -->
											</div><!-- End .product-details -->
										</div>
										@endforeach

									</div>
								</div>
							</div><!-- End .col-md-4 -->
						</div><!-- End .row -->
					</div><!-- End .row.home-products -->

                    <!-- Promo -->
					{{--<div class="banners-slider owl-carousel owl-theme mb-4 mb-md-2">
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
					</div> --}}
				</div><!-- End .container-not-boxed -->

				<div class="container">
					<div class="products-container bg-white text-center mb-2 pb-5">
						<div class="row product-ajax-grid mb-2">
							@foreach ($random as $product)
								<div class="col-6 col-sm-4 col-md-3 col-xl-5col">
									<div class="product-default inner-quickview inner-icon">
										<figure>
											<a href="/product/{{$product->pid}}">
											<img style="height:123px !important" src="/uploads/{{$product->banner}}">
												<img style="height:123px !important" src="/uploads/{{$product->image1}}">
											</a>
											<div class="label-group">
												<span class="product-label label-sale">{{$product->percentage}}%</span>
											</div>
											<div class="btn-icon-group">
												
													<a href="/cart/{{$product->pid}}/1/{{$product->price}}" class="btn-icon btn-add-cart" ><i class="icon-shopping-cart"></i></a>
											
											</div>
											<a href="/product/{{$product->pid}}" onclick="window.location('/product/{{$product->pid}}')" class="btn-quickview" title="Quick View">Quick View</a>
										</figure>
										<div class="product-details">
											<div class="category-wrap">
												<div class="category-list">
													<a href="/category/{{$product->catgeory}}" class="product-category">category</a>
												</div>
												<a href="/wishlist/{{$product->pid}}/{{$product->price}}" class="btn-icon-wish"><i class="icon-heart"></i></a>
											</div>
											<h3 class="product-title">
												<a href="/product/{{$product->pid}}">{{$product->pname}}</a>
											</h3>
											{{--	<div class="ratings-container">
												<div class="product-ratings">
													<span class="ratings" style="width:100%"></span><!-- End .ratings -->
													<span class="tooltiptext tooltip-top"></span>
												</div><!-- End .product-ratings --> 
											</div><!-- End .product-container -->--}}
											<div class="price-box">
												<span class="old-price">&#8358; {{number_format($product->compare_price,2)}}</span>
												<span class="product-price">&#8358; {{number_format($product->price,2)}}</span>
											</div><!-- End .price-box -->
										</div><!-- End .product-details -->
									</div>
								</div>
							
							@endforeach
						</div>
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
				
@endsection