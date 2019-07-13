

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">B2B Meetings<hr></h2>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="name"><span class="red">*</span>Name</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="name" id="name" value="{{old('name')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="website"><span class="red">*</span>Web</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="website" id="website" value="{{old('website')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="designation"><span class="red">*</span>Designation</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="designation" id="designation" value="{{old('designation')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="tel"><span class="red">*</span>Phone</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="tel" id="tel" value="{{old('tel')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="company_name"><span class="red">*</span>Organization</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="company_name" id="company_name" value="{{old('company_name')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="mobile"><span class="red">*</span>Mobile</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="address"><span class="red">*</span>Address</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="address" id="address" value="{{old('address')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="details"><span class="red">*</span>Please Describe your Nature of Business</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="details" id="details" value="{{old('details')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="email"><span class="red">*</span>Email</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="email" id="email" value="{{old('email')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label for="prefer_com"><span class="red">*</span>Companies / Organizations
                                                you wish to meet</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="prefer_com" id="prefer_com" value="{{old('prefer_com')}}" type="text">
                                        </div>
                                    </div>
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

