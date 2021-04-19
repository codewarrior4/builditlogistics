@extends('admin.layout.base')
@section('title')
    Customers
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
                <div class="col-12">
                    <div class="QA_section">
                        

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $count => $customer)
                                    <tr>
                                        <th scope="row">{{$count +1}}</th>
                                        <td>{{$customer->firstname .' '. $customer->lastname}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->state}}</td>
                                        <td><p class="btn {{($customer->status == 1)? 'btn-success':'btn-danger'}} text-white btn-rounded">{{($customer->status == 1)? 'Active':'Suspended'}}</p></td>
                                        <td><a href="/admin/customer/{{$customer->id}}" class="status_btn">View More</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection