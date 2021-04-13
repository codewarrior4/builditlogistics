@extends('admin.layout.base')
@section('title')
    Add Slider
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
                                <h3 class="mb-0" >Add Slider</h3>
                            </div>
                        </div>
                        <form action="/admin/slider" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                              @csrf
                              <label for="exampleFormControlInput1">Header</label>
                              <input name="header" type="text" class="form-control" required id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Detail</label>
                              <input name="detail"  type="text" class="form-control" requiredid="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Button text</label>
                              <input name="button"  type="text" class="form-control" requiredid="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Url</label>
                              <input name="url"  type="url" class="form-control" required id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Photo</label>
                              <input name="photo"  type="file" class="form-control" requiredid="exampleFormControlInput1">
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
                                        <th scope="col">Header</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">url</th>
                                        <th scope="col">Button Text</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                    
                                    <tr>
                                        <th scope="row">{{$slider->id}}</th>
                                        <td>{{$slider->header}}</td>
                                        <td><img src="/uploads/{{$slider->photo}}" width="70" height="70" alt=""></td>
                                        <td>{{$slider->url}}</td>
                                        <td>{{$slider->button}}</td>
                                        <td><a href="/admin/slider/delete/{{$slider->id}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                      
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        
                            $('#summernote').summernote({
                                height: 400,                 // set editor height
                                minHeight: null,             // set minimum height of editor
                                maxHeight: null,             // set maximum height of editor
                                focus: true                  // set focus to editable area after initializing summernote
                            });

                    });
                        
                
                </script>
        </div>
    </div>

@endsection