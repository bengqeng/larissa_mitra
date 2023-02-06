@extends('shared.main')

@section('content')
<!-- Begin Page Content -->
<div class="">
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                    <div>
                        {{-- <a href="{{ route('admin.blogs.export') }}"
                            class="btn btn-sm btn-success shadow-sm mr-3"><i
                                class="fas fa-download fa-sm text-white-50"></i> Download Excel</a> --}}
                        <a href="{{ route('admin.blogs.create') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                                class="fa fa-plus-circle fa-sm text-white-50"></i> Tambah Artikel</a>
                    </div>

                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="articles-table" class="table table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Published</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($articles as $item)
                            <tr class="pendingRequest">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ mb_substr( $item->title, 0,50)}}...</td>
                                <td>{{ \Carbon\Carbon::parse($item->published_date)->format('d M Y')}}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.blogs.show', $item->id) }}" class="btn"><i
                                            class="fas fa-eye text-primary"></i></a>
                                    <a href="{{ route('admin.blogs.edit', $item->id) }}" class="btn"><i
                                            class="fas fa-edit text-warning"></i></a>
                                    <a href="#" onclick="
                                    Swal.fire({
                                        title: 'Apakah Anda yakin?',
                                        text: 'Hapus Artikel: '+'{{$item->title}}',
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        cancelButtonText: 'Batal',
                                        confirmButtonText: 'Ya, hapus!'
                                    }).then((result) => {
                                        if (result.value) {
                                            document.getElementById('delete-form-{{ $item->id }}').submit();
                                        }
                                    });
                                    " class="btn"><i class="fas fa-trash text-danger"></i></a>
                                    <form id="delete-form-{{ $item->id }}" action=" {{
                                        route('admin.blogs.destroy', $item->id) }}" method="post"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p>Artikel tidak ditemukan</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<script>
    $(document).ready(function () {
        $('#articles-table').DataTable();
    });
</script>
@endsection