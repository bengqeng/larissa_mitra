@extends('shared.main')

@section('content')
@if(count($errors) > 0)
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show">
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Larissa Users</h6>
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
                                        Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending">
                                        Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending">
                                        Phone Number</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending">Is Verified</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($getUser as $user)
                                <tr class="pendingRequest">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td nowrap>
                                        @isset($user->email_verified_at)
                                        <span class="badge badge-success">Verified</span> <small>{{
                                            $user->email_verified_at->format('j F Y') }}</small>
                                        @endisset

                                        @empty($user->email_verified_at)
                                        <span class="badge badge-warning">Pending</span>
                                        @endempty
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <span data-toggle="modal" data-target="#showUserModal"
                                                data-user-id="{{$user->id}}">
                                                <button class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Lihat Detail User">
                                                    <i class="fas fa-eye text-primary"></i>
                                                </button>
                                            </span>
                                            <span data-toggle="modal" data-user-name="{{$user->full_name}}"
                                                data-user-id="{{$user->id}}" data-target="#changePasswordModal">
                                                <button class="btn" data-toggle="tooltip" data-placement="top"
                                                    title="Ganti Password User">
                                                    <i class="fas fa-cog text-secondary"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr colspan="5">No Data Found</tr>
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