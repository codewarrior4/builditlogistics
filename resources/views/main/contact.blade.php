@extends('main.layouts.base')
@section('title')
    Contact
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
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
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-8">
				<div class="col-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15826.80272043958!2d3.8852149!3d7.3874002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc68d243d1ecdb32b!2sHomeitall!5e0!3m2!1sen!2sus!4v1624346512644!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

				<div class="row mt-5">
					<div class="col-md-8">
						<h2 class="light-title">Write <strong>Us</strong></h2>

						<form action="contact" method="post">
							@csrf
							<div class="form-group required-field">
								<label for="contact-name">Name</label>
								<input type="text" class="form-control" id="contact-name" name="name" required>
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-email">Email</label>
								<input type="email" class="form-control" id="contact-email" name="email" required>
							</div><!-- End .form-group -->

							<div class="form-group">
								<label for="contact-phone">Phone Number</label>
								<input type="tel" class="form-control" id="contact-phone" name="phone">
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-message">What’s on your mind?</label>
								<textarea cols="30" rows="1" id="contact-message" class="form-control" name="message" required></textarea>
							</div><!-- End .form-group -->

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-8 -->

					<div class="col-md-4">
						<h2 class="light-title">Contact <strong>Details</strong></h2>

						<div class="contact-info">
							<div>
								<i class="icon-phone"></i>
								<p><a href="tel:+2347068261415">(234)7068261415</a></p>
							</div>
							<div>
								<i class="icon-mail-alt"></i>
								<p><a href="mailto:info@homeitall.net">info@homeitall.net</a></p>
							</div>
						</div><!-- End .contact-info -->
					</div><!-- End .col-md-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main>
@endsection