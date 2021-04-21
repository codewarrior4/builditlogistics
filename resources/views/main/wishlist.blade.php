@extends('main.layouts.base')
@section('title')
    Wishlist
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
					<div class="col-lg-12">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($wishlists as $wishlist)
									<tr class="product-row">
										<td class="product-col">
											<figure class="product-image-container">
												<a href="/product/{{$wishlist->pid}}" class="product-image">
													<img src="/uploads/{{$wishlist->banner}}" alt="product">
												</a>
											</figure>
											<h2 class="product-title">
												<a href="/product/{{$wishlist->pid}}">{{$wishlist->pname}}</a>
											</h2>
										</td>
										<td>&#8358;{{number_format($wishlist->price,2)}}</td>
									</tr>
									<tr class="product-action-row">
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="/wishlist/{{$wishlist->pid}}/1/{{$wishlist->price}}" title="Move to Cart" class="btn-move pr-4">Move to Cart</a>
												<a href="/wishlist/delete" title="Remove product" class="btn-remove pl-2">Remove</a>
											</div><!-- End .float-right -->
										</td>
									</tr>
									@endforeach

								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="/products" class="btn btn-outline-secondary">Continue Shopping</a>
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