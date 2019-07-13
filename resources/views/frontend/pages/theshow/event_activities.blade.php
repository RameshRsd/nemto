

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Event Activities</h1>
                        <ul>
                            <li> Exhibition (three days)</li>
                            <li> Conference ( CME ) (two days)</li>
                            <li> B2B meetings (three days)</li>
                            <li> Hospital Inspection Visits (one day ie. 3rd day of the Event)</li>
                            <li> Proposed Health Minister’s round table meeting followed by Networking Dinner hosted by Hon’ble Health Minister</li>
                            <li> Proposed Tourism Minister’s round table meeting followed by Networking Dinner hosted by Hon’ble Tourism Minister</li>
                            <li> Networking Dinner on last day hosted by FICCI on the last day of the Event</li>
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