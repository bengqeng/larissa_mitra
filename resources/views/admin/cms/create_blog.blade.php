@extends('shared.main')

@section('content')
<!-- Begin Page Content -->
<div class="">
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="body" id="content"
                                class="form-control article-editor @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image Thumbnail</label>
                            <input type="file" name="image" id="image"
                                class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
     selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'link anchor',
     toolbar: "code insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
   });
</script>
@endsection