

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="nemto_the_show">
                        <h1>Supporting Organisations</h1>
                        <h2>MINISTRY OF AYUSH, GOVT OF Nepal</h2>
                        <p><a href="http://indianmedicine.nic.in/" target="_blank"><img src="{{url("public/images/logo/expo.jpg")}}" align="left" style="margin-right:20px;"></a> The Ministry of AYUSH (Ayurveda, Yoga &amp; Naturopathy, Unani, Siddha and Homoeopathy) lays emphasis on up-gradation of AYUSH educational standards, quality control and standardization of drugs, improving the availability of medicinal plant material, research and development and awareness generation about the efficacy of the system domestically and internationally.</p><br>

                        <h2>MINISTRY OF EXTERNAL AFFAIRS, GOVT OF Nepal</h2>
                        <p><a href="http://www.mea.gov.in/" target="_blank"><img src="{{url("public/images/logo/expo.jpg")}}" align="left" style="margin-right:20px;"></a> The Ministry of External Affairs (abbreviated as MEA) is responsible for the conduct of India's relations with foreign countries. The Ministry is also responsible for the country's representation in the United Nations and advise other Ministries and State Governments while dealing with foreign governments or institutions.</p><br>

                        <h2>MINISTRY OF HEALTH &amp; FAMILY WELFARE, GOVT OF Nepal</h2>
                        <p><a href="http://www.mohfw.nic.in/" target="_blank"><img src="{{url("public/images/logo/expo.jpg")}}" align="left" style="margin-right:20px;"></a> The Ministry of Health and Family Welfare comprises the Departments of Health &amp; Family Welfare, Department of Health Research.  Directorate General of Health Services (Dte.GHS) is attached office of the Department of Health &amp; Family Welfare and has subordinate offices spread all over the country. The DGHS renders technical advice on all medical and public health matters and is involved in the implementation of various health services.</p><br>

                        <!--<h2>MINISTRY OF HOME AFFAIRS, GOVERNMENT OF INDIA</h2>
                        <p><a href="http://www.mea.gov.in/" target="_blank"><img src="images/organisers/supporting/4.png" align="left" style="margin-right:20px;"></a> The Ministry of Home Affairs or Home Ministry is an interior ministry of the Government of India. It is mainly responsible for the maintenance of internal security and domestic policy.</p><br/>-->

                        <h2>MINISTRY OF TOURISM, GOVERNMENT OF Nepal</h2>
                        <p><a href="http://www.incredibleindia.org/en/" target="_blank"><img src="{{url("public/images/logo/expo.jpg")}}" align="left" style="margin-right:20px;"></a> The Ministry of Tourism is the nodal agency for the formulation of national policies and programs and for the co-ordination of activities of various Central Government Agencies, State Governments/UTs and the Private Sector for the development and promotion of tourism in the country. </p><br>
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