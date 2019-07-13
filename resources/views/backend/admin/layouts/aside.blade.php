@section('aside')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('public/server')}}/dist/img/avatar.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <!-- Optionally, you can add icons to the links -->
                <li class="@if(request()->segment('2') =='') active @endif"><a href="#"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            </ul>
            <ul class="sidebar-menu" data-widget="tree">
                <!-- Optionally, you can add icons to the links -->
                <li class="treeview @if(request()->segment('2') =='users') active open @endif">
                    <a href="#"><i class="fa fa-users"></i> <span>User Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" @if(request()->segment('2') =='users') active @endif"><a href="#"><i class="fa fa-users"></i> Users</a></li>
                    </ul>
                </li>

                <li class="treeview @if(request()->segment('2') =='exhibitions' || request()->segment('2') =='view-exhibition') active open @endif">
                    <a href="#"><i class="fa fa-file-pdf-o"></i> <span>Exhibitions</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" @if(request()->segment('2') =='exhibitions') active @endif"><a href="{{url('admin/exhibitions')}}"><i class="fa fa-eye"></i> View Exhibitions</a></li>
                    </ul>
                </li>

                <li class="treeview @if(request()->segment('2') =='delegates' || request()->segment('2') =='view-delegates') active open @endif">
                    <a href="#"><i class="fa fa-file-pdf-o"></i> <span>Delegates</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" @if(request()->segment('2') =='delegates') active @endif"><a href="{{url('admin/delegates')}}"><i class="fa fa-eye"></i> View Delegates</a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


@endsection