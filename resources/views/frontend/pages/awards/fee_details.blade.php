

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Awards Payment Details</h1>
                    <div class="nemto_the_show">
                        <table width="100%" border="1" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #006863;">
                            <tbody><tr>
                                <td valign="middle" align="center" style="background-color:#006863;height:35px;"><strong style="color:#fff;">S.No.</strong></td>
                                <td valign="middle" align="center" style="border-left: 1px solid #fff;background-color:#006863;height:35px;"><strong style="color:#fff;">Nomination Category	</strong></td>
                                <td valign="middle" align="center" style="border-left: 1px solid #fff;background-color:#006863;height:35px;"><strong style="color:#fff;">Price</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nomination Form for Medical Facilitator
                                </td>
                                <td>
                                    NR 15000 + Tax
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nomination Form for Medical Value Travel Specialist Hospital
                                </td>
                                <td>
                                    NR 15000 + Tax
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Shri C K Mishra
                                </td>
                                <td>
                                    Secretary
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