@extends('main.layouts.base')
@section('title')
    Blog Details
@endsection

@section('content')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<div class="row">
					<div class="col-lg-12">
						<article class="post single">
							<div class="post-media">
								<div class="post-slider owl-carousel owl-theme">
									<img src="/uploads/{{$blog->image}}" alt="Post">
								</div><!-- End .post-slider -->
							</div><!-- End .post-media -->

							<div class="post-body">
								<div class="post-date">
									<span class="day">{{$blog->created_at->format('d')}}</span>
									<span class="month">{{$blog->created_at->format('M')}}</span>
								</div><!-- End .post-date -->

								<h2 class="post-title">
								{{$blog->title}}
								</h2>

								<div class="post-meta">
									<span><i class="icon-calendar"></i>{{explode(' ',$blog->created_at)[0]}}</span>
									<span><i class="icon-user"></i>By <a href="#">Admin</a></span>
									<span><i class="icon-folder-open"></i>
									</span>
								</div><!-- End .post-meta -->

								<div class="post-content">
									<p>{!!$blog->description!!}.</p> 
								</div><!-- End .post-content -->

								<div class="post-share">
									<h3>
										<i class="icon-forward"></i>
										Share this post
									</h3>

									<div class="social-icons">
										<a href="#" class="social-icon social-facebook" target="_blank" title="Facebook">
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon social-linkedin" target="_blank" title="Linkedin">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#" class="social-icon social-gplus" target="_blank" title="Google +">
											<i class="fab fa-google-plus-g"></i>
										</a>
										<a href="#" class="social-icon social-mail" target="_blank" title="Email">
											<i class="icon-mail-alt"></i>
										</a>
									</div><!-- End .social-icons -->
								</div><!-- End .post-share -->


								<div class="comment-respond">
									<h3>Leave a Reply</h3>
									<!-- only when logged in  -->
									<p>Your email address will not be published. Required fields are marked *</p>

									<form action="#">
										<div class="form-group required-field">
											<label>Comment</label>
											<textarea cols="30" rows="1" class="form-control" required></textarea>
										</div><!-- End .form-group -->

										<div class="form-group required-field">
											<label>Name</label>
											<input type="text" class="form-control" required>
										</div><!-- End .form-group -->

										<div class="form-group required-field">
											<label>Email</label>
											<input type="email" class="form-control" required>
										</div><!-- End .form-group -->

										<div class="form-group">
											<label>Website</label>
											<input type="url" class="form-control">
										</div><!-- End .form-group -->

										<div class="form-group-custom-control mb-3">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="save-name">
												<label class="custom-control-label" for="save-name">Save my name, email, and website in this browser for the next time I comment.</label>
											</div><!-- End .custom-checkbox -->
										</div><!-- End .form-group-custom-control -->

										<div class="form-footer">
											<button type="submit" class="btn btn-primary">Post Comment</button>
										</div><!-- End .form-footer -->
									</form>
								</div><!-- End .comment-respond -->
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						{{-- <div class="related-posts">
							<h4 class="light-title">Related <strong>Posts</strong></h4>

							<div class="owl-carousel owl-theme related-posts-carousel">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="{{URL::asset('assets/images/blog/related/post-1.jpg')}}" alt="Post">
										</a>
									</div><!-- End .post-media -->

									<div class="post-body">
										<div class="post-date">
											<span class="day">29</span>
											<span class="month">Jun</span>
										</div><!-- End .post-date -->

										<h2 class="post-title">
											<a href="single.html">Post Format - Image</a>
										</h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

											<a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article>

								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="{{URL::asset('assets/images/blog/related/post-2.jpg')}}" alt="Post">
										</a>
									</div><!-- End .post-media -->

									<div class="post-body">
										<div class="post-date">
											<span class="day">23</span>
											<span class="month">Mar</span>
										</div><!-- End .post-date -->

										<h2 class="post-title">
											<a href="single.html">Post Format - Image</a>
										</h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

											<a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article>

								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="{{URL::asset('assets/images/blog/related/post-3.jpg')}}" alt="Post">
										</a>
									</div><!-- End .post-media -->

									<div class="post-body">
										<div class="post-date">
											<span class="day">14</span>
											<span class="month">May</span>
										</div><!-- End .post-date -->

										<h2 class="post-title">
											<a href="single.html">Post Format - Image</a>
										</h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

											<a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article>

								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="{{URL::asset('assets/images/blog/related/post-1.jpg')}}" alt="Post">
										</a>
									</div><!-- End .post-media -->

									<div class="post-body">
										<div class="post-date">
											<span class="day">11</span>
											<span class="month">Apr</span>
										</div><!-- End .post-date -->

										<h2 class="post-title">
											<a href="single.html">Post Format - Image</a>
										</h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per incep tos himens.</p>

											<a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article>
							</div>
						</div> --}}

					</div><!-- End .col-lg-9 -->

					
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection