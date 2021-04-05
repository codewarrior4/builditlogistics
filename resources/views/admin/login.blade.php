@extends('admin.layout.base')
@section('title')
    Login
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
                                <h3 class="mb-0" >Login</h3>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- sign_in  -->
                                <div class="modal-content cs_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Log in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <a href="#" class="btn_1 full_width text-center">Log in</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>

@endsection