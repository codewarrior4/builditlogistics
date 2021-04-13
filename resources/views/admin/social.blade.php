@extends('admin.layout.base')
@section('title')
    Update Social Media Handles
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
                                <h3 class="mb-0" >Update Social Media Handles</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" action="/admin/social" method="post">
                        @csrf
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Facebook</label>
                              <input type="url" required value="{{$social->facebook}}" name="facebook" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Linkedin</label>
                              <input type="url" required value="{{$social->linkedin}}" class="form-control" name="linkedin" id="">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Twitter</label>
                              <input type="url" required value="{{$social->twitter}}" class="form-control" name="twitter" id="">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Instagram</label>
                              <input type="url" required value="{{$social->instagram}}" class="form-control" name="instagram" id="">
                            </div>
                            <input type="hidden" name="id" value="{{$social->id}}">
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-outline-primary">
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