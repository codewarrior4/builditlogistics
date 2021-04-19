<?php
	use App\Http\Controllers\Main;
	$details =Main::index();

	$socials = $details['socials'];

?>
<footer class="footer">
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 mb-2 mb-md-0">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="contact-info mb-2">
									<li>
										<span class="contact-info-label">Address:</span>1234 Street Name, City, England
									</li>
									<li>
										<span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
									</li>
									<li>
										<span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours:</span>
										Mon - Sun / 9:00 AM - 8:00 PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="{{$socials->facebook}}" target="_blank" class="social-icon social-facebook icon-facebook" ></a>
									<a href="{{$socials->twitter}}" target="_blank" class="social-icon social-twitter icon-twitter" ></a>
									<a href="{{$socials->instagram}}" target="_blank" class="social-icon social-instagram icon-instagram" ></a>
									<a href="{{$socials->linkedin}}" target="_blank" class="social-icon social-facebook"><span class="fab fa-linkedin"></span></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-9 col-md-8">
							<div class="widget widget-newsletter pb-5">
								<h4 class="widget-title m-b-1 pb-2">Subscribe newsletter</h4>
								<div class="row">
									<div class="col-lg-6">
										<p class="pt-2 mb-lg-0">Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.</p>
									</div><!-- End .col-lg-6 -->

									<div class="col-lg-6">
										<form id="form" class="d-flex mb-0 w-100">
											<input type="email" class="form-control mb-0" name="email" placeholder="Email address" required="">
											@csrf
											<input type="submit" name="submit" class="btn btn-primary shadow-none ls-10" value="Subscribe">
										</form>
										<div class="row">
                                        <div class="alert alert-primary alert-dismissible fade show print-error-msg" style="display:none">
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <ul></ul>
                                        </div>
                                    
									</div><!-- End .col-lg-6 -->
								</div><!-- End .row -->
							</div><!-- End .widget -->

							<div class="row pt-3">
								<div class="col-sm-6 col-lg-5">
									<div class="widget">
										<h4 class="widget-title">Customer Service</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-sm-6">
												<li><a href="about.html">About Us</a></li>
												<li><a href="/contact">Contact Us</a></li>
												<li><a href="my-account.html">My Account</a></li>
											</div>
											<div class="link-part col-sm-6">
												<li><a href="#">Orders History</a></li>
												<li><a href="#">Advanced Search</a></li>
												<li><a href="#" class="login-link">Login</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->

								<div class="col-sm-6 col-lg-7">
									<div class="widget">
										<h4 class="widget-title">About Us</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-xl-6">
												<li><a href="#">Super Fast WordPress Theme</a></li>
												<li><a href="#">1st Fully working Ajax Theme</a></li>
												<li><a href="#">33 Unique Shop Layouts</a></li>
											</div>
											<div class="link-part col-xl-6">
												<li><a href="#">Powerful Admin Panel</a></li>
												<li><a href="#">Mobile &amp; Retina Optimized</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->
							</div><!-- End .row -->
						</div><!-- End .col-lg-9 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="footer-bottom">
				<div class="container d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">© Build IT Logistics. <?= date("Y") ?>. All Rights Reserved</p>

					<img src="{{URL::asset('assets/images/payments.png')}}" alt="payment methods" class="footer-payments py-3">
				</div><!-- End .container -->
			</div><!-- End .footer-bottom -->
		</footer>
		
		<script type="text/javascript">
            $(document).ready(function() {
                $("#form").submit(function(e){
                    e.preventDefault();
					$("input[name='submit']").attr("disabled","disabled")
					$("input[name='submit']").prop("value","Subscribing")
                    var _token = $("input[name='_token']").val();
                    var email = $("input[name='email']").val();
                    $.ajax({
                        url: "/subscriber",
                        type:'POST',
                        data: {'_token':_token,'email': email},
                        success: function(data) {
        
                            if($.isEmptyObject(data.error)){
                                printErrorMsg(data.success);
                            }else{
                                printErrorMsg(data.error);
                            }
                            $("input[name='email']").val("");
							$("input[name='submit']").removeAttr("disabled")
							$("input[name='submit']").prop("value","Subscribe")
                        }

                    })   
                    function printErrorMsg (msg) {
                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display','block');
                        $.each( msg, function( key, value ) {
                            $(".print-error-msg").find("ul").append('<li><b>'+value+'</b></li>');
                        });
                    }

                
                });
            })
        </script>