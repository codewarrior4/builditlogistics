<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
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
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
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
						<a href="index.html" class="logo">
							<img src="{{URL::asset('assets/images/logo.png')}}" alt="Porto Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div class="header-icon header-icon header-search header-search-inline header-search-category w-lg-max ml-3 pl-1 pr-xl-5 mr-xl-4">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="/categories/" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required="">
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3 p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex align-items-center ml-auto pl-1 mr-lg-5 pr-xl-2">
							<i class="icon-phone-2"></i>
							<h6 class="pt-1">Call us now<a href="tel:+123 5678 890" class="text-dark font1">+123 5678 890</a></h6>
						</div>

						<a href="/user/index" class="header-icon pb-md-1  pl-1"><i class="icon-user-2"></i></a>

						<a href="/wishlist" class="header-icon pb-md-1"><i class="icon-wishlist-2"></i></a>

                        <!--  cart details -->
						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-shopping-cart"></i>
								<span class="cart-count badge-circle">2</span>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>2 Items</span>

										<a href="/cart" class="float-right">View Cart</a>
									</div><!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Woman Ring</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $99.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="{{URL::asset('assets/images/products/cart/product-1.jpg')}}" alt="product" width="80" height="80">
												</a>
												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Woman Necklace</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="{{URL::asset('assets/images/products/cart/product-2.jpg')}}" alt="product" width="80" height="80">
												</a>
												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->
									</div><!-- End .cart-product -->

									<div class="dropdown-cart-total">
										<span>Total</span>

										<span class="cart-total-price float-right">$134.00</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="/checkout" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
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
						<img src="{{URL::asset('assets/images/logo-light.png')}}" alt="Porto Logo">
					</a>
					<nav class="main-nav w-lg-max bg-primary">
						<ul class="menu">
							<li><a href="/">Home</a></li>
							<li>
								<a href="/category">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink"></a>
											<ul class="submenu">
												<li><a href="/category/sub">Men</a></li>
												<li><a href="/category/sub">Women</a></li>
												<li><a href="/category/sub">Adult</a></li>
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
							<li class="float-right m-0"><a class="px-4" href="#">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->