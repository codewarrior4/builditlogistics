@extends('admin.layout.base')
@section('title')
   Stores Lists
@endsection
@section('content')

<section class="main_content dashboard_part">
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    @if (session('msg'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{session('msg')}}!</strong>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
           
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
                              <a href="/admin/store/delete/{{$store->id}}" class="btn btn-outline-danger mt-2">Delete</a>
                            </div>
                          </div>
                    </div>
                </div>
                @endforeach

                

        </div>
    </div>

@endsection