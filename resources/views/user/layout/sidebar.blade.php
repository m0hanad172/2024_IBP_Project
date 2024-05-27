<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-orange elevation-4" style="background-color:#f16603">
    <!-- Brand Logo -->
    <a href="{{url('user/dashboard')}}" class="brand-link">
        <img src="{{ url('admin/img/AdminLTELogo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"style="color:white">Electronics </span>
    </a>




    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{$data->image}}" class="img-circle elevation-2" alt="User Image" style="width: 2rem; height: 2rem">
            </div>
            <div class="info">
                <a href="{{url('admin/dashboard')}}" class="d-block"style="color:white">{{$data->first_name.' '.$data->last_name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{url('user/dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Announcement
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('user/chat')}}" class="nav-link">
                        <i class="nav-icon far fa-comments"></i>
                        <p>
                            Messages
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('user/settings')}}" class="nav-link">
                        <i class="nav-icon far fa-light fa-gear"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
