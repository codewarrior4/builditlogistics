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
                    @if (session('msg'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{session('msg')}}</strong>
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
                                <h3 class="mb-0" >Update Product</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" action="/admin/product/update" method="post">
                            <div class="form-group">
                            @csrf
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" required value="{{$products->pname}}" name="name" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Banner</label>
                             <img src="/uploads/{{$products->banner}}" class="img img-responsive" width="400" height="250" alt="">
                            </div>
                            @csrf
                            <div class="form-group">
                              <label for="exampleFormControlSelect2">Description</label>
                             <textarea required name="description" id="summernote" cols="30" rows="10">{!!$products->description!!}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Price</label>
                                        <input required type="text" class="form-control" value="{{$products->price}}" name="price">
                                    </div> 
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Compared Price</label>
                                        <input required type="text" class="form-control" value="{{$products->compare_price}}" name="compare_price" id="">
                                    </div> 
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Category</label>
                                        <select required name="category" class="default_sel mb_30 w-100" style="display: none;">
                                            @foreach ($cat as $cats)
                                                @if($products->category == $cats->id)
                                                 <option selected value="{{$products->category}}" >{{$products->title}}</option>
                                                @else
                                                <option value="{{$cats->id}}" >{{$cats->title}}</option>
                                                @endif

                                            @endforeach
                                        </select>
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Sub Category</label>
                                        <select required name="sub_category" class="default_sel mb_30 w-100" style="display: none;">
                                            @foreach ($sub as $subs)
                                                @if($products->sub_category == $subs->id)
                                                 <option selected value="{{$products->sub_category}}" >{{$products->name}}</option>
                                                @else
                                                <option value="{{$subs->id}}" >{{$subs->name}}</option>
                                                @endif
                                            @endforeach
                                           
                                        </select>
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Percentage</label>
                                        <input required type="number" min="5" class="form-control" value="{{$products->percentage}}" name="percentage" id="">
                                    </div> 
                                </div>
                            </div>
                            <input type="hidden" name="pid" value="{{$products->pid}}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 1</label>
                                        <img src="/uploads/{{$products->image1}}" class="img img-responsive" width="400" height="250" alt="">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 2</label>
                                        <img src="/uploads/{{$products->image2}}" class="img img-responsive" width="400" height="250" alt="">
                                     </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-input">Image Extra 3</label>
                                        <img src="/uploads/{{$products->image3}}" class="img img-responsive" width="400" height="250" alt="">
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