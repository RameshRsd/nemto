
@extends('backend.admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            @if($errors->any())
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        @foreach($errors->all() as $error)
                            <span class="btn btn-danger btn-xs">Error</span> {{$error}}<br>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Delegates Registration Details</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abstracts as $key=>$abstract)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            @if(is_file(public_path('uploads/photos').'/'.$abstract->photo) && file_exists(public_path('uploads/photos').'/'.$abstract->photo))
                                                <img src="{{url('public/uploads/photos').'/'.$abstract->photo}}" alt="" style="width:100px;">
                                            @else
                                                <img src="{{url('public/avatar0.jpg')}}" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            {{$abstract->name}}
                                            <br>
                                            @if(isset($abstract->file))
                                                <a href="{{url('public/uploads/files').'/'.$abstract->file}}" target="_blank" class="fa fa-download btn btn-primary btn-xs"> Download File</a>
                                            @else
                                                <i style="color:Red; font-size: 12px;">File Not Uploaded</i>
                                            @endif

                                        </td>
                                        <td>{{$abstract->address1}}</td>
                                        <td>{{$abstract->mobile}}</td>
                                        <td>{{$abstract->email}}</td>
                                        <td>
                                            <div class="btn-group">
                                                @if($abstract->status=='active')
                                                    <small class="btn btn-success btn-xs">Approved</small>
                                                @else
                                                    <small class="btn btn-warning btn-xs">Pending</small>
                                                @endif

                                                <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu payment-status" role="menu">
                                                    @if($abstract->status=='active')
                                                        <li>
                                                            <form action="{{url('admin/abstract-submission/update_status').'/'.$abstract->id}}" method="post">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="status" value="inactive">
                                                                <button type="submit" class="btn btn-danger btn-xs">Reject</button>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <form action="{{url('admin/abstract-submission/update_status').'/'.$abstract->id}}" method="post">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="status" value="active">
                                                                <button type="submit" class="btn btn-success btn-xs">Approve</button>
                                                            </form>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-primary btn-xs fa fa-eye"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection