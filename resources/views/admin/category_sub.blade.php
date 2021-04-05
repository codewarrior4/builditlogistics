@extends('admin.layout.base')
@section('title')
    Add Category
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
                                <h3 class="mb-0" >Add Category</h3>
                            </div>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
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
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-outline-primary">
                            </div>
                          </form>
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
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>Mayowa</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>Mayowa</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>Mayowa</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mayowa</td>
                                        <td>Mayowa</td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection