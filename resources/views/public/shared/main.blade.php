<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />

  <!-- Stylesheets ============================================= -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/public/css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/css/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/css/dark.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('vendor/public/css/font-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/css/magnific-popup.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('vendor/public/css/custom.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('vendor/public/demos/coworking/css/colors.php?color=267DF4') }}"
    type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/demos/coworking/css/fonts.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('vendor/public/demos/coworking/coworking.css') }}" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Larissa Mitra | Larissa</title>

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
  <div class="floating-contact-wrap">
    <div class="floating-contact-btn shadow">
      <i class="floating-contact-icon btn-unactive icon-whatsapp"></i>
      <i class="floating-contact-icon btn-active icon-line-plus"></i>
    </div>
    <div class="floating-contact-box">
      <div id="q-contact" class="widget quick-contact-widget clearfix">
        <div class="floating-contact-heading bg-color dark p-4 rounded">
          <h3 class="mb-0 text-white">WhatsApp 👋</h3>
          <p class="mb-0">Hubungi kami!</p>
        </div>
        <div class="form-widget" data-alert-type="false">
          <form class="p-4 mb-0" id="floating-contact" novalidate="novalidate">
            <div class="input-group mb-3">
              <span class="input-group-text bg-transparent"><i class="icon-user-alt"></i></span>
              <input type="text" name="floating-contact-name" id="floating-contact-name"
                class="form-control required valid" value="" placeholder="Nama">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text bg-transparent"><i class="icon-comment21"></i></span>
              <textarea name="floating-contact-message" id="floating-contact-message"
                class="form-control required valid" cols="30" rows="4"></textarea>
            </div>
            <input type="hidden" id="floating-contact-botcheck" name="floating-contact-botcheck" value="">
            <button type="submit" id="floating-contact-submit" class="btn btn-dark w-100 btn-lg">Kirim Pesan</button>
            <input type="hidden" name="prefix" value="floating-contact-">
            <input type="hidden" name="subject" value="Messgae From Floating Contact">
            <input type="hidden" name="html_title" value="Floating Contact Message">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScripts
  ============================================= -->
  <script src="{{ asset('vendor/public/js/jquery.js') }}"></script>
  <script src="{{ asset('vendor/public/js/plugins.min.js') }}"></script>
  <script src="{{ asset('vendor/public/js/jquery.mask.js') }}"></script>
  <script src="{{ asset('vendor/public/js/style-form.js') }}"></script>

  <!-- Footer Scripts
  ============================================= -->
  <script src="{{ asset('vendor/public/js/functions.js') }}"></script>

</body>

</html>