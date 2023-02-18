<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img class="rounded" width="20" src="{{asset('vendor/public/images/larissa/larissa-l.png')}}">
            <img src="" alt="">
        </div>
        <sup>Mitra</sup>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('user/dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ (request()->is('user/add_gerai')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.add_gerai') }}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Tambah Gerai</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item {{ (request()->is('user/gerai')) ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="far fa-file-alt"></i>
            <span>Gerai</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (request()->is('user/gerai')) ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item {{ (request()->is('user/gerai')) ? 'active' : '' }}"
                    href="{{route('user.gerai')}}">Gerai</a>
                <a class="collapse-item" href="#">Tambah Gerai</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->