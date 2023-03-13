@extends('shared.main')

@section('content')
<!-- Page Heading -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pending Gerai Show
        <small
            class="badge badge-{{ $mitra->status == 'success' ? 'success' : ($mitra->status == 'in_progress' ? 'primary' : ($mitra->status == 'rejected' ? 'danger' : 'warning')) }}">
            {{ $mitra->status == 'success' ? 'Success' : ($mitra->status == 'in_progress' ? 'In Progress' :
            ($mitra->status ==
            'rejected' ? 'Rejected' : 'Pending')) }}
        </small>
    </h1>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-secondary">Informasi Gerai</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample" style="">
            <div class="card-body">
                <table class="table-responsive mb-3 ml-md-4">
                    <tr>
                        <td class="align-top">Nama Pemilik</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">
                            {{ $user->full_name }}
                            <small><a href="#" data-toggle="modal" data-target="#showUserModal"
                                    data-user-id="{{$user->id}}">Lihat Profil</a></small>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-top">Nama Gerai</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $mitra->mitra_name }}</td>
                    </tr>
                    <tr>
                        <td class="align-top">Tipe Gerai</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $mitra->type }}</td>
                    </tr>
                    <tr>
                        <td class="align-top">Tanggal Pengajuan</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $mitra->created_at->format('d F Y') }}</td>
                    </tr>
                    <tr>
                        <td class="align-top">Telepon Gerai</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $user->phone_number }}</td>
                    </tr>
                    <tr>
                        <td class="align-top">Alamat Gerai</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $mitra->location }}</td>
                    </tr>
                </table>
            </div>
        </div>

        @if($mitra->status == 'pending')
        <div class="container mb-3 ml-md-4">
            <div class="d-flex flex-row">
                <div class="p-2"><button type="button" onclick="mitraStatus(true)"
                        class="btn btn-success">Approve</button></div>
                <div class="p-2"><button type="button" onclick="mitraStatus(false)"
                        class="btn btn-danger">Reject</button></div>
            </div>
        </div>
        @endif
    </div>

    @if(in_array($mitra->status, ['in_progress', 'success']))
    <div class="container-fluid">
        @forelse($timelines as $timeline)
        <div
            class="row border-left-{{ $timeline->status == 'success' ? 'success' : ($timeline->status == 'pending' ? 'warning' : 'secondary') }}">
            <div class="col-md-3 align-self-center mb-3">
                <button class="btn
                                @if($timeline->status == 'success')
                                    {{ 'btn-success' }}
                                @elseif ($timeline->status == 'pending')
                                    {{ 'btn-warning' }}
                                @else
                                    {{ 'btn-secondary' }}
                                @endif
                                 btn-circle mx-md-3">{{ $timeline->order }}</button>
                @if($timeline->status == 'success')
                <small class="align-self-center"> {{ \Carbon\Carbon::parse($user->updated_at)->format('d M Y')
                    }}</small>
                @endif
            </div>
            <div class="col-md-9">
                <div class="card shadow mb-4" id="step">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">{{ $timeline->stepName() }}</h6>
                        <div class="dropdown no-arrow">
                            @if($timeline->status == 'success')
                            <span class="badge badge-success">success</span>
                            @elseif($timeline->status == 'pending')
                            <span class="badge badge-warning">pending</span>
                            @else
                            <span class="badge badge-info">no status</span>
                            @endif
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink" style="">
                                <div class="dropdown-header">Set status:</div>
                                <button class="dropdown-item set-status" data-id="1" data-toggle="tab"
                                    data-target="#home-{{$timeline->order}}" type="button">
                                    Pending
                                </button>
                                <button data-id="2" class="dropdown-item set-status" data-toggle="tab"
                                    data-target="#profile-{{$timeline->order}}" type="button">
                                    Success
                                </button>
                            </div>
                        </div>
                    </div>
                    <form
                        action="{{ route('admin.mitra_timeline.update', ['mitra' => $mitra->id, 'timeline' => $timeline->step_id]) }}"
                        method="POST">
                        <input type="hidden" value="{{ $timeline->status }}" name="status">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="tab-content mb-2 p-3 rounded-bottom" id="myTabContent">
                                <div class="tab-pane fade {{ ($timeline->status == 'pending' || $timeline->status == null) ? 'active show' : '' }}"
                                    id="home-{{$timeline->order}}" role="tabpanel"
                                    aria-labelledby="home-tab-{{$timeline->order}}">
                                    @isset($timeline->status)
                                    <span class="badge badge-warning">pending
                                        message</span>
                                    @endisset
                                    <div class="form-group my-2">
                                        <label for="pending-{{$timeline->order}}" class="sr-only">Catatan
                                            Pending</label>
                                        <textarea class="form-control border-0 content"
                                            id="pending-{{$timeline->order}}" name="pending_message" rows="1"
                                            placeholder="Catatan Pending.">{{ $timeline->pending_message }}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade {{ $timeline->status == 'success' ? 'active show' : '' }}"
                                    id="profile-{{$timeline->order}}" role="tabpanel"
                                    aria-labelledby="profile-tab-{{$timeline->order}}">
                                    <span class="badge badge-success">success
                                        message</span>
                                    <div class="form-group my-2">
                                        <label for="success-{{$timeline->order}}" class="sr-only">Catatan Accept</label>
                                        <textarea class="form-control border-0 content" name="success_message"
                                            id="success-{{$timeline->order}}" rows="1"
                                            placeholder="Catatan Success">{{ $timeline->success_message }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                    @isset($timeline->user_messages)
                    <div class="card-body">
                        <div class="p-3">
                            <hr>
                            <a class="btn btn-sm text-bg-light mb-3 position-relative" data-bs-toggle="collapse"
                                data-bs-target="#collapseMitraReply" role="button">
                                Mitra's reply
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z" />
                                </svg>
                            </a>
                            <div class="collapse" id="collapseMitraReply">
                                <div class="card card-body bg-light">
                                    {!!$timeline->user_messages!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="p-3">
                        Note: Mitra hanya dapat membalas pesan jika status pending.
                    </div>
                    @endisset
                </div>
            </div>
        </div>
        @empty
        No Data Found
        @endforelse
    </div>
    @endif

    <script>
        function mitraStatus(data){
            Swal.fire({
                title: 'Apakah anda yakin ingin mengubah status request ini?',
                showCancelButton: true,
                confirmButtonText: 'Save',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post( "{{ route('admin.potential_mitra.store', $mitra->id) }}", {"_token": "{{ csrf_token() }}", 'id': "{{ $mitra->id }}", 'status': data }, function( response ) {
                        if (response.result == 1){
                            if(response.status == 'true'){
                                window.location.href = "{{ route('admin.on_going_mitra.show', $mitra->id) }}";
                            } else {
                                window.location.href = "{{ route('admin.mitra.index') }}";
                            }
                        }
                    }, 'json');
                }
            })
        }

        $('.set-status').click(function () {
            var id = $(this).data('id');
            var badge = $(this).parent().siblings(':first-child');
            var selectPending = $(this).siblings('[data-id=1]');
            var selectSuccess = $(this).siblings('[data-id=2]');

            if (id == 1) {
                $(this).parents('div#step').find("input[type=hidden][name=status]").val('pending');
                badge.html('pending');
                badge.removeClass('badge-success');
                badge.addClass('badge-warning');
                selectSuccess.removeClass('disabled');
                selectPending.addClass('disabled');
                selectSuccess.removeClass('active');
            } else {
                $(this).parents('div#step').find("input[type=hidden][name=status]").val('success');
                badge.html('success');
                badge.removeClass('badge-warning');
                badge.addClass('badge-success');
                selectSuccess.addClass('disabled');
                selectPending.removeClass('disabled');
                selectPending.removeClass('active');
            }
        })
    </script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            height: 300,
            selector: 'textarea.content', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'link anchor | linkchecker autolink lists checklist',
            toolbar: "code undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | link image",
            menubar:false,
            statusbar: false,
       });
    </script>
    @endsection