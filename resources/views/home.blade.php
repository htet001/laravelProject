@extends('layout.master')

@section('title','Home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('layout.sideBar')
        </div>
        <div class="col-md-9">
            <div class="col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/image01.jpg') }}" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title burmese">Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection