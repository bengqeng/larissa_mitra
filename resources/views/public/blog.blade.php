@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Berita &amp; Events</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active"><a href="blog.html">Blog</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<div id="posts" class="post-grid row grid-container gutter-30 has-init-isotope" data-layout="fitRows"
				style="position: relative; height: 2474.56px;">
				<div class="entry col-lg-3 col-md-4 col-sm-6 col-12" style="position: absolute; left: 0%; top: 0px;">
					<div class="grid-inner">
						<div class="entry-image">
							<a href="{{asset('vendor/public/images/larissa/gedung/serpong_depan.jpg')}}"
								data-lightbox="image"><img
									src="{{asset('vendor/public/images/larissa/gedung/serpong_depan.jpg')}}"
									alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
						</div>
						<div class="entry-meta">
							<ul>
								<li><i class="icon-calendar3"></i> 10th Feb 2021</li>
								<li><a href="blog-single.html#comments"></li>
							</ul>
						</div>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
								animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
							<a href="blog-single.html" class="more-link">Read More</a>
						</div>
					</div>
				</div>
			</div>

			<ul class="pagination mt-5 pagination-circle justify-content-center">
				<li class="page-item disabled"><a class="page-link" href="#"><i class="icon-angle-left"></i></a></li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item"><a class="page-link" href="#">5</a></li>
				<li class="page-item"><a class="page-link" href="#"><i class="icon-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
</section><!-- #content end -->