@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>THIS IS A STANDARD POST WITH A PREVIEW IMAGE</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-post mb-0">

				<div class="entry clearfix">

					<div class="entry-title">
						<h2>This is a Standard post with a Preview Image</h2>
					</div>

					<div class="entry-meta">
						<ul>
							<li><i class="icon-calendar3"></i> 10th July 2021</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
						</ul>
					</div>

					<div class="entry-image bottommargin">
						<a href="#"><img src="images/larissa/gedung/serpong_depan.jpg" alt="Blog Single"></a>
					</div>

					<div class="entry-content mt-0">
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
							elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac
							consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl
							consectetur et.</p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus
								porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras
							justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis
							euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta
							felis euismod semper.</p>
						<blockquote>
							<p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.
								Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis
								mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
								elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
								felis euismod semper.</p>
						</blockquote>
						<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur
							purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
						<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla
							sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a
								href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat
							a ante venenatis dapibus posuere velit aliquet.</p>
						<pre>#header-inner {
		width: 940px;
		margin: 0 auto;
		padding-top: 40px;
		}</pre>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
							elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac
							consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl
							consectetur et.</p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor.
							Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio,
							dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.
							Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod
							semper.</p>
						<div class="clear"></div>

						<div class="si-share border-0 d-flex justify-content-between align-items-center">
							<span>Share this Post:</span>
							<div>
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Related Posts:</h4>
				<div class="related-posts row posts-md col-mb-30">
					<div class="entry col-12 col-md-6">
						<div class="grid-inner row align-items-center gutter-20">
							<div class="col-4 col-xl-5">
								<div class="entry-image">
									<a href="#"><img src="images/larissa/gedung/serpong_depan.jpg"
											alt="Blog Single"></a>
								</div>
							</div>
							<div class="col-8 col-xl-7">
								<div class="entry-title title-xs nott">
									<h3><a href="#">This is an Image Post</a></h3>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar3"></i> 10th July 2021</li>
									</ul>
								</div>
								<div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Mollitia nisi perferendis.</div>
							</div>
						</div>
					</div>
					<div class="entry col-12 col-md-6">
						<div class="grid-inner row align-items-center gutter-20">
							<div class="col-4 col-xl-5">
								<div class="entry-image">
									<a href="#"><img src="images/larissa/gedung/serpong_depan.jpg"
											alt="Blog Single"></a>
								</div>
							</div>
							<div class="col-8 col-xl-7">
								<div class="entry-title title-xs nott">
									<h3><a href="#">This is a Video Post</a></h3>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar3"></i> 24th July 2021</li>
									</ul>
								</div>
								<div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Mollitia nisi perferendis.</div>
							</div>
						</div>
					</div>
					<div class="entry col-12 col-md-6">
						<div class="grid-inner row align-items-center gutter-20">
							<div class="col-4 col-xl-5">
								<div class="entry-image">
									<a href="#"><img src="images/larissa/gedung/serpong_depan.jpg"
											alt="Blog Single"></a>
								</div>
							</div>
							<div class="col-8 col-xl-7">
								<div class="entry-title title-xs nott">
									<h3><a href="#">This is a Gallery Post</a></h3>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar3"></i> 8th Aug 2021</li>
									</ul>
								</div>
								<div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Mollitia nisi perferendis.</div>
							</div>
						</div>
					</div>
					<div class="entry col-12 col-md-6">
						<div class="grid-inner row align-items-center gutter-20">
							<div class="col-4 col-xl-5">
								<div class="entry-image">
									<a href="#"><img src="images/larissa/gedung/serpong_depan.jpg"
											alt="Blog Single"></a>
								</div>
							</div>
							<div class="col-8 col-xl-7">
								<div class="entry-title title-xs nott">
									<h3><a href="#">This is an Audio Post</a></h3>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar3"></i> 22nd Aug 2021</li>
									</ul>
								</div>
								<div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Mollitia nisi perferendis.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection