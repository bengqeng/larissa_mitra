@extends('shared.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary mb-3">Larissa Mitra</h6>
        <a href="{{ route('admin.mitra.export') }}" class="btn btn-sm btn-success shadow-sm float-end"><i
                class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover dataTable" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th>No</th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">
                                        Nama Mitra</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending">
                                        Nama Outlet</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending">
                                        Alamat</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending">
                                        Lokasi Mitra</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending">
                                        Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($mitras as $mitra)
                                <tr class="pendingRequest">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="sorting_1">{{ $mitra->user->full_name }}</td>
                                    <td>{{ $mitra->mitra_name }}</td>
                                    <td>{{ $mitra->user->address }}</td>
                                    <td>{{ $mitra->location }}</td>
                                    <td>
                                        @if($mitra->status == 'success')
                                        <span class="badge badge-success">success</span>
                                        @elseif($mitra->status == 'in_progress')
                                        <span class="badge badge-warning">pending</span>
                                        @else
                                        <span class="badge badge-danger">rejected</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.mitra.show', $mitra->id) }}" class="btn"><i
                                                class="fas fa-eye text-primary"></i></a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('#dataTable').DataTable({
        language: {
            infoEmpty: "No Data Found",
        }
    });
 });
</script>
@endsection