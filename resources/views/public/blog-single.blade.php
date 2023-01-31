@extends('public.shared.main')

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="row">
			<div class="col">
				<h1>{{$article->title}}</h1>
			</div>
			<div class="col">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('public.index')}}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{route('public.blog')}}">Blog</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-post mb-0">

				<div class="entry clearfix">

					<div class="entry-title">
						<h2>{{$article->title}}</h2>
					</div>

					<div class="entry-meta">
						<ul>
							<li><i class="icon-calendar3"></i>
								{{Carbon\Carbon::parse($article->published_date)->format('d
								M Y')}}</li>
							<li><a href="#"><i class="icon-user"></i> {{$article->author->full_name}}</a></li>
						</ul>
					</div>

					<div class="entry-image bottommargin">
						<a href="#"><img class="img-fluid" style="width:100%; max-width: 300px"
								src="{{	(!empty($item->image) && file_exists(public_path('storage/'.$item->image))) ? asset('storage/'.$item->image) : asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
								alt="{{$article->title}}"></a>
					</div>

					<div class="entry-content mt-0">
						{!!$article->body!!}
						<div class="clear"></div>

						<div class="si-share border-0 d-flex justify-content-between align-items-center">
							<span>Share this Post:</span>
							<div>
								<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
									target="_blank" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="https://twitter.com/home?status={{ url()->current() }}" target="_blank"
									class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="mailto:?subject=Article&body={{ url()->current() }}"
									class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
								<a href="#" id="copy-button" class="social-icon si-borderless si-rss">
									<i class="icon-line-link"></i>
									<i class="icon-line-link"></i>
								</a>

							</div>
						</div>
					</div>
				</div>
				<h4>Artikel lainnya:</h4>
				<div class="related-posts row posts-md col-mb-30">
					@forelse ($articles as $item)
					<div class="entry col-12 col-md-6">
						<div class="grid-inner row align-items-center gutter-20">
							<div class="col-4 col-xl-5">
								<div class="entry-image">
									<a href="{{route('public.blog.show', ['show' => $item->slug])}}"><img
											style="width:100%; max-width: 150px"
											src="{{	(!empty($item->image) && file_exists(public_path('storage/'.$item->image))) ? asset('storage/'.$item->image) : asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
											alt="Blog Single"></a>
								</div>
							</div>
							<div class="col-8 col-xl-7">
								<div class="entry-title title-xs nott">
									<h3><a
											href="{{route('public.blog.show', ['show' => $item->slug])}}">{{$item->title}}</a>
									</h3>
								</div>
								<div class="entry-meta">
									<ul>
										<li><i class="icon-calendar3"></i>
											{{Carbon\Carbon::parse($item->published_date)->format('d
											M Y')}}</li>
									</ul>
								</div>
								<div class="entry-content d-none d-xl-block">{!! mb_substr($item->body, 0, 50) !!}...
								</div>
							</div>
						</div>
					</div>
					@empty
					<p>Artikel ditemukan</p>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	document.getElementById("copy-button").addEventListener("click", function() {
      navigator.clipboard.writeText("{{ url()->current() }}").then(function() {
         alert("Link copied to clipboard");
      });
   });
</script>
@endsection