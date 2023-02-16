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



@endsection