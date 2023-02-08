@extends('shared.main')

@section('content')
<!-- Begin Page Content -->
<div class="">
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold"><a href="{{route('admin.blogs.index')}}">Artikel</a> / <span
                            class="text-muted">{{$article->title}}</span></h6>
                    <a href="{{ route('admin.blogs.edit', $article->id) }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-edit fa-sm text-white-50"></i> Edit Artikel</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h1>{{$article->title}}</h1>
                    <img class="img-thumbnail mb-3" style="max-width:300px"
                        src="{{(!empty($article->image) && file_exists(public_path('images/blogs/' . $article->image))) ? asset('images/blogs/' . $article->image) : asset('vendor/public/images/larissa/larissa-logo-green-300.png')}}"
                        alt=""><br>
                    <span>Published : {{ \Carbon\Carbon::parse($article->published_date)->format('d M Y')}}</span><br>
                    <span>Author : {{$article->author->full_name}}</span>
                    <div class="my-3">{!!$article->body!!}</div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#articles-table').DataTable();
    });
</script>
@endpush