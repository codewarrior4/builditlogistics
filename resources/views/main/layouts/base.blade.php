<?php
    use Illuminate\Routing\UrlGenerator;
	use App\Http\Controllers\Main;
	use App\Http\Controllers\Cart;
	$details =Main::index();
	$categories =  $details['categories'];
	$socials = $details['socials'];

	$cart =Cart::cart();
	$count =$cart['count'];
	$sum =$cart['sum'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>HomeItAll - @yield('title')</title>

	<meta name="description" content="@yield('description')">

        <meta name="keywords" content="home, accessories, home accessories, shipping,shipping services,homeitall, itall,homeall, allhome,Homeitall Logistics, mailroom , warehousing , best e-commerce service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,">
        <link rel="pingback" href="xmlrpc.php">
        <meta property="og:url" content="{{URL::to('/')}}">
        <meta property="og:title" content="HomeItAll">
        <meta property="og:description" content="@yield('description') ">
        <meta property="og:site_name" content="HomeItAll">
        <meta property="og:image" content="{{URL::to('/')}}@yield('image')">
        <meta property="og:image:width" content="1500"/>
        <meta property="og:image:height" content="249"/>
        <meta itemprop="name" content="HomeItAll"/>
        <meta itemprop="url" content="{{URL::to('/')}}"/>
        <meta itemprop="description" content="home, accessories, home accessories, shipping,shipping services,homeitall, itall,homeall, allhome,Homeitall Logistics, mailroom , warehousing , best e-commerce service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,"/>
        <meta name="twitter:title" content="HomeItAll"/>
        <meta name="twitter:url" content="{{URL::to('/')}}"/>
        <meta name="twitter:card" content="summary"/>

	<meta name="author" content="Adebayo Mayowa">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{URL::asset('assets/images/logo-black.png')}}">
	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>
	<style>
	.table ::-webkit-scrollbar {
    	width: 8px;
	}
	.table::-webkit-scrollbar, body::-webkit-scrollbar {
    width: 6px;
	height:4px;
    background-color: #ddd;
	
	}
	.table::-webkit-scrollbar-thumb, body::-webkit-scrollbar-thumb {
		background-color: #f8dbdd;
	}


</style>
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
<body oncontextmenu="return true">

@if (session('success'))
<script>
	Swal.fire({
		icon: 'success',
		title: 'Done !',
		text: '{{session("success")}}',
		})
</script>	
@endif
@if (session('product'))
<script>
	Swal.fire({
		icon: 'error',
		title: 'Oops',
		text: '{{session("product")}}',
		})
</script>	
@endif

@if (session('product'))
<script>
	Swal.fire({
		icon: 'success',
		title: 'Done !',
		text: '{{session("product")}}',
		})
</script>	
@endif
@if (session('auth'))
<script>
	Swal.fire({
		icon: 'error',
		title: 'Error',
		text: '{{session("auth")}}',
		})
</script>	

@endif

<div class="page-wrapper">


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
                <li>
								<a href="/">Home</a>
							</li>
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
                            <li><a href="/products">Products </a></li>
                            <li><a href="/stores">Store Locations </a></li>
							<li><a href="/blog">Blog</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/contact">Contact Us</a></li>
							
							@if (session('user'))
								<li><a href="/user/index" title="{{session('user')->firstname.' '.session('user')->lastname}}">Account <i style="text-transform:lowercase">Signed in as {{session('user')->firstname}}</i></a></li>
								<li><a href="/cart">Cart</a></li>
								<li><a href="/wishlist">wishlist</a></li>
							@else
								<li><a href="/user/login">Login</a></li>
								<li><a href="/user/register">Register</a></li>
								
							@endif

				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{URL::asset('assets/images/newsletter_popup_bg.jpg')}})">
		<div class="newsletter-popup-content">
			<img src="{{URL::asset('assets/images/logo-black.png')}}" width="100" height="100" alt="Logo" class="logo-newsletter">
			<h2>BE THE FIRST TO KNOW</h2>
			<p class="mb-2">Subscribe to the Build It Logistics newsletter to receive timely updates from your favorite products.</p>
			<form action="#">
				<div class="input-group">
					<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email Address" required>
					<input type="submit" class="btn" value="Go!">
				</div>
			</form>
			<div class="newsletter-subscribe">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="1">
						Don't show this popup again
					</label>
				</div>
			</div>
		</div>
	</div> -->



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	
	<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{URL::asset('assets/js/plugins.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/map.js')}}"></script>
	<script src="{{URL::asset('assets/js/webfont.js')}}"></script>
	<script src="{{URL::asset('assets/js/main.min.js')}}"></script>
</body>
</html>