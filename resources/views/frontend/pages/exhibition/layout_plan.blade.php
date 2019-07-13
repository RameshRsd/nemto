

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Layout Plan</h1>
                            <div class="" id="gallery1" align="center">
                                <p style="text-align:center;font-size:20px;color:#000;font-weight:bold;" align="center">
                                    <span style="text-align:center;color:#000;">Layout - Hall</span><br>
                                    <!-- <h3>Coming Soon...</h3> -->
                                    <!-- <a href="advantage-healthcare-exhibition-layout-plan1.php">
                                       <img src="thumbnail.php?file=images/Hall1.jpg&maxw=350&maxh=442"/>
                                   </a>   -->
                                    <iframe id="fred" title="Advantage Healthcare India 2019 - Layout Plan" src="{{url('public/images/pdf/AHCI2019Layout_110619.pdf')}}" frameborder="1" scrolling="auto" height="800" width="100%">
                                    </iframe>
                                </p>

                                <!-- <p style="text-align:center;font-size:20px;color:#000;font-weight:bold;">
                                    <span style="text-align:center;color:#000;">Layout - Hall 2</span><br/>
                                    <a href="advantage-healthcare-exhibition-layout-plan2.php"><img src="thumbnail.php?file=images/Hall2.jpg&maxw=350&maxh=442"/></a>
                                </p> -->
                            </div>
                            <p>

                            </p>

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