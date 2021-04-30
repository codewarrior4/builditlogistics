@extends('admin.layout.base')
@section('title')
      Customer Detail
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
                                <h3 class="mb-0" > Customer Detail</h3>
                            </div>
                        </div>
                        
                            <div class="form-group">
                            @csrf
                              <label for="exampleFormControlInput1">Firstname</label>
                              <input type="text" required disabled value="{{$customer->firstname}}" name="firstname" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">Lastname</label>
                              <input type="text" required disabled value="{{$customer->lastname}}" name="lastname" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">Phone</label>
                              <input type="text" required disabled value="{{$customer->phone}}" name="phone" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">State</label>
                              <input type="text" required disabled value="{{$customer->state}}" name="state" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">City</label>
                              <input type="text" required disabled value="{{$customer->city}}" name="city" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">Zip</label>
                              <input type="text" required disabled value="{{$customer->zip}}" name="zip" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                           
                              <label for="exampleFormControlInput1">Address</label>
                              <input type="text" required disabled value="{{$customer->address}}" name="address" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Email</label>
                              <input type="text" required disabled value="email" name="email" class="form-control" id="exampleFormControlInput1">
                             
                            </div>
                            <fieldset>
                                <legend>Change Status</legend>
                                <form action="/admin/customer/" method="post">
                                    <div class="form-group">
                                    @csrf
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select name="status" class="custom-select mb_30 w-100" style="display: none;" id="">
                                            <option value="1" {{($customer->status ==1)?'selected':''}}>Active</option>
                                            <option value="2" {{($customer->status ==2)?'selected':''}}>Suspended</option>
                                        </select>
                                       <input type="hidden" name="id" value="{{$customer->id}}"> 
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-outline-primary">
                                    </div>
                                </form>
                            </fieldset>
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