
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
                            <h3 class="box-title">Visa Invitation Request</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Company Name</th>
                                    <th>Full Name (Passport)</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invitations as $key=>$invitation)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$invitation->company_name}}</td>
                                        <td>
                                            {{$invitation->passport_name}}<br>
                                            @if(isset($invitation->file))
                                            <a href="{{url('public/uploads/passport').'/'.$invitation->file}}" target="_blank" class="fa fa-download btn btn-primary btn-xs"> Download Passport</a>
                                                @else
                                                <i style="color:Red; font-size: 12px;">Passport Not Uploaded</i>
                                            @endif
                                        </td>
                                        <td>{{$invitation->country->name}}</td>
                                        <td>{{$invitation->mobile_number}}</td>
                                        <td>{{$invitation->email}}</td>
                                        <td>
                                            <div class="btn-group">
                                                @if($invitation->status=='active')
                                                    <small class="btn btn-success btn-xs">Approved</small>
                                                @else
                                                    <small class="btn btn-warning btn-xs">Pending</small>
                                                @endif

                                                <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu payment-status" role="menu">
                                                    @if($invitation->status=='active')
                                                        <li>
                                                            <form action="{{url('admin/visa-invitation/update_status').'/'.$invitation->id}}" method="post">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="status" value="inactive">
                                                                <button type="submit" class="btn btn-danger btn-xs">Reject</button>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <form action="{{url('admin/visa-invitation/update_status').'/'.$invitation->id}}" method="post">
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