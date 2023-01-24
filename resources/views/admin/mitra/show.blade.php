@extends('shared.main')

@section('content')
<!-- Page Heading -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pending Gerai Show </h1>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
           role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-secondary">Informasi Gerai</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample" style="">
            <div class="card-body">
                <table class="table-responsive mb-3 ml-md-4">
                    <tr>
                        <td class="align-top">Nama Pemilik</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">{{ $user->full_name }} <small><a href="#"
                                                                                       class="">Lihat
                                    Profil</a></small></td>
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
                        <td class="align-top">Gerai Terdaftar</td>
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
                    <div class="p-2"><button type="button" onclick="mitraStatus(true)" class="btn btn-success">Approve</button></div>
                    <div class="p-2"><button type="button" onclick="mitraStatus(false)" class="btn btn-danger">Reject</button></div>
                </div>
            </div>
        @endif
    </div>

    @if($mitra->status == 'in_progress')
        <div class="container-fluid">
            <div class="row border-left-primary">
                <div class="col-md-3 align-self-center mb-3">
                    <button class="btn btn-success btn-circle mx-md-3">1</button><small class="align-self-center"> 13 Jnauari 2022</small>
                </div>
                <div class="col-md-9">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Isi Form Calon Mitra</h6>
                            <div class="dropdown no-arrow">
                                <span class="badge" data-id="1">no status</span>
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                     aria-labelledby="dropdownMenuLink" style="">
                                    <div class="dropdown-header">Set status:</div>
                                    <a class="dropdown-item set-status" data-id="1"
                                       href="#">Pending</a>
                                    <a data-id="2" class="dropdown-item set-status" href="#">Success</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2" id="home-tab" data-toggle="tab"
                                            data-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Pending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2 active" id="profile-tab" data-toggle="tab"
                                            data-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Accept</button>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 mb-2 p-3 rounded-bottom"
                                 id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Pending</label>
                                        <textarea class="form-control border-0" disabled
                                                  id="exampleFormControlTextarea1"
                                                  rows="3">Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Accept</label>
                                        <textarea class="form-control border-0" id="exampleFormControlTextarea1"
                                                  rows="3" placeholder="isi catatan di sini..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary float-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-left-primary">
                <div class="col-md-3 align-self-center mb-3">
                    <button class="btn btn-warning btn-circle mx-md-3">2</button><small class="align-self-center"> 22 Desember 2022</small>
                </div>
                <div class="col-md-9">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Isi Form Calon Mitra</h6>
                            <div class="dropdown no-arrow">
                                <span class="badge" data-id="1">no status</span>
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                     aria-labelledby="dropdownMenuLink" style="">
                                    <div class="dropdown-header">Set status:</div>
                                    <a class="dropdown-item set-status" data-id="1"
                                       href="#">Pending</a>
                                    <a data-id="2" class="dropdown-item set-status" href="#">Success</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2" id="home-tab" data-toggle="tab"
                                            data-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Pending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2 active" id="profile-tab" data-toggle="tab"
                                            data-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Accept</button>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 mb-2 p-3 rounded-bottom"
                                 id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Pending</label>
                                        <textarea class="form-control border-0" disabled
                                                  id="exampleFormControlTextarea1"
                                                  rows="3">Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Accept</label>
                                        <textarea class="form-control border-0" id="exampleFormControlTextarea1"
                                                  rows="3" placeholder="isi catatan di sini..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary float-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-left-secondary">
                <div class="col-md-3 align-self-center mb-3">
                    <button class="btn btn-secondary btn-circle mx-md-3">2</button><small
                        class="align-self-center"> ...</small>
                </div>
                <div class="col-md-9">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Isi Form Calon Mitra</h6>
                            <div class="dropdown no-arrow">
                                <span class="badge" data-id="1">no status</span>
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                     aria-labelledby="dropdownMenuLink" style="">
                                    <div class="dropdown-header">Set status:</div>
                                    <a class="dropdown-item set-status" data-id="1"
                                       href="#">Pending</a>
                                    <a data-id="2" class="dropdown-item set-status" href="#">Success</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2" id="home-tab" data-toggle="tab"
                                            data-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Pending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link p-2 active" id="profile-tab" data-toggle="tab"
                                            data-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Accept</button>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 mb-2 p-3 rounded-bottom"
                                 id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Pending</label>
                                        <textarea class="form-control border-0" disabled
                                                  id="exampleFormControlTextarea1"
                                                  rows="3">Placeholder content for the tab panel. This one relates to the home tab. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="form-group my-2">
                                        <label for="exampleFormControlTextarea1" class="sr-only">Catatan Accept</label>
                                        <textarea class="form-control border-0" id="exampleFormControlTextarea1"
                                                  rows="3" placeholder="isi catatan di sini..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary float-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
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
                        console.log(response)
                        if (response.result == 1){
                            if(response.status == 'true'){
                                window.location.href = "{{ route('admin.on_going_mitra.index') }}";
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
                badge.html('pending');
                badge.removeClass('badge-success');
                badge.addClass('badge-warning');
                selectSuccess.removeClass('disabled');
                selectPending.addClass('disabled');
            } else {
                badge.html('success');
                badge.removeClass('badge-warning');
                badge.addClass('badge-success');
                selectSuccess.addClass('disabled');
                selectPending.removeClass('disabled');
            }
        })
    </script>
@endsection
