@extends('public.shared.main')

@section('content')
<div class="content-wrap pt-3 pb-0">
    <div class="section bg-transparent py-2">
        <div class="container">
            @if (session('subscribe'))
            <div class="style-msg successmsg">
                <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Terima kasih!</strong>
                    {{ session('subscribe') }}
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-7">
                    <h2 class="display-4 fw-semibold ls--2">Pilihan mitra kerja sama <span class="text-rotater"
                            data-separator="|" data-rotate="fadeIn" data-speed="2000">
                            <span class="t-rotate">Larissa Center|Salon|Store</span>
                        </span> untuk Anda.</h2>
                </div>
                <div class="col-md-5">
                    <p class="lead text-muted">
                        Selamat datang di website mitra kerja kami, kami senang dapat bekerja sama dengan Anda dan
                        berharap
                        dapat membangun
                        kemitraan yang sukses bersama.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden parallax d-flex align-items-center" data-bottom-top="background-position:0px 200px;"
        data-top-bottom="background-position:0px -400px;"
        style="background-image: url('{{asset('vendor/public/images/larissa/gedung_/tegalismail1.webp')}}');box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5); background-size: cover; height: 600px; width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-white">"Menjadi klinik estetika natural terbaik dengan memiliki jaringan terbesar
                        untuk merawat jutaan
                        masyarakat Indonesia".</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-theme-light">
        <div class="shadow-sm hero-features bg-color dark shadow">
            <div class="row">
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
                        <div class="fbox-icon">
                            <i class="icon-line-circle-check"></i>
                        </div>
                        <div class="fbox-content">
                            <h3 class="text-white">Easily Manage Your Works</h3>
                            <p class="text-white mb-0">24x7 available, Anytime & anywhere, we're always available for
                                You.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
                        <div class="fbox-icon">
                            <i class="icon-line-circle-check"></i>
                        </div>
                        <div class="fbox-content">
                            <h3 class="text-white">24x7 Access.</h3>
                            <p class="text-white mb-0">Get Started with our Regular, Weekly, Monthly Plan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
                        <div class="fbox-icon">
                            <i class="icon-line-circle-check"></i>
                        </div>
                        <div class="fbox-content">
                            <h3 class="text-white">Secured &amp; Friendly.</h3>
                            <p class="text-white mb-0">Intrinsicly evisculate quality vectors befor high-impact schemas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-0 pt-md-5 pt-0">
        <div class="container clearfix">
            <div class="row align-items-md-center mb-5">
                <div class="col-md-6 pe-5">
                    <div class="heading-block mb-4 border-bottom-0">
                        <div class="before-heading">Larissa</div>
                        <h2 class="nott fw-semibold">Kerja Bersama, Membangun Bersama.</h2>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 mb-4">
                            <div class="counter color fw-semibold"><span data-from="1" data-to="36"
                                    data-refresh-interval="2" data-speed="600"></span>+</div>
                            <h5 class="mt-0 fw-medium">Cabang</h5>
                        </div>

                        <div class="col-6 col-sm-6 mb-4">
                            <div class="counter color fw-semibold"><span data-from="1" data-to="37"
                                    data-refresh-interval="11" data-speed="900"></span>+</div>
                            <h5 class="mt-0 fw-medium">Single Studios</h5>
                        </div>

                        <div class="col-6 col-sm-6 mb-4">
                            <div class="counter color fw-semibold"><span data-from="1" data-to="21"
                                    data-refresh-interval="3" data-speed="1000"></span>+</div>
                            <h5 class="mt-0 fw-medium">Events per Bulan</h5>
                        </div>

                        <div class="col-6 col-sm-6 mb-4">
                            <div class="counter color fw-semibold"><span data-from="100" data-to="3500"
                                    data-refresh-interval="100" data-speed="1500"></span>+</div>
                            <h5 class="mt-0 fw-medium">Member Aktif</h5>
                        </div>
                    </div>
                    <p class="text-muted">Bersama-sama kita dapat membangun masa depan yang lebih baik dan kami senang
                        dapat
                        bekerja sama dengan Anda dalam mencapai tujuan bersama.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow-sm border-light">
                        <img src="{{asset('vendor/public/images/larissa/gedung_/klaten1.webp')}}" alt="Featured image 1"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold color">Klinik Larissa Aesthetic Center</h5>
                            <p class="card-text">Paket kemitraan yang bisa membuka pelayanan treatment Organic, Fruit
                                sampai treatment Hi-Tech yang membutuhkan tenaga
                                dokter serta dapat menjual produk produk Larissa.</p>
                        </div>
                    </div>
                    <div class="card shadow-sm border-light mt-4">
                        <img src="{{asset('vendor/public/images/larissa/gedung_/tegalismail3.webp')}}"
                            alt="Featured image 2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold color">Larissa Nature</h5>
                            <p class="card-text">Paket kemitraan yang fokus pada pelayanan treatment Organic, Fruit
                                sampai Hi-Tech yang tidak memerlukan tindakan khusus
                                oleh dokter.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ps-sm-3 mt-3 mt-sm-0">
                    <div class="card shadow-sm border-light">
                        <img src="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                            alt="Featured image 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold color">Toko Kosmetik Organic Story</h5>
                            <p class="card-text">Paket kemitraan yang fokus pada penjualan produk Larissa yang sudah
                                berlisensi BPOM, CPKB dan MUI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-between">

            <!-- Feature Box
                            ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-wifi-full color ms-0 mb-4 i-plain d-block float-none"></i>
                <h4 class="mb-3">Berpengalaman 39 Tahun</h4>
                <p class="text-muted">PT Larissa Karunia Sejahtera telah memiliki pengalaman untuk mengelola bisnis di
                    bidang kecantikan sejak 1984, dan
                    sampai saat ini masih bertahan dan berkarya untuk masyarakat Indonesia</p>
            </div>

            <!-- Feature Box
                            ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-line2-cup color ms-0 mb-3 i-plain d-block float-none"></i>
                <h4 class="mb-3">Dukungan Manajemen dan Tim Support</h4>
                <p class="text-muted">Tim PT Larissa Karunia Sejahtera yang memiliki kemampuan dan pengalaman untuk
                    memberikan pendampingan kepada Mitra untuk
                    melakukan pengelolaan bisnis Larissa.</p>
            </div>

            <!-- Feature Box
                            ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-line2-screen-desktop color ms-0 mb-3 i-plain d-block float-none"></i>
                <h4 class="mb-3">Produk Aman & Bersertifikat</h4>
                <p class="text-muted">Produk-produk sangat aman dan sudah bersertifikat CPKB (Cara Pembuatan Kosmetik
                    yang Baik) dari BPOM, serta telah
                    memiliki serififikat halal dari MUI.</p>
            </div>

            <!-- Feature Box
                            ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-line2-lock color ms-0 mb-3 i-plain d-block float-none"></i>
                <h4 class="mb-3">Brand yang sudah Terdaftar</h4>
                <p class="text-muted">Merek Larissa Aesthetic Center, Merek Salon Premium by Larissa dan Merek Organic
                    Story telah terdaftar di Direktorat
                    Jenderal Kekayaan Intelektual.</p>
            </div>

            <!-- Feature Box
                            ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-line-bag color ms-0 mb-3 i-plain d-block float-none"></i>
                <h4 class="mb-3">Dukungan Promosi / Marketing</h4>
                <p class="text-muted">Larissa memberikan dukungan arahan dan pendampingan dalam pembuatan konten,
                    promosi baik online maupun offline secara
                    terpusat dilakukan secara rutin.</p>
            </div>

            <!-- Feature Box
                                        ============================================= -->
            <div class="col-lg-4 col-md-6 my-4">
                <i class="icon-line-bag color ms-0 mb-3 i-plain d-block float-none"></i>
                <h4 class="mb-3">Harga Terjangkau</h4>
                <p class="text-muted">Harga layanan dan produk di Larissa sangat terjangkau bahkan untuk kalangan
                    pelajar dan mahasiswa, sehingga Larissa
                    dapat melayani segmen konsumen yang lebih luas.</p>
            </div>

        </div>
    </div>

    <div class="section" style="padding: 80px 0">
        <div class="container">
            <div class="heading-block border-bottom-0 mb-0">
                <div class="before-heading">Pilih Gerai Anda</div>
                <h2 class="nott fw-semibold mb-0">Kemitraan</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="price-carousel" class="owl-carousel carousel-widget" data-margin="30" data-nav="false"
                        data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="3"
                        data-items-xl="3">

                        <div class="price-list shadow-sm card border-0 rounded">
                            <div class="position-relative">
                                <img src="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                                    alt="Featured image 1" class="card-img-top rounded-top">
                                <div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                    <h3 class="card-title mb-0 text-white">Larrissa Aesthetic Center</h3>
                                    <p class="card-text mb-0">Give it a Try</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> Day
                                        Access Only</li>
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                        Unlimited Superfast
                                        Wi-Fi</li>
                                    <li class="list-group-item ps-0 text-black-50">
                                        <a class="float-end" href="{{url('/tipe-larissa')}}">Lebih
                                            Lengkap...</a>
                                    </li>
                                </ul>
                                <a href="demo-coworking-single.html"
                                    class="button button-rounded button-large w-100 m-0 center fw-medium">Daftar
                                    Sekarang</a>
                            </div>
                        </div>

                        <div class="price-list shadow-sm card border-0 rounded">
                            <div class="position-relative">
                                <img src="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                                    alt="Featured image 1" class="card-img-top rounded-top">
                                <div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                    <h3 class="card-title mb-0 text-white">Salon Premium Larissa</h3>
                                    <p class="card-text mb-0">Economical but Flexible</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 8am to
                                        8pm Access
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 100
                                        hours of
                                        Superfast Wi-Fi</li>
                                    <li class="list-group-item ps-0 text-black-50">
                                        <a class="float-end" href="{{url('/tipe-salon')}}">Lebih Lengkap...</a>
                                    </li>
                                </ul>

                                <a href="demo-coworking-single.html"
                                    class="button button-rounded button-large w-100 m-0 center fw-medium">Daftar
                                    Sekarang</a>

                            </div>
                        </div>

                        <div class="price-list shadow-sm card border-0 rounded">
                            <div class="position-relative">
                                <img src="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                                    alt="Featured image 1" class="card-img-top rounded-top">
                                <div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                    <h3 class="card-title mb-0 text-white">Store (Organic Story)</h3>
                                    <p class="card-text mb-0">Any Desk, Any Chair</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 200
                                        hours of WIFI
                                        per Month</li>
                                    <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> Lockers
                                        Access</li>
                                    <li class="list-group-item ps-0 text-black-50">
                                        <a class="float-end" href="{{url('/tipe-store')}}">Lebih Lengkap...</a>
                                    </li>
                                </ul>

                                <a href="demo-coworking-single.html"
                                    class="button button-rounded button-large w-100 m-0 center fw-medium">Daftar
                                    Sekarang</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section p-0 testimonials clearfix">
        <div class="container" style="padding: 120px 0">
            <div class="heading-block border-bottom-0 center">
                <div class="before-heading">Member Kami</div>
                <h2 class="nott fw-semibold">Testimonial</h2>
            </div>

            <div id="testimonials-carousel"
                class="owl-carousel carousel-widget testimonial testimonial-full bg-transparent border-0 shadow-none p-0 mx-auto text-start clearfix"
                data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false" data-pagi="true"
                data-items="1" style="max-width: 740px">
                <div class="slide">
                    <div class="testi-content">
                        <p>Ini adalah klinik pertama saya yang tanpa ragu saya putuskan untuk menjadi member disini.
                            Produknya
                            juga langsung cocok
                            di kulit wajah saya dan ga bikin iritasi ataupun ketergantungan loh (Mungkin karena
                            bahan-bahan
                            herbalnya kali yaa
                            hehe). Ngapain coba-coba perawatan ke klinik lain kalo hasil di Larissa sudah pasti tidak
                            mengecewakan.</p>
                        <div class="testi-meta mt-4">
                            Paskah Simanungkalit
                            <span class="ls0">BUMN</span>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="testi-content">
                        <p>Padahal baru pakai produk larissa 2 bln nan udah kelihatan hasilnya. Puas banget... Dan
                            larissa jg
                            g ketergantungan.
                            Karena kan aku sering lupa pakai produk. Tp muka aku tetep find find aja kalo g pakai
                            produknya. Nah
                            beda tu sm klinik
                            yg dulu aku cobaa.. Pokoknya suka banget sm larissa.. Kedepan aku mau coba facial... Sekian
                            dulu yaa
                            testimoni dari
                            aku.. Bye... Bye..</p>
                        <div class="testi-meta mt-4">
                            Meliana fatimah
                            <span class="ls0">Mahasiswa</span>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="testi-content">
                        <p>Awalnya ragu ke Larissa tapi karena jerawat sudah keterlaluan, saya putuskan untuk mulai
                            perawatan
                            27 juli 2015. Dalam 4
                            bulan ini sudah 2 kali facial green tea, 2 kali mikrodermabrasi dan rutin gunakan produk
                            sesuai
                            petunjuk dokter Larissa,
                            sekarang wajah jadi lembut, bersih, sehingga terlihat lebih cerah. Bahan alami dalam produk
                            Larissa
                            merawat kulit saya
                            tanpa cemas akan bahan kimia berbahaya. Terimakasih Larissa telah menjadi sahabat
                            kepercayaan
                            kulitku.</p>
                        <div class="testi-meta mt-4">
                            Dwi Nitasari
                            <span class="ls0">Wirausaha</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="line"></div>

    <div class="section p-0 bg-transparent clearfix">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-6 col-md-4">
                    <div class="heading-block border-bottom-0 mb-4">
                        <div class="before-heading">Cara Menghubungi Kami</div>
                        <h2 class="nott fw-semibold">Lokasi</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="row">
                        <div class="col-sm-4 col-3">
                            <div class="counter color fw-semibold"><span data-from="1" data-to="3"
                                    data-refresh-interval="2" data-speed="600"></span>+</div>
                            <h5 class="mt-0 fw-medium">Larissa Center</h5>
                        </div>

                        <div class="col-sm-4 col-6">
                            <div class="counter color fw-semibold"><span data-from="100" data-to="13"
                                    data-refresh-interval="100" data-speed="12"></span>+</div>
                            <h5 class="mt-0 fw-medium">Salon Premium</h5>
                        </div>

                        <div class="col-sm-4 col-3">
                            <div class="counter color fw-semibold"><span data-from="2" data-to="15"
                                    data-refresh-interval="30" data-speed="1500"></span>+</div>
                            <h5 class="mt-0 fw-medium">Store</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="locations-carousel" class="owl-carousel carousel-widget owl-carousel-full clearfix"
            data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="200" data-margin="0" data-nav="true"
            data-pagi="true" data-items="1">
            <div>
                <div class="masonry-thumbs grid-container grid-5" data-big="2" data-lightbox="gallery">
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/denpasar1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/denpasar1.webp')}}"
                            alt="Gallery Thumb 1"></a>
                    <div class="grid-item"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15813.731579136589!2d110.3846008!3d-7.7438227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x803d94a95edc0c70!2sHead%20Office%20Larissa%20Aesthetic%20Center!5e0!3m2!1sen!2sid!4v1674367045762!5m2!1sen!2sid"
                            width="500" height="334" allowfullscreen style="border:0;"></iframe></div>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/gajahmada1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/gajahmada1.webp')}}"
                            alt="Gallery Thumb 12"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/galeria1.webp')}}"
                            alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/GeraiDarmo01.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/GeraiDarmo01.webp')}}"
                            alt="Gallery Thumb 4"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/godean.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/godean.webp')}}"
                            alt="Gallery Thumb 5"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/pacific1_lite.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/pacific1_lite.webp')}}"
                            alt="Gallery Thumb 6"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/serpong_depan.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/serpong_depan.webp')}}"
                            alt="Gallery Thumb 7"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/purwokerto1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/purwokerto1.webp')}}"
                            alt="Gallery Thumb 13"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/surabayaresiden1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/surabayaresiden1.webp')}}"
                            alt="Gallery Thumb 6"></a>
                    <a class="grid-item"
                        href="{{asset('vendor/public/images/larissa/gedung_/semarangpanjaitan1.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/semarangpanjaitan1.webp')}}"
                            alt="Gallery Thumb 7"></a>
                    <a class="grid-item" href="{{asset('vendor/public/images/larissa/gedung_/tembalang.webp')}}"
                        data-lightbox="gallery-item"><img class="op-ts h-op-09"
                            src="{{asset('vendor/public/images/larissa/gedung_/tembalang.webp')}}"
                            alt="Gallery Thumb 12"></a>
                </div>
                <div class="container">
                    <div class="card shadow bg-white">
                        <div class="card-body">
                            <h3 class="mb-4">Yogyakarta</h3>
                            <div style="font-size: 16px;">
                                <address>
                                    Jl. Kayen Raya No.45, Kayen, Condongcatur, <br>Kec. Depok, Kab. Sleman, <br>Daerah
                                    Istimewa
                                    Yogyakarta 55281
                                </address>
                                <div class="mb-4" style="font-size: 15px;">
                                    <small class="text-black-50 d-block mb-2">Phone Number:</small>
                                    <a href="tel: +62 853-2606-8888" class="text-dark d-block mb-1">
                                        <li class="icon-whatsapp"></li> +62 853-2606-8888
                                    </a>
                                    <a href="tel: (0274) 588037" class="text-dark">
                                        <li class="icon-call"></li> (0274) 588037
                                    </a>
                                </div>

                                <a href="/mitra/subscriber"
                                    class="button button-rounded m-0 nott fw-semibold ls0">Prospek</a>
                                <a href="/mitra/join"
                                    class="button text-bg-primary button-rounded m-0 nott fw-semibold ls0">Mitra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-transparent clearfix">
        <div class="container">
            <div class="heading-block border-bottom-0 center">
                <div class="before-heading">Lihat Berita Terkini Kami</div>
                <h2 class="nott fw-semibold">Berita &amp; Events</h2>
            </div>

            <div class="clear"></div>

            <div class="row col-mb-30 posts-md">
                @forelse ($articles as $item)
                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-title title-xs nott">
                            <h3><a
                                    href="{{route('public.blog.show', ['show' => $item->slug])}}">{{$item->title}}">{{$item->title}}</a>
                            </h3>
                        </div>
                        <div class="entry-content">
                            {!! mb_substr($item->body, 0, 100) !!}...
                        </div>
                        <div class="author-meta d-flex align-items-center">
                            {{-- <div class="author-image">
                                <img src="https://ui-avatars.com/api/?name=Admin+Larissa&background=1cc98a&color=fff"
                                    alt="Author Image" class="rounded-circle">
                            </div> --}}
                            <div class="entry-meta no-separator">
                                <ul class="flex-column mb-0">
                                    <li class="mb-1"><span>By</span> <a href="#">{{$item->author->full_name}}</a></li>
                                    <li><a href="#">{{Carbon\Carbon::parse($item->published_date)->format('d
                                            M Y')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                @empty
                <p>Artikel tidak ditemukan</p>
                @endforelse

            </div>
        </div>

    </div>

    <div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-1">
                    <div class="before-heading">Jangan Ragu untuk Menghubungi Kami</div>
                    <h2 class="nott fw-semibold display-4">Ingin Tahu Lebih Lanjut?</h2>
                    <h4 class="fw-light mb-4">Hubungi kami <a href="tel:+(61)8-234-532-45">
                            <li class="icon-whatsapp"></li> +62 81-2311-2131
                        </a></h4>
                    <a href="/mitra/subscriber"
                        class="button button-rounded button-xlarge m-0 nott fw-semibold ls0 px-5">Prospek</a>
                    <a href="/mitra/join"
                        class="button text-bg-primary button-rounded button-xlarge m-0 nott fw-semibold ls0 px-5">Mitra</a>
                </div>
            </div>
        </div>
        <img src="{{asset('vendor/public/images/larissa/gedung/contact.png')}}" alt="Footer Image" class="footer-img">
    </div>
</div>
<div class="promo promo-dark bg-color promo-full p-4 p-md-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg">
                <h3>Telah Memiliki Akun?</h3>
                <span>Login di sini dan cek timeline kemitraan Anda</span>
            </div>
            <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                <a href="{{ route('public.login_form') }}"
                    class="button button-border button-light button-rounded m-0">Login</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
@if (!session('subscriber'))
<div class="modal-on-load" data-target="#myModal1"></div>

<div class="modal1" id="myModal1">
    <div class="block dark mx-auto"
        style="background: url('{{asset('vendor/public/images/larissa/gedung_/tegalismail1.webp')}}') no-repeat;box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5); background-size: cover; max-width: 700px;"
        data-height-xl="400">
        <div style="padding: 50px;">
            <div class="heading-block border-bottom-0 bottommargin-sm" style="max-width:500px;">
                <h3>Newsletter Subscribe</h3>
                <span>Dapatkan Update &amp; Penawaran terbaru</span>
            </div>
            <div class="widget-subscribe-form-result"></div>
            <form action="{{ route('public.news_letter.store') }}" method="post" style="max-width: 350px;">
                @csrf
                <input type="email" name="email" class="form-control form-control-lg not-dark required email"
                    placeholder="Masukkan Email Anda">
                <button class="button button-rounded button-border button-light ms-0" type="submit"
                    style="margin-top:15px;">Subscribe</button>
            </form>
            <p class="mb-0"><small><em>*We hate Spam &amp; Junk Emails.</em></small></p>
        </div>
    </div>
</div>
@endif

@endsection