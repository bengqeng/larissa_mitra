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
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(count($errors) > 0)
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Gagal melakukan perubahan data!</strong><br>
            @foreach ($errors->all() as $error)
            <div>{!! $error !!}</div>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif