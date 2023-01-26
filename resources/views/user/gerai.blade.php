@extends('shared.user_main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gerai</h1>
        <a href="#" data-toggle="modal" data-target="#passwordModal"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-plus-circle fa-sm text-white-50"></i> Ajukan Gerai Baru</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        @forelse ($gerai as $item)
        @php
        if($item->status == 'pending'){
        $status = 'secondary';
        } elseif ($item->status == 'in_progress') {
        $status = 'warning';
        } elseif ($item->status == 'success') {
        $status = 'success';
        } else {
        $status = 'danger';
        }
        @endphp
        <div class="col-12 mb-4">
            <div class="card border-left-{{$status}} shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center position-relative p-2">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-{{$status}} mb-1">
                                Tipe {{$item->type}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-capitalize">{{$item->type}}
                                {{$item->mitra_name}}
                            </div>
                            <p class="mb-0">{{$item->location}}</p>
                            <!-- <p><small>Status: Proses <i class="fa fa-info-circle text-{{$status}}"></i></small></p> -->
                            <div class="mb-1 small">Status: Proses 75%</div>
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-gradient-{{$status}}" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <a href="larissa_mitra_status_pengajuan.html"
                                class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        </div>
                        <div class="col-auto position-static">
                            <i class="fa fa-th-large fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-dark" role="alert">
            Anda tidak memiliki gerai yang aktif
        </div>
        @endforelse
        {{-- <div class="col-12 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center position-relative p-2">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning mb-1">
                                Gerai (Store)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Store Karla by Larissa
                            </div>
                            <p class="mb-0">Jl. Timoho Sayidan, Gg. 65,
                                Kelurahan Gondomanan, Kecamatan Gondokusuman</p>
                            <!-- <p><small>Status: Proses <i class="fa fa-info-circle text-warning"></i></small></p> -->
                            <div class="mb-1 small">Status: Proses 75%</div>
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <a href="larissa_mitra_status_pengajuan.html"
                                class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        </div>
                        <div class="col-auto position-static">
                            <i class="fa fa-th-large fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center position-relative">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary mb-1">
                                Gerai (Klinik)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Klinik Karla by Larissa
                            </div>
                            <p class="mb-0">Jl. Timoho Sayidan, Gg. 65,
                                Kelurahan Gondomanan, Kecamatan Gondokusuman</p>
                            <p><small>Status: Aktif <i class="fa fa-check-circle text-primary"></i></small></p>
                            <a href="larissa_mitra_status_pengajuan.html"
                                class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        </div>
                        <div class="col-auto position-static">
                            <i class="fa fa-th-large fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center position-relative">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary mb-1">
                                Gerai (Salon)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Salon Karla by Larissa
                            </div>
                            <p class="mb-0">Jl. Timoho Sayidan, Gg. 65,
                                Kelurahan Gondomanan, Kecamatan Gondokusuman</p>
                            <p><small>Status: Aktif <i class="fa fa-check-circle text-primary"></i></small></p>
                            <a href="larissa_mitra_status_pengajuan.html"
                                class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        </div>
                        <div class="col-auto position-static">
                            <i class="fa fa-th-large fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

</div>
<!-- /.container-fluid -->
@endsection