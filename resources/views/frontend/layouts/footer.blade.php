@section('footer')
    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-3-xs-12 single-footer-widget">
                    <h4>The Show</h4>
                    <ul>
                        <li><a href="{{url('about-event')}}">About The Event</a></li>
                        <li><a href="{{url('event-features')}}">Event Features</a></li>
                        <li><a href="{{url('medical-industry')}}">Medical Industry</a></li>
                        <li><a href="{{url('event-activities')}}">Event Activities</a></li>
                        <li><a href="{{url('past-show-report-2018')}}">Post Show Report 2018</a></li>
                        <li><a href="{{url('about-organisers')}}">About Organisers</a></li>
                        <li><a href="{{url('supporting-organisations')}}">Supporting Organisations</a></li>
                        <li><a href="{{url('strategic-organisations')}}">Strategic Organisations</a></li>
                        <li><a href="{{url('official-sales-partner')}}">Official Sales Partner</a></li>
                        <li><a href="{{url('thank-you-sponsors-2018')}}">Thank You Sponsors 2018</a></li>
                    </ul>
                </div>
                <div class="col-md-3 single-footer-widget">
                    <h4>Exhibition</h4>
                    <ul>
                        <li><a href="{{url('exhibition')}}">Exhibition</a></li>
                        <li><a href="{{url('why-exhibit')}}">Why Exhibit?</a></li>
                        <li><a href="{{url('who-can-exhibit')}}">Who Can Exhibit?</a></li>
                        <li><a href="{{url('exhibitor-profile')}}">Exhibitor Profile</a></li>
                        <li><a href="{{url('exhibitor-registration')}}">Exhibitor Registration</a></li>
                        <li><a href="{{url('layout-plan')}}">Layout Plan</a></li>
                        <li><a href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                        <li><a href="{{url('venue-details')}}">Venue Details</a></li>
                        <li><a href="{{url('stand-and-packages')}}">Stand And Packages</a></li>
                        <li><a href="{{url('sponsorship-opportunities')}}">Sponsorship Opportunities</a></li>
                        <li><a href="{{url('exhibitor-list-2018')}}">Exhibitors List -NEMTO 2018</a></li>                    </ul>
                </div>
                <div class="col-md-3 single-footer-widget">
                    <h4>Visitors</h4>
                    <ul>
                        <li><a href="{{url('why-visit')}}">Why Visit?</a></li>
                        <li><a href="{{url('who-can-visit')}}">Who Can Visit?</a></li>
                        <li><a href="{{url('visitor-profile')}}">Visitor Profile</a></li>
                        <li><a href="{{url('admission-policy')}}">Admission Policy</a></li>
                        <li><a href="{{url('venue-details')}}">Venue Details</a></li>
                        <li><a href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                    </ul>
                </div>
                <div class="col-md-3 single-footer-widget">
                    <h4>Conference</h4>
                    <ul>
                        <li><a href="{{url('why-attend')}}">Why Attend?</a></li>
                        <li><a href="{{url('who-can-attend')}}">Who Can Attend?</a></li>
                        <li><a href="{{url('highlights')}}">Highlights</a></li>
                        <li><a href="{{url('conference-speakers-2018')}}">Speakers 2018</a></li>
                        <li><a href="{{url('agenda-programme')}}">Agenda Programme</a></li>
                        <li><a href="{{url('regional-forum-schedule')}}">Regional Forums - Schedule</a></li>
                        <li><a href="{{url('delegate-registration')}}">Delegate Registration</a></li>
                        <li><a href="{{url('visa-invitation-letter')}}">Visa Invitation Letter</a></li>
                    </ul>
                </div>
                <div class="col-md-3 single-footer-widget">
                    <h4>Others Link</h4>
                    <ul>
                        <li><a href="{{url('agenda')}}">Agenda</a></li>
                        <li><a href="{{url('highlight')}}">Highlights</a></li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-md-3-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Nepal Medical Tourism Organization | All rights reserved | Designed  by <a href="http://exploretech.com.np/" target="_blank">Explore Technologies</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    @yield('script')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('public/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{url("public/js/popper.js")}}"></script>
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{url("public/js/stellar.js")}}"></script>
    <script src="{{url("public/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
    <script src="{{url("public/js/jquery.ajaxchimp.min.js")}}"></script>
    <script src="{{url("public/js/waypoints.min.js")}}"></script>
    <script src="{{url("public/js/mail-script.js")}}"></script>
    <script src="{{url("public/js/contact.js")}}"></script>
    <script src="{{url("public/js/jquery.form.js")}}"></script>
    <script src="{{url("public/js/jquery.validate.min.js")}}"></script>
    <script src="{{url("public/js/mail-script.js")}}"></script>
    <script src="{{url("public/js/theme.js")}}"></script>
    </body>
    </html>
    @endsection