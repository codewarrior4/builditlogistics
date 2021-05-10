@extends('admin.layout.base')
@section('title')
   Order Details
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
                <div class="col-12">
                    <div class="QA_section">
                        

                        <div class="QA_table ">
                            Items
                            <hr>
                            <!-- table-responsive -->
                            <div class="table-responsive">
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $count =>$order)
                                    <tr>
                                        <th scope="row">{{$count +1}}</th>
                                        <td>{{$order->pname}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>&#8358; {{$order->price}}</td>
                                        <td>&#8358; {{number_format($order->price * $order->quantity,2)}}</td>
                                    </tr>
                                    @endforeach
                                   
                                    <tr>
                                        <th colspan="5">Total Price &#8358;{{number_format($sum,2)}}</th>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                        <p class="pt-3 font-weight-bold">Customer Details</p>
                        <hr>
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Billing Details</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                        
                                        <div class="card-body">
                                        <h5 class="card-title">{{$information->baddress1 }} <br>{{$information->baddress2}}</h5>
                                        <p class="card-text"><b class="font-weight-bold">City</b> {{$information->bcity}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Country</b> {{$information->bcountry}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Email</b> {{$information->bemail}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Phone</b> {{$information->bphone}}.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Shipping Details</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                        
                                        <div class="card-body">
                                        <h5 class="card-title">{{$information->saddress1 }} <br>{{$information->saddress2}}</h5>
                                        <p class="card-text"><b class="font-weight-bold">City</b> {{$information->scity}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Country</b> {{$information->scountry}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Email</b> {{$information->semail}}.</p>
                                        <p class="card-text"><b class="font-weight-bold">Phone</b> {{$information->sphone}}.</p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Customer Details</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title">{{$user->firstname . " " .$user->lastname}}</h5>
                                            <p class="card-text"><b class="font-weight-bold">Phone</b> {{$user->phone}}.</p>
                                            <p class="card-text"><b class="font-weight-bold">Email</b> {{$user->email}}.</p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Update Order Status</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                       
                                        <div class="card-body">
                                            <form action="/admin/order/message" method="post">
                                                <div class="form-group">
                                                    <label for="my-input">Status</label>
                                                   
                                                    <select name="status" class="custom-select mb_30 w-100" >

                                                        <option data-display="Select">Select</option>
                                                        <option {{($orders[0]->status =='pending')?'selected':'' }} value="pending">Pending</option>
                                                        <option {{($orders[0]->status =='processing')?'selected':'' }} value="processing">Processing</option>
                                                        <option {{($orders[0]->status =='hold')?'selected':'' }} value="hold">On Hold</option>
                                                        <option {{($orders[0]->status =='cancelled')?'selected':'' }} value="cancelled">Cancelled</option>
                                                        <option {{($orders[0]->status =='review')?'selected':'' }} value="review" >Under Review</option>
                                                        <option {{($orders[0]->status =='ready')?'selected':'' }} value="ready">Ready For Delivery</option>
                                                    </select>
                                                    @csrf
                                                    <input type="hidden" name="paymentid" value="{{$orders[0]->paymentid}}">
                                                   
                                                </div>
                                                 <input type="submit" value="Update Detail" class="btn btn-outline-primary">
                                            </form>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Send Customer Message</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                       
                                        <div class="card-body">
                                            <form action="/admin/order/message" method="post">
                                                <div class="form-group">
                                                  <label for="Subject">Subject</label>
                                                  <input type="text" class="form-control" name="subject" id="Subject" aria-describedby="helpId" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="my-textarea">Message</label>
                                                    <textarea id="my-textarea" class="form-control" name="message" rows="3"></textarea>
                                                </div> 
                                                    @csrf
                                                    <input type="hidden" name="paymentid" value="{{$orders[0]->paymentid}}">
                                                    <input type="hidden" name="toemail" value="{{$user->email}}">
                                                    <input type="hidden" name="userid" value="{{$user->id}}">
                                                
                                                 <input type="submit" value="Send Message" class="btn btn-outline-primary">
                                            </form>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" > Messages sent</h3>
                                        </div>
                                    </div>
                                    <div class="card shadow shadow-lg">
                                       
                                        <div class="card-body">
                                            <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                                @if (count($messages)==0)
                                                    <div class="card shadwo shadow-lg">
                                                        <div class="card-header">
                                                            No messages Yet
                                                        </div>
                                                    </div>
                                                @else
                                                <p class="font-weight-bold pb-4">(Tap on the subject to view message details)</p>
                                                    @foreach ($messages as $message)
                                                        <div class="card border border-top-0 mb-4 border-primary">
                                                            <div class="card-header" id="headingOne">
                                                                <h2 class="mb-0">
                                                                    <a href="#" class="btn" type="button" data-toggle="collapse"
                                                                        data-target="#collapse{{$message->id}}" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        {{$message->subject}}
                                                                    </a>
                                                                </h2>
                                                            </div>

                                                            <div id="collapse{{$message->id}}" class="collapse " aria-labelledby="headingOne"
                                                                data-parent="#accordion_ex">
                                                                <div class="card-body">
                                                                    <p>{{$message->message}}</p>
                                                                    <a href="/admin/ordermessage/delete/{{$message->id}}" class="btn btn-outline-danger">Delete Message</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                <div class="row d-flex align-items-center space-between">
                                                <div class="col-6"> Total Message {{count($messages)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection