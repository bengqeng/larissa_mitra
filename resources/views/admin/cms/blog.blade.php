@extends('shared.main')

@section('content')
<!-- Begin Page Content -->
<div class="">
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                    <a href="{{ route('admin.blogs.create') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fa fa-plus-circle fa-sm text-white-50"></i> Tambah Artikel</a>

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
                            @forelse($articles as $items)
                            <tr class="pendingRequest">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $items->title }}</td>
                                <td>{{ $items->published_date }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.mitra.show', $items->id) }}" class="btn"><i
                                            class="fas fa-eye text-primary"></i></a>
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
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#articles-table').DataTable();
    });
</script>
@endpush