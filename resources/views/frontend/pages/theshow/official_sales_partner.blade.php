

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>official sales partner</h1>
                        <h2>GURDASMAL HOSPITALITY AND CONSULTANCY SERVICES PVT. LTD.</h2>
                        <table border="0" cellspacing="0" cellpadding="10">
                            <tbody><tr>
                                <td width="40%" valign="top"><a href="#" target="_blank"><img src="{{url("public/images/logo/expo.jpg")}}" align="left" style="margin-right:20px;"></a> </td>
                                <td width="60%" style="line-height:220%;">
                                    <strong>Mr. Krishna Pandey</strong><br>
                                    Director<br>
                                    Gurdasmal Hospitality and Consultancy Services Pvt Ltd,<br>
                                    C - 2 / 83, Sector - 36, Noida<br>
                                    Gautam Budh Nagar, U.P., India<br>
                                    <strong>Mobile :</strong> +91 98 7354 8997, +91 88 2610 4422<br>
                                    <strong>Email :</strong> <a href="mailto:dalipchopra65@gmail.com">krishna@nemto.org</a>, <a href="mailto:ghcsindia@gmail.com">krishna@nemto.org</a><br>
                                </td>
                            </tr>
                            </tbody></table>
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