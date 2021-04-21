@extends('main.layouts.base')
@section('title')
    Cart
@endsection

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
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="/products" class="btn btn-outline-secondary">Continue Shopping</a>
											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="/cart/clear" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
											</div><!-- End .float-right -->
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
						<div class="cart-summary">
							<h3>Summary</h3>

							<h4>
								<a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
							</h4>

							<div class="collapse" id="total-estimate-section">
								<form action="#">
									<div class="form-group form-group-sm">
										<label>Country</label>
										<div class="select-custom">
											<select class="form-control form-control-sm">
												<option value="USA">United States</option>
												<option value="Turkey">Turkey</option>
												<option value="China">China</option>
												<option value="Germany">Germany</option>
											</select>
										</div><!-- End .select-custom -->
									</div><!-- End .form-group -->

									<div class="form-group form-group-sm">
										<label>State/Province</label>
										<div class="select-custom">
											<select class="form-control form-control-sm">
												<option value="CA">California</option>
												<option value="TX">Texas</option>
											</select>
										</div><!-- End .select-custom -->
									</div><!-- End .form-group -->

									<div class="form-group form-group-sm">
										<label>Zip/Postal Code</label>
										<input type="text" class="form-control form-control-sm">
									</div><!-- End .form-group -->

									<div class="form-group form-group-custom-control">
										<label>Flat Way</label>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="flat-rate">
											<label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
										</div><!-- End .custom-checkbox -->
									</div><!-- End .form-group -->

									<div class="form-group form-group-custom-control">
										<label>Best Rate</label>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="best-rate">
											<label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
										</div><!-- End .custom-checkbox -->
									</div><!-- End .form-group -->
								</form>
							</div><!-- End #total-estimate-section -->

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>$17.90</td>
									</tr>

									<tr>
										<td>Tax</td>
										<td>$0.00</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Order Total</td>
										<td>$17.90</td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="/checkout" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
							</div><!-- End .checkout-methods -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->	
</main><!-- End .main -->

@endsection