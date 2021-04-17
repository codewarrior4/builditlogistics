@extends('main.layouts.base')
@section('title')
    Stores
@endsection

@section('content')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Stores</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<div class="row">
					<div class="col-lg-12">
						
                        @foreach ($stores as $store)
                        <div class="col-lg-12">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0" >{{$store->location}}</h3>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                    {{$store->location}}
                                    </div>
                                    <div class="card-body">
                                    <h5 class="card-title">{{$store->number}}</h5>
                                    <p class="card-text">{!! $store->details !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


					</div><!-- End .col-lg-9 -->

					
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection