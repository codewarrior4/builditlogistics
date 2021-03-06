@extends('admin.layout.base')
@section('title')
    All Products
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
                
            

                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >All Products</h3>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="col-12">
                    <div class="QA_section">
                        

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $count => $product)
                                    <tr>
                                        <th scope="row">{{$count+1}}</th>
                                        <td>{{$product->pname}}</td>
                                        <td><img src="/uploads/{{$product->banner}}" width="70" height="70" alt=""></td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->tag}}</td>
                                        @if ($product->status==1)
                                        <td><a href="/admin/products/delete/{{$product->pid}}" class="btn btn-success text-white" title="Tap to delete">Active</a></td>
                                        @else
                                        <td><a href="/admin/products/activate/{{$product->pid}}" class="btn btn-danger text-white" title="Tap to activate">Deleted</a></td>
                                        @endif
                                        <td><a href="/admin/products/{{$product->pid}}" class="btn btn-outline-primary">View</a></td>
                                    </tr>
                                @endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection