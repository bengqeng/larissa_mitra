@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Halaman Kemitraan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active"><a href="mitra.html">Mitra</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-4">
					<h3>Daftar Prospek</h3>
					<form id="prospek-form" name="prospek-form" class="row bg-light rounded" action="#" method="post">
						<div class="col-12 form-group">
							<label for="prospek-form-name">Nama:</label>
							<input type="text" id="prospek-form-name" name="prospek-form-name" value=""
								class="form-control">
						</div>
						<div class="col-12 form-group">
							<label for="prospek-form-phone">Nomor Telpon:</label>
							<input type="text" id="prospek-form-phone" name="prospek-form-phone" value=""
								class="form-control phone-number">
						</div>
						<div class="col-12 form-group">
							<label for="prospek-form-alamat">Alamat:</label>
							<textarea id="prospek-form-alamat" name="prospek-form-alamat" value=""
								class="form-control"></textarea>
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<button class="button button-rounded m-0 float-start" id="prospek-form-submit"
								name="prospek-form-submit" value="prospek">Daftar</button>
						</div>
					</form>
				</div>
				<div class="col-md-8">
					<h3>Daftar Sebagai Mitra</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta
						provident sint
						ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
						minus
						ratione.</p>
					<form id="register-form" name="register-form" class="row" action="#" method="post">
						<div class="col-6 form-group">
							<label for="register-form-name">Nama:</label>
							<input type="text" id="register-form-name" name="register-form-name" value=""
								class="form-control">
						</div>
						<div class="col-6 form-group">
							<label for="register-form-email">Alamat Email:</label>
							<input type="text" id="register-form-email" name="register-form-email" value=""
								class="form-control">
						</div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-phone">Nomor Telpon:</label>
							<input type="text" id="register-form-phone" name="register-form-phone" value=""
								class="form-control phone-number">
						</div>
						<div class="col-6 form-group">
							<label for="register-form-address">Alamat:</label>
							<textarea id="register-form-address" name="register-form-address" value=""
								class="form-control"></textarea>
						</div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-password">Password:</label>
							<input type="password" id="register-form-password" name="register-form-password" value=""
								class="form-control">
						</div>
						<div class="col-6 form-group">
							<label for="register-form-repassword">Re-enter Password:</label>
							<input type="password" id="register-form-repassword" name="register-form-repassword"
								value="" class="form-control">
						</div>
						<div class="line my-3"></div>
						<div class="w-100"></div>
						<div class="col-6 form-group">
							<label for="register-form-tipe">Tipe Kemitraan:</label>
							<select id="register-form-tipe" name="register-form-tipe" class="form-control">
								<option selected disabled>Pilih</option>
								<option value="1">Larissa Aesthetic Center</option>
								<option value="2">Salon Premium Larissa</option>
								<option value="3">Store (Organic Story)</option>
							</select>
						</div>
						<div class="col-6 form-group">
							<label for="register-form-location">Lokasi:</label>
							<textarea id="register-form-location" name="register-form-location" value=""
								class="form-control"></textarea>
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<button class="button button-rounded m-0 float-end" id="register-form-submit"
								name="register-form-submit" value="register">Registrasi</button>
						</div>
					</form>
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
							<a href="mitra-login.html"
								class="button button-border button-light button-rounded m-0">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->
@endsection