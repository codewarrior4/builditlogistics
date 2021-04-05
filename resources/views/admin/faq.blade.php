@extends('admin.layout.base')
@section('title')
    FAQ
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
    <div class="container">
        <h2>Add New FAQ</h2>
        <hr>
        <form action="">

            <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="" id="question" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="my-textarea">Answer</label>
                <textarea id="my-textarea" class="form-control" name="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary" value="Add">
            </div>
        </form>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="accordion accordion_custom mb_50" id="accordion_ex">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="#" class="btn" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Example 0
                        </a>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                            <hr>
                            <input type="submit" value="Delete" class="btn btn-rounded btn-outline-danger">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <a href="#" class="btn collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Example 1
                        </a>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <a href="#" class="btn collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Example 2
                        </a>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree3">
                    <h2 class="mb-0">
                        <a href="#" class="btn collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree3"
                            aria-expanded="false" aria-controls="collapseThree">
                            Example 3
                        </a>
                    </h2>
                </div>
                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree3">
                    <h2 class="mb-0">
                        <a href="#" class="btn collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree4"
                            aria-expanded="false" aria-controls="collapseThree">
                            Example 4
                        </a>
                    </h2>
                </div>
                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree3"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree3">
                    <h2 class="mb-0">
                        <a href="#" class="btn collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree5"
                            aria-expanded="false" aria-controls="collapseThree">
                            Example 5
                        </a>
                    </h2>
                </div>
                <div id="collapseThree5" class="collapse" aria-labelledby="headingThree3"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection