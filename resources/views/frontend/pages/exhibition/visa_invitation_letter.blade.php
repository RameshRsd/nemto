

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nemto_the_show">
                        <h1>VISA INVITATION LETTER
                        </h1>
                        @if(session('success'))
                            <span class="btn btn-success btn-sm">Success</span> {{session('success')}}<br>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        @endif
                        @if($errors->any())
                            <div class="col-sm-12">
                                <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                    @foreach($errors->all() as $error)
                                        <span class="btn btn-danger btn-sm">Error</span> {{$error}}<br>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        @endif

                        <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="company_name">Company Name <span class="red">*</span></label>
                                        <input class="form-control" name="company_name" id="company_name" value="{{old('company_name')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="passport_name">Full Name (As in Passport) <span class="red">*</span></label>
                                        <input class="form-control" name="passport_name" id="passport_name" value="{{old('passport_name')}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nationality">Nationality <span class="red">*</span></label>
                                        <input class="form-control" name="nationality" id="nationality" value="{{old('nationality')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth <span class="red">*</span></label>
                                        <input class="form-control" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-Mail <span class="red">*</span></label>
                                        <input class="form-control" name="email" id="email" value="{{old('email')}}" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number <span class="red">*</span></label>
                                        <input class="form-control" name="mobile_number" id="mobile_number" value="{{old('mobile_number')}}" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="country_id">Country <span class="red">*</span></label>
                                        <select class="form-control" name="country_id" id="country_id">
                                            <option value="">Choose..</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}" @if(old('country_id') == $country->id) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input class="form-control" name="website" id="website" value="{{old('website')}}" type="url">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h2>PASSPORT DETAILS </h2>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="passport_number">Passport Number <span class="red">*</span></label>
                                        <input class="form-control" name="passport_number" id="passport_number" value="{{old('passport_number')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="place_of_issue">Place of Issue <span class="red">*</span></label>
                                        <select class="form-control" name="place_of_issue" id="place_of_issue">
                                            <option value="">Choose..</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}" @if(old('place_of_issue') == $country->id) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date_of_issue">Date of Issue <span class="red">*</span></label>
                                        <input class="form-control" name="date_of_issue" id="date_of_issue" value="{{old('date_of_issue')}}" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="expiry_date">Date of Expiry <span class="red">*</span></label>
                                        <input class="form-control" name="expiry_date" id="expiry_date" value="{{old('expiry_date')}}" type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="passport">Upload Passport<span class="red">*</span></label>
                                        <input class="form-control" name="file" id="passport"  type="file" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="radio" name="TermsOfCondition"> <span class="red">*</span>I agree terms and conditions.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm">Submit</button>
                            </div>
                        </form>
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