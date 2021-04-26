@extends('admin.layout.base')
@section('title')
    Add Product
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
                              <input type="text" required name="name" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Banner</label>
                              <input required type="file" name="banner" class="form-control"  id="">
                            </div>
                            @csrf
                            <div class="form-group">
                              <label for="exampleFormControlSelect2">Description</label>
                             <textarea required name="description" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Price</label>
                                        <input required type="text" class="form-control" name="price" id="">
                                    </div> 
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Compared Price</label>
                                        <input required type="text" class="form-control" name="compare_price" id="">
                                    </div> 
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tag</label>
                                        <select required name="tag" class="default_sel mb_30 w-100" style="display: none;">
                                            
                                                <option value="featured" >Featured Products</option>
                                                <option value="hot" >Hot Products</option>
                                           
                                        </select>
                                    </div> 
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Category</label>
                                        <select required name="category" class="default_sel mb_30 w-100" style="display: none;">
                                        @foreach ($cat as $cats)
                                                <option value="{{$cats->id}}" >{{$cats->title}}</option>
                                            @endforeach
                                        </select>
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Sub Category</label>
                                        <select required name="sub_category" class="default_sel mb_30 w-100" style="display: none;">
                                            @foreach ($sub as $subs)
                                                <option value="{{$subs->id}}" >{{$subs->name}}</option>
                                            @endforeach
                                           
                                        </select>
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Percentage %</label>
                                        <input required type="number" min="5" name="percentage" id="" class="form-control">
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 1</label>
                                        <input required type="file" name="image1" id="" class="form-control">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 2</label>
                                        <input required type="file" name="image2" id="" class="form-control">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 3</label>
                                        <input required type="file" name="image3" id="" class="form-control">
                                     </div>
                                </div>
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