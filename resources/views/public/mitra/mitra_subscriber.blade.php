@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Halaman Registrasi Prospek</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('public.index') }}">Home</a></li>
			<li class="breadcrumb-item active"><a href="{{ route('public.mitra_form') }}">Mitra</a></li>
            <li class="breadcrumb-item active"><a href="#">Prospek</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			@if (flash()->message)
			<div class="alert {{ flash()->class }} alert-dismissible fade show" role="alert">
				<strong>
					@if (flash()->class == 'alert-success')
					Sukses!
					@else
					Gagal!
					@endif
				</strong><br>
				{!! flash()->message !!}
			</div>
			@endif
			@if(count($errors) > 0)
			<div class="style-msg errormsg">
				<div class="sb-msg"><i class="icon-remove"></i><strong>Ups Gagal!</strong> Lengkapi hal di bawah ini dan
					coba
					registrasi lagi.<br><small>Jika masih gagal dalam mengisi formulir, silakan hubungi call center
						kami.</small></div>
			</div>
			@endif
			<div class="row">
				<div class="col-md-8">
					<h3>Daftar Prospek</h3>
					<form id="prospek-form" name="prospek-form" class="row"
						action="{{ route('subscriber.mitra.store') }}" method="post">
						@csrf
						<div class="col-12 form-group">
							<label for="prospek-form-name">Nama:</label>
							<input type="text" id="prospek-form-name" name="prospek_name" value=""
								class="form-control @error('prospek_name') is-invalid @enderror">
							@error('prospek_name')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-12 form-group">
							<label for="prospek-form-phone">Nomor Telpon:</label>
							<input type="text" id="prospek-form-phone" name="prospek_phone_number" value=""
								class="form-control phone-number @error('prospek_phone_number') is-invalid @enderror">
							@error('prospek_phone_number')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-12 form-group">
							<label for="prospek-form-alamat">Alamat:</label>
							<textarea id="prospek-form-alamat" name="prospek_address" value=""
								class="form-control @error('prospek_address') is-invalid @enderror"></textarea>
							@error('prospek_address')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<button class="button button-rounded m-0 float-start" id="prospek-form-submit"
								name="prospek-form-submit" value="prospek">Daftar</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<h3>Larissa Prospek</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta
						provident sint
						ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
						minus
						ratione.</p>
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
