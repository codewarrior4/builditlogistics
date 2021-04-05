@extends('main.layouts.base')
@section('title')
    Wishlist
@endsection

@section('content')


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
					<div class="col-lg-12">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>
									<tr class="product-row">
										<td class="product-col">
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-4.jpg" alt="product">
												</a>
											</figure>
											<h2 class="product-title">
												<a href="product.html">Men Watch</a>
											</h2>
										</td>
										<td>$17.90</td>
										<td>
											<input class="vertical-quantity form-control" type="text">
										</td>
										<td>$17.90</td>
									</tr>
									<tr class="product-action-row">
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="#" class="btn-move">Move to Wishlist</a>
											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
											</div><!-- End .float-right -->
										</td>
									</tr>

									<tr class="product-row">
										<td class="product-col">
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-3.jpg" alt="product">
												</a>
											</figure>
											<h2 class="product-title">
												<a href="product.html">Computer Mouse</a>
											</h2>
										</td>
										<td>$8.90</td>
										<td>
											<input class="vertical-quantity form-control" type="text">
										</td>
										<td>$8.90</td>
									</tr>
									<tr class="product-action-row">
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="#" class="btn-move">Move to Wishlist</a>
											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="/product" class="btn btn-outline-secondary">Continue Shopping</a>
											</div><!-- End .float-left -->

										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->

					</div><!-- End .col-lg-8 -->

				

							
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->	
</main><!-- End .main -->

@endsection