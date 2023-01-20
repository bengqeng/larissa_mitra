<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="larissa_mitra_index.html">
        <div class="sidebar-brand-icon">
            <img class="rounded" width="20" src="img/larissa-l.png">
        </div>
        <sup>Admin</sup>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Layanan
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (request()->is('admin/dashboard/mitra/*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="far fa-file-alt"></i>
            <span>Mitra</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (request()->is('admin/dashboard/mitra*')) ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (request()->is('admin/dashboard/mitra/potential*')) ? 'active' : '' }}"
                    href="{{ route('admin.potential_mitra.index') }}">Pending Request <small
                        class="badge badge-warning">18</small></a>
                <a class="collapse-item" href="admin_larissa_mitra_on_going.html">On Going</a>
                <a class="collapse-item {{ (request()->is('admin/dashboard/mitra')) ? 'active' : '' }}"
                    href="{{ route('admin.mitra.index') }}">List</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="far fa-file-alt"></i>
            <span>Subscriber</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="larissa_mitra_gerai.html">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true"
            aria-controls="collapsefour">
            <i class="far fa-file-alt"></i>
            <span>User</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="{{route('admin.users.index')}}">List</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Other
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseFour">
            <i class="far fa-file-alt"></i>
            <span>Content Management</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="#">Home</a>
                <a class="collapse-item" href="#">Blog</a>
                <a class="collapse-item" href="#">Mitra</a>
                <a class="collapse-item" href="#">About Us</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
