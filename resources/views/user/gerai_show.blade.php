@extends('shared.user_main')

@section('content')

<!-- Begin Page Content -->

<!-- Content Row -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Status Pengajuan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('user.gerai')}}">Gerai</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$gerai->mitras[0]->mitra_name}}</li>
        </ol>
    </nav>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-12 mb-4">
            <div class="card border-bottom-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center p-3">
                        <div class="col mr-2">
                            <div class="h5 mb-0 text-gray-800 text-uppercase">Gerai {{$gerai->mitras[0]->type}} <span
                                    class="font-weight-bold">{{$gerai->mitras[0]->mitra_name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div id="tracking-pre"></div>
            <div class="card border-left-success shadow">
                <div id="tracking">
                    <div class="tracking-list">
                        @forelse ($gerai->mitras[0]->timeline as $item)
                        @php
                        if($item->status == 'pending'){
                        $status = array('color' => 'warning', 'icon' => '<i class="fas fa-spinner"></i>' );
                        } elseif ($item->status == 'success') {
                        $status = array('color' =>'success', 'icon' => '<i class="fas fa-check"></i>' );
                        } else {
                        $status = array('color' => 'secondary', 'icon' => '' );
                        }
                        @endphp
                        <div class="tracking-item">
                            <div class="tracking-icon bg-{{$status['color']}} text-light">
                                {!!$status['icon']!!}
                            </div>
                            <div class="tracking-date">
                                @if ($item->status == 'success')
                                <small><span class="font-italic">Diperbarui</span>
                                    {{Carbon\Carbon::parse($item->created_at)->format('d
                                    M Y')}}</small>
                                @endif
                            </div>
                            <div class="tracking-content">{{ $item->stepName() }}
                                @if(!empty($item->pending_message) || !empty($item->success_message))
                                <span>Catatan: <a data-toggle="collapse" href="#collapse-{{$item->id}}" role="button"
                                        aria-expanded="false" aria-controls="collapse-{{$item->id}}">Lihat
                                    </a></span>
                                <div class="collapse" id="collapse-{{$item->id}}">
                                    <div class="card d-flex flex-column card-body">
                                        @if ($item->status == 'pending')
                                        <small>Larissa:</small>
                                        <span class="ml-3">{!!$item->pending_message!!}</span>
                                        <small class="">{{Auth::user()->full_name}}:</small>
                                        <span class="ml-3">
                                            @isset($item->user_messages)
                                            {!!$item->user_messages!!}
                                            @endisset
                                        </span>
                                        <form
                                            action="{{ route('user.mitra_timeline.update', ['mitra' => $item->id, 'timeline' => $item->step_id]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <textarea name="user_messages" id="user_messages" cols="30" rows="10"
                                                class="form-control mb-3 user-message">

                                            </textarea>
                                            <button class="btn btn-sm btn-primary mt-3 float-end">Simpan</button>
                                        </form>
                                        @else
                                        <span class="ml-3">{!!$item->success_message!!}</span>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.user-message',
        plugins: 'link anchor | linkchecker autolink lists checklist',
        toolbar: "code undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | link image",
       });
</script>

<!-- /.container-fluid -->
@endsection