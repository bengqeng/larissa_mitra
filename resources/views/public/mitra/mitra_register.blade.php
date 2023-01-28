@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Halaman Registrasi Mitra</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('public.index') }}">Home</a></li>
			<li class="breadcrumb-item active"><a href="{{ route('public.mitra_form') }}">Mitra</a></li>
            <li class="breadcrumb-item active"><a href="#">Registrasi</a></li>
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
					<h3>Daftar Sebagai Mitra</h3>
					<form id="register-form" name="register-form" class="row" action="{{ route('join.mitra.store') }}"
						method="POST">
						@csrf
						<div class="col-6 form-group">
							<label for="register-form-name">Nama:</label>
							<input type="text" id="register-form-name" name="full_name" value="{{ old('full_name') }}"
								class="form-control @error('full_name') is-invalid @enderror">
							@error('full_name')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-6 form-group">
							<label for="register-form-email">Email:</label>
							<input type="text" id="register-form-email" name="email" value="{{ old('email') }}"
								class="form-control @error('email') is-invalid @enderror">
							@error('email')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-phone">Nomor Telpon:</label>
							<input type="text" id="register-form-phone" name="phone_number"
								value="{{ old('phone_number') }}"
								class="form-control phone-number @error('phone_number') is-invalid @enderror">
							@error('phone_number')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-6 form-group">
							<label for="register-form-address">Alamat:</label>
							<textarea id="register-form-address" name="address" value=""
								class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
							@error('address')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-password">Password:</label>
							<input type="password" id="register-form-password" name="password" value=""
								class="form-control @error('password') is-invalid @enderror">
							@error('password')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-6 form-group">
							<label for="register-form-repassword">Re-enter Password:</label>
							<input type="password" id="register-form-repassword" name="password_confirmation" value=""
								class="form-control @error('password_confirmation') is-invalid @enderror">
							@error('password_confirmation')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="line my-3"></div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-gerai">Nama Gerai:</label>
							<input type="text" id="register-form-gerai" name="mitra_name"
								value="{{ old('mitra_name') }}"
								class="form-control @error('mitra_name') is-invalid @enderror">
							@error('mitra_name')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-6 form-group">
							<label for="register-form-tipe">Tipe Kemitraan:</label>
							<select id="register-form-tipe" name="type"
								class="form-control @error('type') is-invalid @enderror">
								<option selected disabled>Pilih</option>
								@forelse ($typeMitra as $item)
								<option value="{{ $item }}">{{ Str::upper($item) }}</option>
								@empty
								<option value="">Tipe Mitra Tidak Ditemukan</option>
								@endforelse
							</select>
							@error('type')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="col-12 form-group">
							<label for="register-form-location">Lokasi:</label>
							<textarea id="register-form-location" name="location" value=""
								class="form-control @error('location') is-invalid @enderror">{{ old('location') }}</textarea>
							@error('location')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<button class="button button-rounded m-0 float-end" type="submit" id="register-form-submit"
								name="register-form-submit" value="register">Registrasi</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<h3>Larissa Mitra</h3>
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
