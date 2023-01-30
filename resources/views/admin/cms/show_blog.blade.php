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
                    <a href="{{ route('admin.blogs.create') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fa fa-plus-circle fa-sm text-white-50"></i> Tambah Artikel</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h1>{{$article->title}}</h1>
                    <span>{{$article->published_date}}</span>
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