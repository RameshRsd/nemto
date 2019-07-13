

@extends('frontend.layouts.master')
@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Abstract Submission</h2>
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
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
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
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="name">NAME OF PRESENTOR <span class="red">*</span></label>
                                    <input class="form-control" name="name" id="name" value="{{old('name')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>NAME OF RELATED ORGANIZATION <span class="red">*</span></label>
                                    <input class="form-control" name="company_name" id="company_name" value="{{old('company_name')}}" type="text">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="presentation_title">TITLE OF PRESENTATION <span class="red">*</span></label>
                                    <input class="form-control" name="presentation_title" id="presentation_title" value="{{old('presentation_title')}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">E-mail Address<span class="red">*</span></label>
                                    <input class="form-control" name="email" id="email" value="{{old('email')}}" type="email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <hr>
                                    <label for="email">Contact Details<span class="red">*</span></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="mobile">Mobile/Tel<span class="red">*</span></label>
                                            <input class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="address1">ADDRESS <span class="red">*</span></label>
                                            <input class="form-control" name="address1" id="address1" value="{{old('address1')}}" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="abstract_info">ABSTRACT INFORMATION<span class="red">*</span></label>
                                    <textarea name="abstract_info" id="abstract_info" cols="30" class="form-control">{{old('abstract_info')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="objective">OBJECTIVE<span class="red">*</span></label>
                                    <textarea name="objective" id="objective" cols="30" class="form-control">{{old('objective')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="method_value">Method<span class="red">*</span></label>
                                    <textarea name="method_value" id="method_value" cols="30" class="form-control">{{old('method')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="result">Result<span class="red">*</span></label>
                                    <textarea name="result" id="result" cols="30" class="form-control">{{old('result')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="conclusion">Conclusion<span class="red">*</span></label>
                                    <textarea name="conclusion" id="conclusion" cols="30" class="form-control">{{old('conclusion')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="question1">What professional practice gap does this abstract address? <span class="red">*</span></label>
                                    <textarea name="question1" id="question1" cols="30" class="form-control">{{old('question1')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="question2">How will this abstract influence change in competence, performance or patient outcomes? *
                                        <br>Conflict of Interest
                                        <span class="red">*</span></label>
                                    <textarea name="question2" id="question2" cols="30" class="form-control">{{old('question2')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nature">Nature of Conflict</label>
                                    <textarea name="nature" id="nature" cols="30" class="form-control">{{old('nature')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nature">File Upload</label>
                                    <input type="file" class="form-control" name="file" id="file">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nature">Photo Upload</label>
                                    <input type="file" class="form-control" name="photo" id="photo">
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