@extends('admin.layout.base')
@section('title')
     Product Detail
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
                                <h3 class="mb-0" >Add Product</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Banner</label>
                              <input type="file" class="form-control" name="image" id="">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect2">Description</label>
                             <textarea name="" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Price</label>
                                        <input type="text" class="form-control" name="image" id="">
                                    </div> 
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Compared Price</label>
                                        <input type="text" class="form-control" name="image" id="">
                                    </div> 
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-input">Category</label>
                                        <select class="default_sel mb_30 w-100" style="display: none;">
                                            <option data-display="Select">Nothing</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3" disabled="">A disabled option</option>
                                            <option value="4">Potato</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-input">Sub Category</label>
                                        <select class="default_sel mb_30 w-100" style="display: none;">
                                            <option data-display="Select">Nothing</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3" disabled="">A disabled option</option>
                                            <option value="4">Potato</option>
                                        </select>
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 1</label>
                                        <input type="file" name="" id="" class="form-control">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 2</label>
                                        <input type="file" name="" id="" class="form-control">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 3</label>
                                        <input type="file" name="" id="" class="form-control">
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-outline-primary">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                                    </div>
                                </div>
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