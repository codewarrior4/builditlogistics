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
									@if ($product->image2 !='')
										<div class="product-item">
											<img class="product-single-image" src="/uploads/{{$product->image3}}" data-zoom-image="/uploads/{{$product->image3}}"/>
										</div>								
									@endif
									
									@if ($product->image3 !='')
										<div class="product-item">
											<img class="product-single-image" src="/uploads/{{$product->image2}}" data-zoom-image="/uploads/{{$product->image2}}"/>
										</div>	
									@endif
									
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
								@if ($product->image2 !='')
									<div class="owl-dot">
										<img src="/uploads/{{$product->image2}}"/>
									</div>
								@endif
								@if ($product->image3 !='')
									<div class="owl-dot">
										<img src="/uploads/{{$product->image3}}"/>
									</div>
								@endif
								
							</div>
						</div><!-- End .product-single-gallery -->

						<div class="col-md-7 product-single-details">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<h1 class="product-title" >{{$product->pname}}</h1>
								</div>
								<div class="col col-sm-6 col-md-4">
									<a href="/wishlist/{{$product->pid}}/{{$product->price}}" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
								</div>
							</div>

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

							</div><!-- End .product single-share -->
						</div><!-- End .product-single-details -->
					</div><!-- End .row -->
				</div><!-- End .product-single-container -->



			
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection

@section('description')
{{$product->pname}}
@endsection
@section('image')
/uploads/{{$product->banner}}
@endsection