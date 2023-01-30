@extends('shared.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Larissa Subscriber</h6>
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
                                        email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($newsLetters as $newsletter)
                                <tr class="pendingRequest">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="sorting_1">{{ $newsletter->email }}</td>
                                </tr>
                                @empty
                                <tr class="pendingRequest">
                                    <td colspan="2">No Data Found</td>
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
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
                ]
            });
        });
</script>
@endsection