@extends('template.base-master')
@section('title', 'DPW & DPC')
    @section('content')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DPW & DPC</h1>
            <a href="{{ url('master-region/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Data Baru</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data DPW & DPC</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('master-region.index') }}",
            columns: [{
                    data: 'region_image',
                    name: 'region_image'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

    $('#dataTable').on('submit','.process-delete',function(e) {
        e.preventDefault();
        if (confirm('Apakah anda yakin untuk menghapus data ini ?')) {
           var url = $(this).attr('action');
           $.ajax({
               url : url,
               method: 'post',
               data : $(this).serialize(),
               success:function(xhr){
                   if (xhr.status == 200) {
                       alert(xhr.message);
                       location.reload();
                   } else {
                    alert(xhr.message);
                   }
               }
           })
        }
    });
</script>
@endsection
