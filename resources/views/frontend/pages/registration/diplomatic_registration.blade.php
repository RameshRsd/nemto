

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Diplomatic Official Registration</h2>
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

                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
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
                                    <label for="f_name">First Name <span class="red">*</span></label>
                                    <input class="form-control" name="f_name" id="f_name" value="{{old('f_name')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="l_name">Last Name <span class="red">*</span></label>
                                    <input class="form-control" name="l_name" id="l_name" value="{{old('l_name')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Company Name <span class="red">*</span></label>
                                    <input class="form-control" name="company_name" id="company_name" value="{{old('company_name')}}" type="text">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="designation">Designation <span class="red">*</span></label>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tel">Telephone</label>
                                    <input class="form-control" name="tel" id="tel" value="{{old('tel')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" name="email" id="email" value="{{old('email')}}" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email2">Alternate Email</label>
                                    <input class="form-control" name="email2" id="email2" value="{{old('email2')}}" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input class="form-control" name="website" id="website" value="{{old('website')}}" type="url">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
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