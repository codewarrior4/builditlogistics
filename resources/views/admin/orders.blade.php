@extends('admin.layout.base')
@section('title')
   Orders
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
                                        <th scope="col">Customer name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>Pending</td>
                                        <td>#4,000</td>
                                        <td><a href="order/1" class="status_btn">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>Pending</td>
                                        <td>#4,000</td>
                                        <td><a href="order/1" class="status_btn">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>Pending</td>
                                        <td>#4,000</td>
                                        <td><a href="order/1" class="status_btn">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection