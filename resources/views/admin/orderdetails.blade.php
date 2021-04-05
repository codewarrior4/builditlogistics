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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>8.00</td>
                                        <td>#4,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>8.00</td>
                                        <td>#4,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>3</td>
                                        <td>8.00</td>
                                        <td>#4,000</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5">Total Price #25,0000</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        Customer Details
                        <hr>
                        <div class="row">

                            <div class="col-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Billing Details</h3>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                        
                                        </div>
                                        <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Shipping Details</h3>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                        
                                        </div>
                                        <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Customer Details</h3>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                        
                                        </div>
                                        <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                            <div class="white_box mb_30">
                                    <div class="box_header ">
                                        <div class="main-title">
                                            <h3 class="mb-0" >Update Order Status</h3>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                        
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="my-input">Status</label>
                                                    <select class="default_sel mb_30 w-100" style="display: none;">
                                                        <option data-display="Select">Pending</option>
                                                        <option value="1">Processing</option>
                                                        <option value="2">On Hold</option>
                                                        <option value="2">Cancelled</option>
                                                        <option value="3" >Under Review</option>
                                                        <option value="4">Ready For Delivery</option>
                                                    </select>
                                                </div>
                                        </form>
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