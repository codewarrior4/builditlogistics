@extends('main.layouts.base')
@section('title')
    Orders
@endsection

@section('content')

<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">My Account</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-5">
				<div class="row">
					<div class="col-lg-9 order-lg-last dashboard-content">
						<h2>Order Details</h2>
                       
                            <div class="QA_table ">
                                Items
                                <!-- table-responsive -->
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mayowa</td>
                                            <td>3</td>
                                            <td>8.00</td>
                                            <td>#4,000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mayowa</td>
                                            <td>3</td>
                                            <td>8.00</td>
                                            <td>#4,000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mayowa</td>
                                            <td>3</td>
                                            <td>8.00</td>
                                            <td>#4,000</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Total Price #25,0000</th>
                                            <th colspan="3">Status : Pending</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                           
                       
                    </div><!-- End .col-lg-9 -->

					<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>
                           
							<ul class="list">
								<li><a href="/user/index">Account Dashboard</a></li>
								<li><a href="/user/billing">Billing And Shipping</a></li> 
								<li class="active"><a href="/user/orders">My Orders</a></li>
								<li><a href="/user/wishlist">My Wishlist</a></li>
								<li><a href="/user/cart">My Cart</a></li>
							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection