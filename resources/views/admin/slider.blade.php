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
                                <h3 class="mb-0" >Sliders</h3>
                            </div>
                        </div>
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{URL::asset('img/card2.jpg')}}" class="d-block w-100" style="min-height:300px;max-height:400px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{URL::asset('img/card2.jpg')}}" class="d-block w-100" style="min-height:300px;max-height:400px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Second slide label</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{URL::asset('img/card2.jpg')}}" class="d-block w-100" style="min-height:300px;max-height:400px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Third slide label</h5>
                                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >Add Slider</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Header</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Detail</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Button text</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Url</label>
                              <input type="url" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Photo</label>
                              <input type="file" class="form-control" id="exampleFormControlInput1">
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
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