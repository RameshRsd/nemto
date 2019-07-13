

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Why Attend ?</h1>
                        <p>
                            The objective of this summit is to promote Nepal as a New Global Global Healthcare Destination and to enable streamlined medical services exports from Nepal. This underlying objective is a unique conglomeration of the global B2B Meetings as below;
                        </p>
                        <br>
                        <ul>
                            <li> Healthcare Service Provider Meet</li>
                            <li> Healthcare Facilitators Meet</li>
                            <li> Healthcare Technology Provider Meet</li>
                            <li> Healthcare  Education Provider Meet</li>
                            <li> Medicine & Equipment Suppliers Meet</li>
                            <li> Healthcare Investors Meet</li>
                        </ul>
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