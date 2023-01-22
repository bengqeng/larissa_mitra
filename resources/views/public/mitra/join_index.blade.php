@extends('shared.public_main')

@section('content')
<div class="row ">
    <div class="col-12 justify-content-center p-5">
        <div class="card mb-3 rounded-0" style="max-width: 1080px;">
            <div class="row no-gutters">
                <div class="col-md-4 col-sm-12">
                    <img src="https://via.placeholder.com/150" style="object-fit:cover"
                        class="card-img fit-cover w-100 h-100 rounded-0" alt="...">
                </div>
                <div class="col-md-8 col-sm-12 p-sm-1 p-md-5">
                    @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif
                    <div class="card-body">
                        <div class="image-header mb-4">
                            <img src="https://via.placeholder.com/200x50" class="mx-auto d-block" alt="...">
                        </div>
                        <form action="{{ route('join.mitra.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only" for="namaLengkapForm">Nama Lengkap</label>
                                <input type="text" name="full_name" class="form-control rounded-0" id="namaLengkapForm"
                                    aria-describedby="nameHelp" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="emailForm">Email</label>
                                <input type="email" name="email" class="form-control rounded-0" id="emailForm"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="passwordForm">Password</label>
                                <input type="password" name="password" class="form-control rounded-0" id="passwordForm"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="passwordForm">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control rounded-0"
                                    id="passwordForm" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="nomorTelponForm">Nomor Telpon</label>
                                <input type="text" name="phone_number" class="form-control rounded-0"
                                    id="nomorTelponForm" placeholder="Nomor Ponsel">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="alamatAndaForm">Alamat Anda</label>
                                <textarea type="text" name="address" class="form-control rounded-0" id="alamaAndaForm"
                                    aria-describedby="alamatAndaForm" placeholder="Alamat Anda"></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="sr-only" for="namaLengkapForm">Nama Mitra</label>
                                <input type="text" name="mitra_name" class="form-control rounded-0" id="namaMitraForm"
                                       aria-describedby="nameHelp" placeholder="Nama Mitra">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="nomorTelponForm">Tipe Mitra</label>
                                <select class="form-control rounded-0" name="type" id="typeMitra">
                                    <option disabled selected>Tipe Kemitraan</option>
                                    @forelse ($typeMitra as $item)
                                    <option value="{{ $item }}">{{ Str::upper($item) }}</option>
                                    @empty
                                    <option value="">Type Mitra Not Found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="lokasiKemitraanForm">Lokasi
                                    Kemitraan</label>
                                <textarea type="text" name="location" class="form-control rounded-0"
                                    id="lokasiKemitraanForm" aria-describedby="lokasiKemitraanForm"
                                    placeholder="Lokasi Kemitraan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success rounded-0 float-right">Register</button>
                            <p class="card-text"><small class="text-muted">Telah memiliki akun? <a href="#">Login di
                                        sini</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
