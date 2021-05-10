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
    <div class="container">
        <h2>Add New FAQ</h2>
        <hr>
        <form action="/admin/faq" method="post">
        @csrf
            <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" required class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="my-textarea">Answer</label>
                <textarea id="my-textarea" class="form-control" required name="answer" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary" value="Add">
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="accordion accordion_custom mb_50" id="accordion_ex">
            @foreach ($faq as $faqs)
            <div class="card border border-top-0 mb-4 border-primary">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <a href="#" class="btn" type="button" data-toggle="collapse"
                            data-target="#collapse{{$faqs->id}}" aria-expanded="true"
                            aria-controls="collapseOne">
                            {{$faqs->question}}
                        </a>
                    </h2>
                </div>

                <div id="collapse{{$faqs->id}}" class="collapse " aria-labelledby="headingOne"
                    data-parent="#accordion_ex">
                    <div class="card-body">
                        <p>{{$faqs->answer}}</p>
                            <hr>
                            <a href="faq/delete/{{$faqs->id}}" class="btn btn-rounded btn-outline-danger">Delete </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row d-flex align-items-center space-between">
              <div class="col-6"> Total {{$faq->total()}}</div>
              <!-- <div class="col-6">  {{$faq->onEachSide(3)->links('pagination::bootstrap-4')}}</div> -->
              <div class="col-6">  {{$faq->links('pagination::bootstrap-4')}}</div>
            </div>
        </div>
    </div>

@endsection