

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Official Travel Partner </h1>
                        <p>
                            “To perform the travel related activities, the below travel partner is our official partner”
                        </p>
                        <br>
                        <p><b>Yatra Tours and Travels Pvt. Ltd.</b></p>
                        <p>Lazimpat, Kathmandu, Nepal</p>
                        <p>E-mail: info@yatratnt.com</p>
                        <p><a href="www.yatratnt.com" target="_blank">www.yatratnt.com</a> </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right_side_registration">
                        @include('frontend.layouts.right-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection