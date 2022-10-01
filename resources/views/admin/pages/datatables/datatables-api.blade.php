@extends('admin.layouts.app',[
    'title' => 'Datatables API',
    'active' => 'datatables-api',
    'breadcrumb' => [
        'title' => 'Datatables',
        'map' => [
            'Datatables API' => 'active',
        ],
    ]
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
@endsection

@section('content')
<!-- Child rows (show extra / detailed information) table -->
<section id="child-row">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Child rows (show extra / detailed information)</h4>
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
            <div class="card-content collapse show">
                <div class="card-body">
                <p class="card-text">The DataTables API has a number of methods available for attaching
                    child rows to a parent row in the DataTable. This can be used
                    to show additional information about a row, useful for cases
                    where you wish to convey more information about a row than
                    there is space for in the host table.
                </p>
                <table class="table table-striped table-bordered show-child-rows">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--/ Child rows (show extra / detailed information) table -->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function(){

    var tableChildRows = $('.show-child-rows').DataTable( {
        "ajax": "{{ asset('app-assets/data/datatables/ajax-child-rows.json') }}",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[4, 'desc']]
    } );

    // Add event listener for opening and closing details
    $('.show-child-rows tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = tableChildRows.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });
});
</script>
@endsection