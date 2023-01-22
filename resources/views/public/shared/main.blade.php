<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
      ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet"
          type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/public/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/public/css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/public/css/dark.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('vendor/public/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/public/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/public/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('vendor/public/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mitra | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
  ============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
		============================================= -->
    @include('public.shared.header')
    <!-- Content
		============================================= -->
    <section id="content">
        @yield('content')
    </section><!-- #content end -->

    <!-- Footer
    				============================================= -->
    @include('public.shared.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
  ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
  ============================================= -->
<script src="{{ asset('vendor/public/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/public/js/plugins.min.js') }}"></script>

<!-- Footer Scripts
  ============================================= -->
<script src="{{ asset('vendor/public/js/functions.js') }}"></script>

</body>

</html>
