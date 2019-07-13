

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>FOREIGN DELEGATES</h1>
                    <div class="nemto_the_show">
                    <h2>Foreign Delegations From Focus Counties</h2>
                        <img src="{{url('public/images/pagesimg/worldmap.png')}}" alt="">
                        <p>
                            <strong>HOSTED DELEGATIONS FROM THE FOLLOWING FOCUS COUNTRIES:</strong> Afghanistan, Algeria, Armenia, Azerbaijan, Bahrain, Bangladesh, Belarus, Bhutan, Botswana, Brunei, Burundi, Cambodia, Cameroon, China, Comoros, Democratic Republic of the Congo, Djibouti, Egypt, Eritrea, Ethiopia, Georgia, Ghana, Indonesia, Iran, Iraq, Israel, Ivory Coast, Kazakhstan, Kenya, Kuwait, Kyrgyzstan, Laos, Lebanon, Lesotho, Malawi, Maldives, Mauritius, Moldova, Mongolia, Morocco, Mozambique, Myanmar, Namibia, Nepal, Nigeria, Oman, Philippines, Qatar, Russia, Rwanda, Saudi Arabia, Senegal, Seychelles, Sri Lanka, Sudan, Taiwan, Tajikistan, Tanzania, Tunisia, Turkmenistan, Uganda, Ukraine, United Arab Emirates, Uzbekistan, Vietnam, Zambia, Zimbabwe
                        </p>
                        <h2>Hosted Delegation Composition of Focus Countries</h2>
                        <ul>
                            <li>CEOs of leading private hospitals</li>
                            <li>Presidents of medical associations</li>
                            <li>Heads of Government hospitals</li>
                            <li>Government officials from Ministry of Health who approve cases for medical travel abroad</li>
                            <li>Medical insurance company officials</li>
                            <li>Medical travel facilitators</li>
                            <li>Medical trade journalists</li>
                            <li>Medical devices dealers / importers</li>
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