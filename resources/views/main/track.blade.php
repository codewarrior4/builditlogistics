<?php 
    
?>
@extends('main.layouts.base')
@section('title')
    Track an Order
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
@endsection
@section('content')
@if (session('error'))
<script>
	Swal.fire({
		icon: 'error',
		title: 'Oops!',
		text: '{{session("error")}}',
		})
</script>	

@endif
<style>
 
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>
<main class="main">
			
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Track</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container pt-0 mb-3">
				<div class="about-section">
                <div class="col-md-12">
            <div class="error-template">
                <h1> Track an Order</h1>
                <!-- <h2>Enter your Ticket ID</h2> -->
                <div class="error-details">
                    <form action="/track" method="post">
                        <div class="form-group">
                          <label for="">Enter your Ticket ID</label>
                          <input type="text" class="form-control" name="orderid" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Track order</button>
                        </div>
                    </form>
                </div>
                @if($orders)
                
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Unit .Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $count => $order)
                                    <tr>
                                        <td>{{$count +1}}</td>
                                        <td>{{$order->pname}}</td>
                                        <td>{{$order->price}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->price * $order->quantity}}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
				</div><!-- End .about-section -->
			</div><!-- End .container -->

			<div class="container pt-0 mb-3">
				<div class="features-section">
					<h2 class="subtitle">WHY CHOOSE US</h2>

					<div class="row">
						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-shipped"></i>

								<div class="feature-box-content">
									<h3>Free Shipping</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-us-dollar"></i>

								<div class="feature-box-content">
									<h3>100% Money Back Guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-online-support"></i>

								<div class="feature-box-content">
									<h3>Online Support 24/7</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->
					</div><!-- End .row -->
				</div><!-- End .features-section -->
			</div><!-- End .container -->

		

			<div class="container pt-0">
				<div class="counters-section">
					<div class="row">
						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="200" data-speed="2000" data-refresh-interval="50">200</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">MILLION CUSTOMERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="1800" data-speed="2000" data-refresh-interval="50">1800</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">TEAM MEMBERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>HR</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->
					</div><!-- End .row -->
				</div><!-- End .counters-section -->
			</div><!-- End .container -->	
		</main><!-- End .main -->
@endsection


