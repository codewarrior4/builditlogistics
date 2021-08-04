@extends('main.layouts.base')
@section('title')
    Blog Details
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo.png
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
										<a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="social-icon social-facebook" target="_blank" title="Facebook">
											<i class="icon-facebook"></i>
										</a>
										<a href="https://twitter.com/intent/tweet?url={{url()->full()}}" class="social-icon social-twitter" target="_blank" title="Twitter">
											<i class="icon-twitter"></i>
										</a>
										<a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}" class="social-icon social-linkedin" target="_blank" title="Linkedin">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</div><!-- End .social-icons -->
								</div><!-- End .post-share -->


								<div class="comment-respond">
									<h3>Leave a Reply</h3>
									<!-- only when logged in  -->
									<p>Your email address will not be published. Required fields are marked *</p>

									@if (session('user'))
									<form action="/blog/comment" method="post">
										<div class="form-group required-field">
											<label>Comment</label>
											<textarea cols="30" rows="1" name="comment" class="form-control" required></textarea>
										</div><!-- End .form-group -->

                                             @csrf
											 <input type="hidden" name="blogid" value={{$blog->id}}>
											 
										<div class="form-footer">
											<button type="submit" class="btn btn-primary">Post Comment</button>
										</div><!-- End .form-footer -->
									</form>
									@else
									<p>Login To be able to comment *</p>
										
									@endif
								</div><!-- End .comment-respond -->
								<h3>Comments ({{count($comments)}})</h3>
								@foreach ($comments as $comment)
								<hr>
								<div class="row">
									<div class="media">
										<a class="d-flex" href="#">
											<img  width="100" height="100" class="img-rounded rounded-circle" src="/assets/images/avatar/avatar1.jpg" alt="">
										</a>
										<div class=" ml-5 media-body">
											<h5>{{$comment->comment}}</h5>
											<span class="font-weight-bold">{{$comment->firstname  .' '. $comment->lastname}}</span>
											<br> <br>
											<span ><i class="icon-calendar pr-3"></i>{{explode(' ',$comment->created_at)[0]}}</span>
										</div>
									</div>
									
								</div>
								@endforeach
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