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
                    <aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>
                           
							<ul class="list">
								<li><a href="index">Account Dashboard</a></li>
								<li><a href="billing">Billing And Shipping</a></li> 
								<li class="active"><a href="orders">My Orders</a></li>
								<li><a href="/user/change">Change Password</a></li>
								<li><a href="/user/logout">Logout</a></li>

							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
					<div class="col-lg-9 order-lg-last dashboard-content">
						<h2>Orders</h2>
                        <div class="QA_section">
                            <div class="QA_table ">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Payment D</th>
                                            <th scope="col">Reference</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Amount (&#8358;)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $count=> $order)
                                            <tr>
                                                <th scope="row">{{$count +1}}</th>
                                                <td>{{$order->paymentid}}</td>
                                                <td>{{$order->reference}}</td>
                                                <td>{{($order->status =="false")?"Pending":"Seen"}}</td>
                                                <td>&#8358; {{number_format($order->amount,2)}}</td>
                                                <td><a href="order/{{$order->paymentid}}" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6">{{$orders->links('pagination::bootstrap-4')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                    </div><!-- End .col-lg-9 -->

					
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection