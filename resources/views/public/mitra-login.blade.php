@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Halaman Login Mitra</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active"><a href="mitra-form.html">Mitra</a></li>
			<li class="breadcrumb-item active" aria-current="page">Mitra Login</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-4">
					<h3>Login Di Sini</h3>
					<form id="login-form" name="login-form" class="row bg-light rounded" action="#" method="post">
						<div class="col-12 form-group">
							<label for="login-form-email">Email:</label>
							<input type="text" id="login-form-email" name="login-form-email" value=""
								class="form-control">
						</div>
						<div class="col-12 form-group">
							<label for="login-form-password">Password:</label>
							<input type="password" id="login-form-password" name="login-form-password" value=""
								class="form-control">
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<button class="button button-rounded m-0 float-start" id="login-form-submit"
								name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="col-md-8">
					<h3>Larissa Mitra</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta
						provident sint
						ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat
						minus
						ratione.</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->

@endsection