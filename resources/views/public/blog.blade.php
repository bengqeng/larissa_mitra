@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Berita &amp; Events</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('public.index') }}">Home</a></li>
			<li class="breadcrumb-item active"><a href="{{ route('public.blog') }}">Blog</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<div id="posts" class="post-grid row grid-container gutter-30 has-init-isotope" data-layout="fitRows"
				style="position: relative; height: 2474.56px;">
				@forelse ($articles as $item)
				<div class="entry col-lg-3 col-md-4 col-sm-6 col-12" style="position: absolute; left: 0%; top: 0px;">
					<div class="grid-inner">
						<div class="entry-image">
							<a href="{{	(!empty($item->image) && file_exists(public_path('images/blogs/'.$item->image))) ? asset('images/blogs/'.$item->image) : asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
								data-lightbox="image"><img
									src="{{	(!empty($item->image) && file_exists(public_path('images/blogs/'.$item->image))) ? asset('images/blogs/'.$item->image) : asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
									alt="{{ $item->title }}"></a>
						</div>
						<div class="entry-title">
							<h2><a href="{{route('public.blog.show', ['show' => $item->slug])}}">{{$item->title}}</a>
							</h2>
						</div>
						<div class="entry-meta">
							<ul>
								<li><i class="icon-calendar3"></i>
									{{Carbon\Carbon::parse($item->published_date)->format('d
									M Y')}}</li>
							</ul>
						</div>
						<div class="entry-content">
							<p>{!! mb_substr($item->body, 0, 100) !!}...</p>
							<a href="{{route('public.blog.show', ['show' => $item->slug])}}" class="more-link">Read
								More</a>
						</div>
					</div>
				</div>
				@empty
				<p>Artikel tidak ditemukan</p>
				@endforelse
			</div>

			<ul class="pagination mt-5 pagination-circle justify-content-center">
				<li class="page-item {{ ($pagination['current_page'] == 1) ? 'disabled' : '' }}">
					<a class="page-link" href="{{ $articles->previousPageUrl() }}"><i class="icon-angle-left"></i></a>
				</li>
				@for ($i = 1; $i <= $pagination['last_page']; $i++) <li
					class="page-item {{ ($pagination['current_page'] == $i) ? 'active' : '' }}"><a class="page-link"
						href="{{ $articles->url($i) }}">{{ $i }}</a></li>
					@endfor
					<li
						class="page-item {{ ($pagination['current_page'] == $pagination['last_page']) ? 'disabled' : '' }}">
						<a class="page-link" href="{{ $articles->nextPageUrl() }}"><i class="icon-angle-right"></i></a>
					</li>
			</ul>

		</div>
	</div>
</section><!-- #content end -->
@endsection