<?php
	use App\Http\Controllers\Main;
	use App\Http\Controllers\Cart;
	use App\Http\Controllers\Wishlist;
	$details =Main::index();
	$categories =  $details['categories'];
	$socials = $details['socials'];

	$cart =Cart::cart();
	$wish =Wishlist::wish();
	$wcount= $wish['count'];
	$count =$cart['count'];
	$sum =$cart['sum'];
	

?>

<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders &#8358;5000+</p>
					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
						<div class="header-dropdown dropdown-expanded mr-md-3 mr-lg-0">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="/track">Track Order </a></li>
									<li><a href="/about">About</a></li>
									<li><a href="/stores">Our Stores</a></li>
									<li><a href="/blog">Blog</a></li>
									<li><a href="/contact">Contact</a></li>
									<li><a href="/tac">Terms And Conditions</a></li>
									<li><a href="/faq">Help &amp; FAQs</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->


						<span class="separator"></span>

						<div class="social-icons">
							<a href="{{$socials->facebook}}" target="_blank" class="social-icon social-facebook icon-facebook" ></a>
							<a href="{{$socials->twitter}}" target="_blank" class="social-icon social-twitter icon-twitter" ></a>
							<a href="{{$socials->instagram}}" target="_blank" class="social-icon social-instagram icon-instagram" ></a>
							<a href="{{$socials->linkedin}}" target="_blank" class="social-icon social-facebook"><span class="fab fa-linkedin"></span></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div>

			<div class="header-middle">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="/" class="logo">
							<img src="{{URL::asset('assets/images/logo.png')}}" alt="HomeITall Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div class="header-icon header-icon header-search header-search-inline header-search-category w-lg-max ml-3 pl-1 pr-xl-5 mr-xl-4">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="/search" method="post">
								<div class="header-search-wrapper">
									<input type="text" class="form-control" name="text" id="q" placeholder="Search..." required="">
									<div class="select-custom">
									@csrf
										<select id="cat" name="catid" required>
										<option value="" disabled selected>All Categories</option>
											@foreach ($categories as $category)
												<option value="{{$category->id}}">{{$category->title}}</option>
											@endforeach
											
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3 p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex align-items-center ml-auto pl-1 mr-lg-5 pr-xl-2">
							<i class="icon-phone-2"></i>
							<h6 class="pt-1">Call us now<a href="tel:+2347068261415" class="text-dark font1">+(234)7068261415</a></h6>
						</div>

						@if (session('user'))
							
							<div class="dropdown cart-dropdown mr-3">
								<a href="#" title="{{session('user')->firstname.' '.session('user')->lastname}}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
									<i class="fa fa-user-circle"></i>
								</a>

								<div class="dropdown-menu">
									<div class="dropdownmenu-wrapper">
										<div class="dropdown-cart-header">
											<span>{{session('user')->firstname.' '.session('user')->lastname}} </span>

											<a href="/user/index" class="float-right">View Profile</a>
										</div><!-- End .dropdown-cart-header -->


										<div class="dropdown-cart-total">
										<a href="/user/logout" class="float-left">Logout</a>

										</div><!-- End .dropdown-cart-total -->

										<div class="dropdown-cart-action">
											<!-- <a href="/checkout" class="btn btn-dark btn-block">Checkout</a> -->
										</div><!-- End .dropdown-cart-total -->
									</div><!-- End .dropdownmenu-wrapper -->
								</div><!-- End .dropdown-menu -->
							</div>

							<div class="dropdown cart-dropdown mr-2">
								<a href="/wishlist" class="text-danger" aria-haspopup="true" aria-expanded="false" data-display="static">
									<i class="fa fa-heart" style="font-size: 30px;"></i>
								 	<span class="cart-count badge-circle">{{$wcount}}</span>
								</a>
							</div>

							<!--  cart details -->
							<div class="dropdown cart-dropdown ml-2">
								<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
									<i class="icon-shopping-cart"></i>
									<span class="cart-count badge-circle">{{$count}}</span>
								</a>

								<div class="dropdown-menu">
									<div class="dropdownmenu-wrapper">
										<div class="dropdown-cart-header">
											<span>{{$count}} Items</span>

											<a href="/cart" class="float-right">View Cart</a>
										</div><!-- End .dropdown-cart-header -->

										

										<div class="dropdown-cart-total">
											<span>Total</span>

											<span class="cart-total-price float-right">&#8358; {{number_format($sum,2)}}</span>
										</div><!-- End .dropdown-cart-total -->

										<div class="dropdown-cart-action">
											<a href="/checkout" class="btn btn-dark btn-block">Checkout</a>
										</div><!-- End .dropdown-cart-total -->
									</div><!-- End .dropdownmenu-wrapper -->
								</div><!-- End .dropdown-menu -->
							</div><!-- End .dropdown -->
						@else
						<a href="/user/login" class="header-icon pb-md-1  pl-1"><span class="pl-4 font-weight-bold" style="color:red;font-weight:bold">Login</span></a>
						<a href="/user/register" class="header-icon pb-md-1  pl-1"><span class="pl-4 font-weight-bold"  style="color:red;font-weight:bold">Signup</span></a>
						@endif
                        <!-- end cart details -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div>

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.logo-light',
						'removeClass': 'd-none'
					},
					{
						'item': '.header-icon:not(.header-search)',
						'removeClass': 'pb-md-1'
					},
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline w-lg-max ml-3 pl-1 pr-xl-5 mr-xl-4',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav li.float-right',
						'addClass': 'd-none'
					}
				]
			}">
				<div class="container">
					<a href="/" class="logo logo-light mr-3 pr-xl-3 d-none">
						<img src="{{URL::asset('assets/images/logo.png')}}" alt="HomeITall Logo">
					</a>
					<nav class="main-nav w-lg-max bg-primary">
						<ul class="menu">
							<li><a href="/">Home</a></li>
							<li>
								<a href="#">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink"></a>
											<ul class="submenu">
												@foreach ($categories as $category)
													<li><a style="text-decoration:none" href="/category/{{$category->id}}">{{$category->title}}</a></li>
												@endforeach
											</ul>
										</div>
									</div>
								</div><!-- End .megamenu -->
							</li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/stores">Store Locations </a></li>
							<li><a href="/blog">Blog</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/contact">Contact Us</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->