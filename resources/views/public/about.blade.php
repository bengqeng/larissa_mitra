@extends('public.shared.main')

@section('content')
<div class="content-wrap pb-0">
	<div class="container">
		<div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
			<div class="col-lg-6 p-lg-5">
				<div class="heading-block border-bottom-0 mb-0">
					<div class="before-heading">Larissa</div>
					<h1 class="fw-bold mb-4">Tentang Larissa</h1>
					<p>Larissa Aesthetic Center merupakan klinik kecantikan estetika pratama yang mengusung konsep
						"Natural Ingredient with
						High Technology" yaitu sistem perawatan wajah, perawatan rambut hingga perawatan tubuh dengan
						memakai bahan alami yang
						disinergikan penggunaan teknologi modern dengan harga terjangkau.</p>

					<p>Larissa Aesthetic Center juga menghadirkan produk-produk kosmetik yang menggunakan bahan-bahan
						alami, aman dan sudah
						bersertifikat CPKB (Cara Pembuatan Kosmetik yang Baik) dari BPOM. Produk kosmetik tersebut
						menggunakan merek dagang "L"
						yang sudah dipatenkan dan hanya tersedia di gerai-gerai Larissa Aesthetic Center.</p>
				</div>
			</div>
			<div class="col-lg-6 p-lg-5">
				<img src="{{asset('vendor/public/images/larissa/gedung/opening.webp')}}" class="rounded" alt="Image">
			</div>
		</div>
		<div class="line"></div>
		<div class="row topmargin bottommargin gutter-lg-50 align-items-center">
			<div class="col-lg-6 p-lg-5">
				<div class="heading-block border-bottom-0 mb-0">
					<div class="before-heading">Visi Misi</div>
					<h2 class="nott fw-semibold mb-4">Visi</h2>
					<p>Menjadi klinik estetika natural terbaik dengan memiliki jaringan terbesar untuk merawat jutaan
						masyarakat Indonesia.</p>
					<h2 class="nott fw-semibold mb-4">Misi</h2>
					<p>Larissa memberikan layanan estetika terbaik bagi masyarakat melalui perpaduan perawatan natural
						dan teknologi terkini
						dengan harga yang terjangkau.</p>
				</div>
			</div>
			<div class="col-lg-6 p-lg-5">
				<img src="{{asset('vendor/public/images/larissa/gedung/klaten1.jpg')}}" class="rounded" alt="Image">
			</div>
		</div>
	</div>

</div>
@endsection