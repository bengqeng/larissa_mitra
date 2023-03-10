<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img class="rounded" width="20" src="{{asset('vendor/public/images/larissa/larissa-l.png')}}">
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
    <li class="nav-item {{ (request()->is('admin/dashboard/mitra/list/*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="far fa-file-alt"></i>
            <span>Mitra </span>
            @if (App\Models\Mitra::with('user')->PendingMitra()->count() > 0)
            <sup class="badge text-bg-light">{{ App\Models\Mitra::with('user')->PendingMitra()->count()
                }}</sup>
            @endif
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Mitra Components:</h6>
                <a class="collapse-item {{ (request()->is('admin/dashboard/mitra/potential*')) ? 'active' : '' }}"
                    href="{{ route('admin.potential_mitra.index') }}">Pending Request
                    @if (App\Models\Mitra::with('user')->PendingMitra()->count() > 0)
                    <small class="badge badge-warning">{{ App\Models\Mitra::with('user')->PendingMitra()->count()
                        }}</small>
                    @endif
                </a>
                <a class="collapse-item {{ (request()->is('admin/dashboard/mitra/on_going')) ? 'active' : '' }}"
                    href="{{ route('admin.on_going_mitra.index') }}">On Going</a>
                <a class="collapse-item {{ (request()->is('admin/dashboard/mitra/list')) ? 'active' : '' }}"
                    href="{{ route('admin.mitra.index') }}">List</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ (request()->is('admin/dashboard/subscriber*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="far fa-file-alt"></i>
            <span>Subscriber</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Subscriber:</h6>
                <a class="collapse-item {{ (request()->is('admin/dashboard/subscriber')) ? 'active' : '' }}"
                    href="{{ route('admin.subscriber.index') }}">List</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ (request()->is('admin/dashboard/news_letter*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true"
            aria-controls="collapsefive">
            <i class="far fa-file-alt"></i>
            <span>News Letter</span>
        </a>
        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">News Letter:</h6>
                <a class="collapse-item {{ (request()->is('admin/dashboard/news_letter')) ? 'active' : '' }}"
                    href="{{ route('admin.news_letter.index') }}">List</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ (request()->is('admin/dashboard/users*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true"
            aria-controls="collapsefour">
            <i class="far fa-file-alt"></i>
            <span>User</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Components:</h6>
                <a class="collapse-item {{ (request()->is('admin/dashboard/users')) ? 'active' : '' }}"
                    href="{{route('admin.users.index')}}">List</a>
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
                <h6 class="collapse-header">CMS Components:</h6>
                <a class="collapse-item" href="#">Profile Web</a>
                <a class="collapse-item" href="{{route('admin.blogs.index')}}">Blog</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>