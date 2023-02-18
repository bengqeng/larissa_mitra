@extends('shared.user_main')

@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-12 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row align-items-center p-3">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Hai, Selamat Datang
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Larissa Mitra</div>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-smile fa-2x text-gray-300"></i> -->
                    </div>
                </div>
                <div class="row">
                    @empty($timeline1->status)
                    @if ($gerai->status == 'in_progress')
                    <div class="col-12 mb-4">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                Proses Pengajuan Anda disetujui!
                                <div class="text-white small">Silakan cek status proses kemitraan pada link berikut ini
                                    <a class="text-white"
                                        href="{{route('user.gerai.show', ['show' => $gerai->id])}}">Status Pengajuan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($gerai->status == 'pending')
                    <div class="col-12 mb-4">
                        <div class="card bg-secondary text-white shadow">
                            <div class="card-body">
                                Pengajuan Anda telah kami terima dan sedang kami proses, mohon menunggu :)
                                <div class="text-white small">Pastikan email dan nomor telepon Anda aktif</div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endempty

                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    @forelse ($gerai->mitras as $item)
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

    $timelineStatus = [];
    foreach ($item->timeline as $timeline) {
    $timelineStatus[] = $timeline->status;
    }
    $success_count = count(array_keys($timelineStatus, 'success'));
    $percentage = $success_count / 8 * 100;
    @endphp
    <div class="col-12 mb-4">
        <div class="card border-top-{{$status}} h-100">
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
                        @if ($item->status == 'in_progress')
                        <div class="mb-1 small">Status: Proses {{$percentage}}%</div>
                        <div class="progress progress-sm mb-2">
                            <div class="progress-bar bg-gradient-{{$status}}" role="progressbar"
                                style="width: {{$percentage}}%" aria-valuenow="{{$percentage}}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <a href="{{route('user.gerai.show', ['show' => $item->id])}}"
                            class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        @elseif ($item->status == 'success')
                        <p><small>Status: Telah Berjalan <i class="fa fa-check-circle text-primary"></i></small></p>
                        <a href="{{route('user.gerai.show', ['show' => $item->id])}}"
                            class="btn btn-sm btn-secondary stretched-link">Detail</a>
                        @else
                        <p><small>Status: {{$item->status}} <i class="fa fa-time-circle text-danger"></i></small>
                        </p>
                        @endif
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
</div>



@endsection