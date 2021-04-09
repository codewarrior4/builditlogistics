<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Build it Logistics - @yield('title')</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{URL::asset('assets/images/icons/favicon.ico')}}">

	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700,800' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>

<div class="page-wrapper">
  {{--  <div class="top-notice text-white bg-dark">
        <div class="container text-center">
            <h5 class="d-inline-block mb-0 mr-1">Get Up to <b>40% OFF</b> New-Season Styles</h5>
            <a href="category.html" class="category">MEN</a>
            <a href="category.html" class="category ml-2 mr-2">WOMEN</a>
            <small class="ml-1">* Limited time only.</small>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div><!-- End .container -->
    </div> --}}

    {{View::make('main.layouts.header')}}

        @yield('content')

    {{View::make('main.layouts.footer')}}

</div>

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->


	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
                <li class="active">
								<a href="/">Home</a>
							</li>
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
                            <li><a href="/products">Products </a></li>
                            <li><a href="/stores">Store Locations </a></li>
							<li><a href="/blog">Blog</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/contact">Contact Us</a></li>
							<li><a href="/user/index">Account</a></li>
							<li><a href="/cart">Cart</a></li>
							<li><a href="/wishlist">wishlist</a></li>
							<li><a class="px-4" href="#">Special Offer!</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{URL::asset('assets/images/newsletter_popup_bg.jpg')}})">
		<div class="newsletter-popup-content">
			<img src="{{URL::asset('assets/images/logo-black.png')}}" width="100" height="100" alt="Logo" class="logo-newsletter">
			<h2>BE THE FIRST TO KNOW</h2>
			<p class="mb-2">Subscribe to the Build It Logistics newsletter to receive timely updates from your favorite products.</p>
			<form action="#">
				<div class="input-group">
					<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email Address" required>
					<input type="submit" class="btn" value="Go!">
				</div><!-- End .from-group -->
			</form>
			<div class="newsletter-subscribe">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="1">
						Don't show this popup again
					</label>
				</div>
			</div>
		</div><!-- End .newsletter-popup-content -->
	</div>

	<!-- Add Cart Modal -->
	<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-body add-cart-box text-center">
			<p>You've just added this product to the<br>cart:</p>
			<h4 id="productTitle"></h4>
			<img src="#" id="productImage" width="100" height="100" alt="adding cart image">
			<div class="btn-actions">
				<a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
				<a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/plugins.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/map.js')}}"></script>
	<script src="{{URL::asset('assets/js/webfont.js')}}"></script>

	<!-- Main JS File -->
	<script src="{{URL::asset('assets/js/main.min.js')}}"></script>
</body>
</html>