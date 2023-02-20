<header id="header" class="border-bottom-0" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                            ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo"
                        data-sticky-logo="{{asset('vendor/public/images/larissa/larissa-logo-green-150.png')}}"><img
                            src="{{asset('vendor/public/images/larissa/larissa-logo-green-150.png')}}"
                            alt="Canvas Logo"></a>
                    <a href="/" class="retina-logo"
                        data-sticky-logo="{{asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"><img
                            src="{{asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
                            alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">
                    <a class="top-phone" href="/mitra-form"><i class="icon-line-users"></i> <span
                            class="d-none d-md-inline-block">Mitra</span></a>
                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
                            ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        @auth
                        <li class="menu-item zoomInUp animated"><a class="menu-link" href="{{route('user.dashboard')}}">
                                <div> <i class="icon-dashboard"></i> Dashboard</div>
                            </a></li>
                        @endauth
                        <li class="menu-item {{ (request()->is('/')) ? 'current' : '' }}"><a class="menu-link" href="/">
                                <div>Home</div>
                            </a></li>
                        <li class="menu-item {{ (request()->is('about')) ? 'current' : '' }}"><a class="menu-link"
                                href="/about">
                                <div>About Us</div>
                            </a></li>
                        <li class="menu-item {{ (request()->is('blog')) ? 'current' : '' }}"><a class="menu-link"
                                href="/blog">
                                <div>Blog</div>
                            </a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->