@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Halaman Kemitraan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('public.index') }}">Home</a></li>
			<li class="breadcrumb-item active"><a href="#">Mitra</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row mb-5">
				<div class="col-md-6 mb-5">
					<h3>Daftar Prospek</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta
						provident sint
						ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
						minus
						ratione.</p>
					<div class="d-sm-none d-md-block">
						<a href="{{url('/mitra/subscriber')}}" class="button button-desc text-center">
							<div>Daftar Prospek</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<h3>Daftar Sebagai Mitra</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta
						provident sint
						ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
						minus
						ratione.</p>
					<div class="d-sm-none d-md-block">
						<a href="{{url('/mitra/join')}}" class="button button-desc text-center">
							<div>Daftar Mitra</div>
						</a>
					</div>
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
		</div>
	</div>
</section><!-- #content end -->
@endsection
