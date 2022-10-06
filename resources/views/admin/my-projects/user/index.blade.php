@extends('admin.layouts.app',[
    'title' => 'Users',
    'active' => 'users',
    'breadcrumb' => [
        'title' => 'Users',
        'map' => [
            'Users' => 'active',
        ],
    ]
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
@endsection

@section('content')
<!-- Server-side processing -->
<section id="server-processing">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List of all Users</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard">
                        </p>
                        <table class="table table-striped table-bordered" id="users">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Delete</th>
                                    <th>Restore</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Delete</th>
                                    <th>Restore</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Javascript sourced data -->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function(){

    $('#users').DataTable( {
        'iDisplayLength': 10,
        "language": {
            "emptyTable" : "لا توجد اي معلومات في هذا الجدول",
            "search" : "بحث",
            "info" : "اظهار _START_ الي _END_ من اصل _TOTAL_ نتيجة",
            "lengthMenu" : "اظهار _MENU_ نتائج",
            "infoEmpty" : "0 نتائج بحث",
            "paginate": {
                "previous": "السابق",
                "next": "التالي",
            }
        },
        "processing": true,
        "serverSide": true,
        //"ajax": "../server_side/scripts/server_processing.php" NOTE: use serverside script to fatch the data
        // "ajax": "{{ asset('app-assets/data/datatables/server-side.json') }}"
        "ajax" : "{{ route('admin.datatables.users') }}",
        columns : [
            { data : 'name', name : 'name' },
            { data : 'email', name : 'email' },
            { data : 'delete', name : 'delete' },
            { data : 'restore', name : 'restore' },
        ],
    });

    $(document).on('click', '.delete-user', function(e){
        e.preventDefault();
        
        var user_id = $(this).data("user-id");

        $.ajax({
            type : "POST",
            url : "{{ route('admin.ajax.user.delete') }}",
            data : {
                "_token" : "{{ csrf_token() }}",
                "user_id" : user_id,
            },
            beforeSend : () => {

                swal("Uploading ...", "Deleting User, Please wait...", "info");
            },
            success : (data) => {
                swal("Done", "User has been removed", "success");

                $(".tr_"+user_id).empty();
            },
            error : (xhr, status, error) => {
                
                var err = JSON.parse(xhr.responseText);

                swal("Error!", err.message, "error");
            },
        });
    });
    
    $(document).on('click', '.restore-user', function(e){
        e.preventDefault();
        
        var user_id = $(this).data("user-id");

        $.ajax({
            type : "POST",
            url : "{{ route('admin.ajax.user.restore') }}",
            data : {
                "_token" : "{{ csrf_token() }}",
                "user_id" : user_id,
            },
            beforeSend : () => {

                swal("Restoring ...", "Restoring User, Please wait...", "info");
            },
            success : (data) => {
                swal("Done", "User has been Restored", "success");

                $("#restore-user-"+user_id).hide();
            },
            error : (xhr, status, error) => {
                
                var err = JSON.parse(xhr.responseText);

                swal("Error!", err.message, "error");
            },
        });
    });
});
</script>
@endsection