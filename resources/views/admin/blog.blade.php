@extends('admin.layout.base')
@section('title')
    Add Blog
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
                                <h3 class="mb-0" >Add Blog</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" action="/admin/blog" method="post">
                        @csrf
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Title</label>
                              <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Image</label>
                              <input type="file" name="photo" class="form-control"  id="">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect2">Description</label>
                             <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-outline-primary">
                            </div>
                          </form>
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