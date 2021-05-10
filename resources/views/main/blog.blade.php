@extends('main.layouts.base')
@section('title')
    Blog
@endsection
@section('description')
HomeItAll is a market place where you can get the accessories to complete your home and make your home comfortable
@endsection
@section('image')
/assets/images/logo-black.png
@endsection
@section('content')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<div class="row">
					<div class="col-lg-12">
						
						@foreach ($blogs as $blog)
						<article class="post">
							<div class="post-media">
								<a href="/blog/{{$blog->id}}">
									<img src="/uploads/{{$blog->image}}" alt="Post">
								</a>
							</div><!-- End .post-media -->

							<div class="post-body">
								<div class="post-date">
									<span class="day">{{$blog->created_at->format('d')}}</span>
									<span class="month">{{$blog->created_at->format('M')}}</span>
								</div><!-- End .post-date -->

								<h2 class="post-title">
									<a href="/blog/{{$blog->id}}">{{$blog->title}}</a>
								</h2>

								<div class="post-content">
									<p>{{ implode(' ', array_slice(explode(' ', strip_tags($blog->description)), 0, 35)) }}</p>

									<a href="/blog/{{$blog->id}}" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
								</div><!-- End .post-content -->

								<div class="post-meta">
									<span><i class="icon-calendar"></i>{{explode(' ',$blog->created_at)[0]}}</span>
									<span><i class="icon-user"></i>By <a href="#">Admin</a></span>
									
								</div><!-- End .post-meta -->
							</div><!-- End .post-body -->
						</article>
						@endforeach

						

						{{$blogs->links('pagination::bootstrap-4')}}
					</div><!-- End .col-lg-9 -->

					
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection