@extends('main.layouts.base')
@section('title')
    Product Details
@endsection

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
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Product</li>
					</ol>
				</div>
			</nav>

			<div class="container">
				<div class="product-single-container product-single-default">
					<div class="row">
						<div class="col-md-5 product-single-gallery">
							<div class="product-slider-container">

								<div class="product-single-carousel owl-carousel owl-theme">
									<div class="product-item">
										<img class="product-single-image" src="/uploads/{{$product->banner}}" data-zoom-image="/uploads/{{$product->banner}}"/>
									</div>
									<div class="product-item">
										<img class="product-single-image" src="/uploads/{{$product->image1}}" data-zoom-image="/uploads/{{$product->image1}}"/>
									</div>
									<div class="product-item">
										<img class="product-single-image" src="/uploads/{{$product->image3}}" data-zoom-image="/uploads/{{$product->image3}}"/>
									</div>
									<div class="product-item">
										<img class="product-single-image" src="/uploads/{{$product->image2}}" data-zoom-image="/uploads/{{$product->image2}}"/>
									</div>
								</div>
								<!-- End .product-single-carousel -->
								<span class="prod-full-screen">
									<i class="icon-plus"></i>
								</span>
							</div>
							<div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
								<div class="owl-dot">
									<img src="/uploads/{{$product->banner}}"/>
								</div>
								<div class="owl-dot">
									<img src="/uploads/{{$product->image1}}"/>
								</div>
								<div class="owl-dot">
									<img src="/uploads/{{$product->image3}}"/>
								</div>
								<div class="owl-dot">
									<img src="/uploads/{{$product->image2}}"/>
								</div>
							</div>
						</div><!-- End .product-single-gallery -->

						<div class="col-md-7 product-single-details">
							<h1 class="product-title">{{$product->pname}}</h1>

							<div class="ratings-container">
								<b>( {{$product->views}} views )</b>
							</div><!-- End .ratings-container -->

							<hr class="short-divider">

							<div class="price-box">
								<span class="product-price">
										<span class="old-price">&#8358; {{number_format($product->compare_price,2)}}</span>
										<span class="product-price">&#8358; {{number_format($product->price,2)}}</span>
								</span>
							</div><!-- End .price-box -->

							<div class="product-desc">
								<p>
								{!!$product->description!!}
								</p>
							</div><!-- End .product-desc -->


							<hr class="divider">

							<form method="post" action="/cart">
								<div class="product-action">
									<div class="product-single-qty">
										<input class="horizontal-quantity form-control" name="quantity" type="text">
									</div><!-- End .product-single-qty -->
									@csrf
									<input type="hidden" name="pid" value="{{$product->pid}}">
									<input type="hidden" name="price" value="{{$product->price}}">
									<button type="submit" class="btn btn-dark add-cart icon-shopping-cart" title="Add to Cart">Add to Cart</button>
								</div><!-- End .product-action -->
							</form>

							<hr class="divider mb-1">

							<div class="product-single-share">
								<label class="sr-only">Share:</label>

								<div class="social-icons mr-2">
									<a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
									<a href="https://twitter.com/intent/tweet?url={{url()->full()}}" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
								</div><!-- End .social-icons -->

								<a href="/wishlist/{{$product->pid}}/{{$product->price}}" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
							</div><!-- End .product single-share -->
						</div><!-- End .product-single-details -->
					</div><!-- End .row -->
				</div><!-- End .product-single-container -->



				{{-- <div class="products-section pt-0">
					<h2 class="section-title">Related Products</h2>

					<div class="products-slider owl-carousel owl-theme dots-top">
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-14.jpg')}}">
								</a>
								<div class="label-group">
									<span class="product-label label-sale">-20%</span>
								</div>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="/category/{{$product->catgeory}}" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-13.jpg')}}">
								</a>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-12.jpg')}}">
								</a>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-11.jpg')}}">
								</a>
								<div class="label-group">
									<span class="product-label label-hot">HOT</span>
								</div>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-10.jpg')}}">
								</a>
								<div class="label-group">
									<span class="product-label label-hot">HOT</span>
								</div>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-9.jpg')}}">
								</a>
								<div class="label-group">
									<span class="product-label label-sale">-30%</span>
								</div>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
						<div class="product-default inner-quickview inner-icon">
							<figure>
								<a href="/product/1">
									<img src="{{URL::asset('assets/images/products/product-8.jpg')}}">
								</a>
								<div class="label-group">
									<span class="product-label label-sale">-20%</span>
								</div>
								<div class="btn-icon-group">
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
								</div>
								<a href="/product/1" class="btn-quickview" title="Quick View">Quick View</a> 
							</figure>
							<div class="product-details">
								<div class="category-wrap">
									<div class="category-list">
										<a href="category.html" class="product-category">category</a>
									</div>
								</div>
								<h3 class="product-title">
									<a href="/product/1">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
								<div class="price-box">
									<span class="old-price">$59.00</span>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .products-slider -->
				</div><!-- End .products-section --> --}}
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection