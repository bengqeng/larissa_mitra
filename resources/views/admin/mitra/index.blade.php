@extends('admin.shared.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Larissa Mitra</h6>
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
                                <tr class="pendingRequest">
                                    <td>1</td>
                                    <td class="sorting_1">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>Proses Interview dengan tim manajemen</td>
                                    <td>
                                        <span class="badge badge-success">Success</span>
                                        <span class="badge badge-danger">Rejected</span>
                                        <span class="badge badge-warning">On Progress</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn" data-toggle="modal" data-target="#detailRequestModal"
                                            data-toggle2="tooltip" data-placement="left" title="view detail request"><i
                                                class="fas fa-eye text-primary"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#verificationModal"><i
                                                class="fas fa-check text-success"></i></a>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#verificationModal"><i
                                                class="fas fa-times text-danger"></i></a>

                                    </td>
                                </tr>
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
