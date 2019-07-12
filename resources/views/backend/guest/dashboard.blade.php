@extends('frontend.layouts.master')
@section('content')


    <section class="">
        <img src="{{url("public/images/slider/2nd_banner.jpg")}}" class="d-block w-100" alt="...">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Guest Area</h4>
                    <br>
                    <a class="btn btn-primary btn-sm" href="{{url('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </section>

@endsection