

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Foreign Delegate Registration</h1>
                    <form class="form-contact contact_form" action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h2>DELEGATE GENERAL INFORMATION</h2>
                                    @if(session('success'))
                                        <span class="btn btn-success btn-sm">Success</span> {{session('success')}}<br>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <hr>
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
                                        <hr>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="register">DID YOU ALSO REGISTER FOR NEMTO 2018 <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="register" id="register" class="form-control">
                                        <option value="">-SELECT-</option>
                                        <option value="Yes" @if(old('register') == 'Yes') selected @endif> Yes</option>
                                        <option value="No" @if(old('register') == 'No') selected @endif> No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="attend">DID YOU ATTEND NEMTO 2018 <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="attend" id="attend" class="form-control">
                                        <option value="">-SELECT-</option>
                                        <option value="Yes" @if(old('attend') == 'Yes') selected @endif> Yes</option>
                                        <option value="No" @if(old('attend') == 'No') selected @endif> No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="gender">GENDER <span class="red">*</span></label>
                                </div>
                            </div><div class="col-sm-5">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">-Select Gender-</option>
                                        <option value="Male" @if(old('gender') == 'Male') selected @endif> Male</option>
                                        <option value="Female" @if(old('gender') == 'Female') selected @endif> Female</option>
                                        <option value="Others" @if(old('gender') == 'Others') selected @endif> Others</option>
                                    </select>
                                </div>
                            </div>
                            {{----}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h2>Full Name (As in Passport)</h2>
                                </div>
                            </div>
                           <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="">SELECT </option>
                                        <option value="Mr" @if(old('title')=='Mr') selected @endif> Mr.</option>
                                        <option value="Mrs" @if(old('title')=='Mrs') selected @endif> Mrs.</option>
                                        <option value="Ms" @if(old('title')=='Ms') selected @endif> Ms.</option>
                                        <option value="Dr" @if(old('title')=='Dr') selected @endif> Dr.</option>
                                        <option value="Er" @if(old('title')=='Er') selected @endif> Er.</option>
                                        <option value="Prof" @if(old('title')=='Prof') selected @endif> Prof.</option>
                                        <option value="Col" @if(old('title')=='Col') selected @endif> Col.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="l_name">SURNAME <span class="red">*</span></label>
                                    <input class="form-control" name="l_name" id="l_name" value="{{old('l_name')}}" type="text">
                                </div>
                            </div>
                           <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="f_name">FIRST NAME <span class="red">*</span></label>
                                    <input class="form-control" name="f_name" id="f_name" value="{{old('l_name')}}" type="text">
                                </div>
                            </div>
                            {{----}}

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="recommended_value">YOU HAVE BEEN RECOMMENDED TO FICCI FOR NEMTO 2019 BY <span class="red">*</span></label>
                                    <select name="recommended_id" id="recommended_value" class="form-control">
                                        <option value=""> - Select Recommended By - </option>
                                        @foreach($recommendeds as $recommended)
                                            <option value="{{$recommended->id}}" @if(old('recommended_id')==$recommended->id) selected @endif>{{$recommended->name}}</option>
                                            @endforeach
                                    </select>
                                    <div id="other_specify" style="margin-top:5px; display: none;">
                                        <label for="recommended_other"><span class="red">*</span>RECOMMENDED BY OTHERS (PLEASE SPECIFY)</label>
                                        <input type="text" name="recommended_other" value="{{old('recommended_other')}}" class="form-control" placeholder="RECOMMENDED BY OTHERS (PLEASE SPECIFY)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="occupation_id">OCCUPATION <span class="red">*</span></label>
                                    <select class="form-control validate[required]" style="text-transform:uppercase;" name="occupation_id" id="occupation_id">
                                        <option value="" selected=""> - Select Occupation - </option>
                                        @foreach($occupations as $occupation)
                                            <option value="{{$occupation->id}}" @if(old('occupation_id')==$occupation->id) selected @endif>{{$occupation->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_name">ORGANISATION NAME <span class="red">*</span></label>
                                    <input class="form-control" name="company_name" id="company_name" value="{{old('company_name')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="designation">DESIGNATION<span class="red">*</span></label>
                                    <input class="form-control" name="designation" id="designation" value="{{old('designation')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="country_id">Country</label>
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
                                    <label for="state_id">State</label>
                                    <select class="form-control" name="state_id" id="state_id">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="district_id">District</label>
                                    <select class="form-control" name="district_id" id="district_id">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="city">City <span class="red">*</span></label>
                                    <input class="form-control" name="city" id="city" value="{{old('city')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address1">ADDRESS Line 1 <span class="red">*</span></label>
                                    <input class="form-control" name="address1" id="address1" value="{{old('address1')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address2">Address Line 2 <span class="red">*</span></label>
                                    <input class="form-control" name="address2" id="address2" value="{{old('address2')}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tel1">OFFICE TELEPHONE<span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="tel1" id="tel1" value="{{old('tel1')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="tel2" id="tel2" value="{{old('tel2')}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="mobile1">MOBILE NUMBER<span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="mobile1" id="mobile1" value="{{old('mobile1')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" name="mobile2" id="mobile2" value="{{old('mobile2')}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">E-MAL ID<span class="red">*</span></label>
                                    <input class="form-control" name="email" id="email" value="{{old('email')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website">WEBSITE<span class="red">*</span></label>
                                    <input class="form-control" name="website" id="website" value="{{old('website')}}" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="details">YOUR DETAILED PROFILE <span class="red">*</span></label>
                                    <textarea class="form-control w-100" name="details" id="details" cols="30" rows="9" placeholder="Describe Yourself">{{old('details')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Submit</button>
                        </div>
                    </form>


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
@section('script')
    <script>
        $(document).ready(function(){
            $('#recommended_value').on('change', function() {
                if ( this.value == '3')
                {
                    $("#other_specify").show();
                }
                else
                {
                    $("#other_specify").hide();
                }
            });
        });
    </script>
    <script>
        $('#country_id').on('change',function (e) {
            console.log(e);
            var country_id = e.target.value;
            $.get('country_name?country_id=' + country_id, function (data) {
                $('#district_id').empty();
                $('#state_id').empty();
                $('#state_id').append('<option value="">Choose..</option>')
                $.each(data, function (index, zoneObj) {
                    $('#state_id').append('<option value="'+zoneObj.id+'" @if(old('state_id')=='+zoneObj.id+') selected @endif>'+zoneObj.name+'</option>')
                })
            })
        })
    </script>
    <script>
        $('#state_id').on('change',function (e) {
            console.log(e);
            var state_id = e.target.value;
            $.get('state_name?state_id=' + state_id, function (data) {
                $('#district_id').empty();
                $.each(data, function (index, zoneObj) {
                    $('#district_id').append('<option value="'+zoneObj.id+'" @if(old('district_id')=='+zoneObj.id+') selected @endif>'+zoneObj.name+'</option>')
                })
            })
        })
    </script>
@endsection