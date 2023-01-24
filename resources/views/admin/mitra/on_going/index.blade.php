@extends('shared.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Larissa On Going Mitra</h6>
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
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($inProgress as $item)
                                <tr class="pendingRequest">
                                    <td> {{ $loop->iteration; }}</td>
                                    <td class="sorting_1">{{ $item->user->full_name }}</td>
                                    <td>{{ $item->mitra_name }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td class="text-center">
                                        <span data-toggle="modal" data-target="#detailRequestModal">
                                            <a href="{{ route('admin.on_going_mitra.show', $item->id) }}" class="btn"
                                                data-toggle="tooltip" data-placement="top" title="view detail request">
                                                <i class="fas fa-eye text-primary"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No Data Found</td>
                                </tr>
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
   $('#dataTable').DataTable();
 });
</script>
@endsection
