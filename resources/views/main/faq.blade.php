@extends('main.layouts.base')
@section('title')
    FAQ 
@endsection

@section('content')
<main class="main">
			<div class="container mt-2 pt-0">
				<div class="outer-container page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('assets/images/page-header-bg.jpg');">
					<div class="container pl-5">
						<h1><span>FAQ</span>
					</div><!-- End .container -->
				</div><!-- End .page-header -->
			</div><!-- End .container -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">FAQ</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container pt-0 mb-3">
				<div class="about-section">
                        <div class="accordion accordion_custom mb_50" id="accordion_ex">
                            @foreach ($faqs as $faq)
                                <div class="card">
                                    <div class="card-header bg-primary" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn text-white" type="button" data-toggle="collapse"
                                                data-target="#collapse{{$faq->id}}" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                {{$faq->question}}
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <span class="badge badge-primary">Answer</span>
                                            <p>{{$faq->answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{$faqs->links('pagination::bootstrap-4')}}
                        </div>
				</div><!-- End .about-section -->
			</div><!-- End .container -->

		
		</main><!-- End .main -->
@endsection