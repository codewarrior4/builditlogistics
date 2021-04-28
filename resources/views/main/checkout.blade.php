@extends('main.layouts.base')
@section('title')
    Checkout
@endsection

<?php
	use App\Http\Controllers\Cart;;
	$cart =Cart::cart();
	$count =$cart['count'];
	$sum =$cart['sum'];
	$orderid=date('ymdhis');
	

?>
@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<ul class="checkout-progress-bar">
					<li>
						<span>Shipping</span>
					</li>
					<li class="active">
						<span>Review &amp; Payments</span>
					</li>
				</ul>
				<div class="row">
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
						</div><!-- End .order-summary -->

						<div class="checkout-info-box">
							<h3 class="step-title">Ship To:
								<a href="/user/billing" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
							</h3>

							@if ($information == '')
								<a href="/user/billing" title="Add you Shipping details" class="step-title-edit"><span class="sr-only">Add you Shipping details</span><i class="icon-pencil"></i></a>
							@else
							<address>
								{{session('user')->name}} <br>
								{{$information->saddress1}} <br>
								{{$information->saddress2}} <br>
								{{$information->scity}} <br>
								{{$information->scountry}} <br>
								{{$information->semail}} <br>
								{{$information->sphone}} <br>
							</address>
							@endif
						</div><!-- End .checkout-info-box -->

					</div><!-- End .col-lg-4 -->

					<div class="col-lg-8 order-lg-first">
						<div class="checkout-payment">
							<h2 class="step-title">Payment Address:</h2>


							<!-- <div class="form-group-custom-control">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
									<label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
								</div>
							</div> -->

							@if ($information->baddress1 =='' || $information->bcity =='' || $information->bcountry =='' || $information->bphone =='' || $information->bemail =='' )
								<p>Please Fill up your Billing Details</p>
								<a href="/user/billing" class="btn btn-outline-primary">Fill Billing Details</a>
							@else	
								<div class="container">
									
										<table class="table table-borderless" width="100%">
											<tr>
												<th>Name</th>
												<td>{{session('user')->firstname ." ".session('user')->lastname}}</td>
											</tr>
											<tr>
												<th>Address</th>
												<td>{{$information->baddress1}} <br>	
													{{$information->baddress2}}</td>
											</tr>
											<tr>
												<th>City</th>
												<td>{{$information->bcity}} </td>
											</tr>
											<tr>
												<th>Country</th>
												<td>{{$information->bcountry}}</td>
											</tr>
											<tr>
												<th>Email</th>
												<td>{{$information->bemail}} </td>
											</tr>
											<tr>
												<th>Phone</th>
												<td> {{$information->bphone}}</td>
											</tr>
										</table>
								</div>
							
							<div class="row">
								<div class="col-6">
									@if (session('msg'))
										<div class="alert alert-primary alert-dismissible fade show" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												<span class="sr-only">Close</span>
											</button>
											<strong>{{session('error')}}</strong>
										</div>
									@endif
								</div>
								<div class="col-6">
								<form method="POST" action="/pay" accept-charset="UTF-8" class="form-horizontal" role="form">
								<div class="row" style="margin-bottom:40px;">
									<div class="col-md-8 col-md-offset-2">
										
										<input type="hidden" name="email" value="{{session('user')->email}}">
										<input type="hidden" name="orderID" value="{{$orderid}}">
										<input type="hidden" name="amount" value="100"> 
										<input type="hidden" name="quantity" value="1">
										<input type="hidden" name="currency" value="NGN">
										<input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
										<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
										@csrf
										<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

										<p>
											<button class="btn btn-primary btn-lg btn-block" type="submit" value="Pay Now!">
												<i class="fa fa-plus-circle fa-lg"></i> Pay  &#8358;{{number_format($sum,2)}}
											</button>
										</p>
									</div>
								</div>
							</form>
								</div>
							</div>
							@endif
							

							
						</div><!-- End .checkout-payment -->

						<!-- <div class="checkout-discount">
							<h4>
								<a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
							</h4>

							<div class="collapse" id="checkout-discount-section">
								<form action="#">
										<input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
										<button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
								</form>
							</div>End .collapse
						</div>End .checkout-discount -->
					</div><!-- End .col-lg-8 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
</main><!-- End .main -->

@endsection