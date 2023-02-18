@extends('shared.user_main')

@section('content')
<!-- Content Row -->

<!-- /.row -->

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Form Pengajuan Gerai</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Gerai</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-bottom-success shadow h-100">
                <div class="card-body">
                    <form role="form" name="register-form" class="" action="{{ route('user.join.gerai') }}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="register-form-gerai">Nama Gerai:</label>
                            <input type="text" id="register-form-gerai" name="mitra_name"
                                value="{{ old('mitra_name') }}"
                                class="form-control @error('mitra_name') is-invalid @enderror">
                            @error('mitra_name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="register-form-tipe">Tipe Kemitraan:</label>
                            <select id="register-form-tipe" name="type"
                                class="form-control @error('type') is-invalid @enderror">
                                <option selected disabled>Pilih</option>
                                @forelse ($typeMitra as $item)
                                <option value="{{ $item }}">{{ Str::upper($item) }}</option>
                                @empty
                                <option value="">Tipe Mitra Tidak Ditemukan</option>
                                @endforelse
                            </select>
                            @error('type')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="register-form-location">Lokasi:</label>
                            <textarea id="register-form-location" name="location" value=""
                                class="form-control @error('location') is-invalid @enderror">{{ old('location') }}</textarea>
                            @error('location')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
