@extends('admin.layouts.app',[
    'title' => 'Datatables AJAX',
    'active' => 'datatables-ajax'
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
@endsection

@section('content')
<!-- Server-side processing -->
<section id="server-processing">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Server-side processing</h4>
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
                        <p class="card-text">Server-side processing is enabled by setting the <code>serverSide option</code> to true and providing an <code>Ajax</code> data source through the ajax option.
                        </p>
                        <table class="table table-striped table-bordered server-side">
                            <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>البريد الالكتروني</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>الاسم</th>
                                    <th>البريد الالكتروني</th>
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
<script>
$(document).ready(function(){

    $('.server-side').DataTable( {
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
        ],
    });
});
</script>
@endsection