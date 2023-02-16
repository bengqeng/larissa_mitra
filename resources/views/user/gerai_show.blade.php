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
                                        <div class="message-feed left mb-5">
                                            <div class="pull-left">
                                                Larissa:
                                            </div>
                                            <div class="media-body">
                                                <div class="mf-content">
                                                    {!!$item->pending_message!!}
                                                </div>
                                            </div>
                                        </div>
                                        @isset($item->user_messages)
                                        <div class="message-feed right">
                                            <div class="pull-right">
                                                {{Auth::user()->full_name}}
                                            </div>
                                            <div class="media-body">
                                                <div class="mf-content">
                                                    {!!$item->user_messages!!}
                                                </div>
                                            </div>
                                        </div>
                                        @endisset
                                        <form
                                            action="{{ route('user.mitra_timeline.update', ['mitra' => $item->id, 'timeline' => $item->step_id]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="msb-reply">
                                                <textarea name="user_messages" id="user_messages" class="user-message"
                                                    placeholder="Isi di sini..."></textarea>
                                            </div>
                                            <button class="btn btn-light mt-3 float-end">
                                                Simpan
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                                </svg>
                                            </button>
                                        </form>
                                        @else
                                        <div class="message-feed left">
                                            <div class="pull-left">
                                                Larissa:
                                            </div>
                                            <div class="media-body">
                                                <div class="mf-content">
                                                    {!!$item->success_message!!}
                                                </div>
                                            </div>
                                        </div>
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
        height: 200,
        plugins: 'link anchor | linkchecker autolink lists checklist',
        toolbar: "code undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | link image",
        menubar:false,
        statusbar: false,
       });
</script>

<!-- /.container-fluid -->
@endsection