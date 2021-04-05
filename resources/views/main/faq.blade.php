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
                            <div class="card">
                                <div class="card-header bg-primary" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn text-white" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Example 0
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <span class="badge badge-primary">Answer</span>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div><!-- End .about-section -->
			</div><!-- End .container -->

		
		</main><!-- End .main -->
@endsection