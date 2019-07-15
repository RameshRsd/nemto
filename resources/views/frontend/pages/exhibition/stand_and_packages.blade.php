

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>Package Details</h1>
                        <table width="100%" border="2" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #14afa9;">
                            <tbody><tr>
                                <td class="stand_and_packages" valign="middle" colspan="4" align="left"><strong style="color:#fff;">General</strong></td>
                            </tr>
                            <tr>
                                <td valign="middle">
                                    <div class="main_txt">General Sponsor</div>
                                </td>
                                <td valign="middle">
                                    <div class="main_txt">65000.00</div>
                                </td>
                                <td valign="middle">
                                    <div class="main_txt">US$ 590.00</div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" colspan="4">
                                    <div class="main_txt" style="text-align:justify;">
                                           <li>
                                               Proper branding, 1 B2B Table, 2 Lunch & Dinner Coupon, Directory Listing
                                           </li>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <table width="100%" border="2" align="center" cellpadding="10" cellspacing="0" style="border:solid 1px #14afa9;">
                            <tbody><tr>
                                <td class="stand_and_packages" valign="middle" colspan="4" align="left"><strong style="color:#fff;">Kit Bag</strong></td>
                            </tr>
                            <tr>
                                <td valign="middle">
                                    <div class="main_txt">Kit Bag</div>
                                </td>
                                <td valign="middle">
                                    <div class="main_txt">600000.00</div>
                                </td>
                                <td valign="middle">
                                    <div class="main_txt">US$ 5500.00</div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="middle" colspan="4">
                                    <div class="main_txt" style="text-align:justify;">
                                        <li>
                                            Proper branding, 1 B2B Table, 4 Lunch & Dinner Coupon, Directory Listing, Full Page inner side color Advt. in Souvenir
                                        </li>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <div class="nemto_contact_us">
                            <h2>For more information please contact:</h2>
                            <p><b> NEPAL MEDICAL TOURISM ORGANIZATION</b></p>
                            <p><b> Putalisadak, Kathmandu, Nepal</b></p>
                            <p><i class="fa fa-phone"></i> +977-1-4223473</p>
                            <p><i class="fa fa-mobile"></i> +977-9860555163, 9851206644,9860832126</p>
                            <p> <i class="fa fa-envelope"></i> info@nemto.org</p>
                            <div class="contact_us">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28258.80718500621!2d85.30210885775823!3d27.70645015485687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1971dab896fb%3A0x90e421e7a8cf27ac!2sNepal+Medical+Tourism+Organization!5e0!3m2!1sen!2snp!4v1562461823860!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                    </div>
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