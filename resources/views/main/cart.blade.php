@extends('main.layouts.base')
@section('title')
    Cart
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
@endsection
<?php
	use App\Http\Controllers\Cart;;
	$cart =Cart::cart();
	$count =$cart['count'];
	$sum =$cart['sum'];
	$orderid=date('ymdhis');
	

?>
@section('content')
@if (session('success'))
<script>
	Swal.fire({
		icon: 'success',
		title: 'Done',
		text: '{{session("success")}}',
		})
</script>	

@endif
@if (session('info'))
<script>
	Swal.fire({
		icon: 'info',
		title: 'Removed',
		text: '{{session("info")}}',
		})
</script>	

@endif
@if (session('error'))
<script>
	Swal.fire({
		icon: 'error',
		title: 'Oops',
		text: '{{session("error")}}',
		})
</script>	

@endif
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/index"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-responsive table-cart table-inverse">
								<thead>
									<tr>

										<th class="col">Name</th>
										<th class="col">Product</th>
										<th class="col">Price</th>
										<th class="col">Qty</th>
										<th>Subtotal</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								@foreach ($carts as $count => $cart)
									<tr>
										<td>{{$cart->pname}}</td>

										<td >
											<figure class="product-image-container">
												<a href="/products/{{$cart->pid}}" class="product-image">
													<img src="/uploads/{{$cart->banner}}" alt="product">
												</a>
											</figure>
											
										</td>
											<td>&#8358;{{$cart->price}}</td>
											<td>
												<form action="/cart/update" method="post">
												<div class="product-single-qty">
													<input name="quantity" value="{{$cart->quantity}}" class="horizontal-quantity form-control" type="text">
												</div>
												<input value="{{$cart->pid}}" name="pid" type="hidden">
											</td>
												@csrf
											<td>&#8358;{{number_format($cart->price * $cart->quantity,2)}}</td>
											<td><div class="float-left">
												<a title="Move to Product Wishlist" href="/wishlist/{{$cart->pid}}/{{$cart->price}}" class="btn-move"><i class="fa fa-heart"></i></a>
												<button type="submit" title="Edit product" style="background: transparent !important; " class="btn btn-move"><span class="sr-only">Edit</span><i class="fa fa-edit"></i></button>
												</form>
												<a href="/cart/delete/{{$cart->pid}}" title="Remove product" class="btn btn-remove"><span class="fa fa-trash"></span></a>
											</div></td>
									</tr>
									@endforeach
								</tbody>

								<tfoot>
									<tr>
										<td colspan="6" class="clearfix">
											<div class="row">
												<div class="col">
													<a href="/products" class="btn btn-outline-secondary">Continue Shopping</a>
												</div>

												<div class="col">
													<a href="/cart/clear" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
												</div>
												<div class="col">
													<a href="/checkout" class="btn btn-outline-secondary btn-clear-cart">Proceed to Checkout</a>
												</div>
											</div>
										</td>
									</tr>
									
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
						
						<div class="cart-discount">
							<h4>Apply Discount Code</h4>
							<form action="#">
								<div class="input-group">
									<input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
									<div class="input-group-append">
										<button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
									</div>
								</div><!-- End .input-group -->
							</form>
						</div><!-- End .cart-discount -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="order-summary">
							<h3>Summary</h3>

							<h4>
								<a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{count($carts)}} products in Cart</a>
							</h4>

							<div class="collapse" id="order-cart-section">
								<table class="table table-mini-cart">
									<tbody>
										@foreach ($carts as $cart)
											<tr>
												<td class="product-col">
													<figure class="product-image-container">
														<a href="/product/{{$cart->pid}}" class="product-image">
															<img src="/uploads/{{$cart->banner}}" alt="product">
														</a>
													</figure>
													<div>
														<h2 class="product-title">
															<a href="/product/{{$cart->pid}}">{{$cart->pname}}</a>
														</h2>

														<span class="product-qty">Qty: {{$cart->quantity}}</span>
													</div>
												</td>
												<td class="price-col">&#8358; {{number_format($cart->price * $cart->quantity,2)}}</td>
											</tr>
											
										@endforeach
										<tr>
												<th>
													Total
												</th>
												<td>
													&#8358; {{number_format($sum,2)}} 
												</td>
											</tr>
									</tbody>	
								</table>
							</div><!-- End #order-cart-section -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->	
</main><!-- End .main -->

@endsection