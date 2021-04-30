@extends('admin.layout.base')
@section('title')
    Add Category
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
                                <h3 class="mb-0" >Add Sub Category</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                @csrf
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" required name="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Category</label>
                                <select required name="catid" class="custom-select mb_30 w-100" style="display: none;">
                                    @foreach ($subs as $sub)
                                        <option value="{{$sub->id}}">{{$sub->title}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-outline-primary">
                            </div>
                          </form>
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
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cats as $count=> $cat)
                                    <tr>
                                        <th scope="row">{{$count +1}}</th>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td><a href="/admin/category_sub/delete/{{$cat->id}}" class="btn btn-danger">Delete</a></td>
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