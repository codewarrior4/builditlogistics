@extends('admin.layout.base')
@section('title')
    All Products
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
                                <h3 class="mb-0" >All Products</h3>
                            </div>
                        </div>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="/admin/products/1" class="btn btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="/admin/products/1" class="btn btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="/admin/products/1" class="btn btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td><img src="{{URL::asset('img/card2.jpg')}}" width="70" height="70" alt=""></td>
                                        <td>http://www.asaksks.com/asld</td>
                                        <td><a href="/admin/products/1" class="btn btn-outline-primary">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection