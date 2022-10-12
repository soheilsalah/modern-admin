@extends('admin.layouts.app',[
    'title' => 'Laravel Datatables',
    'active' => 'datatables',
    'breadcrumb' => [
        'title' => 'Laravel Datatables',
        'map' => [
            'Laravel Datatables' => 'active',
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
                        {!! $dataTable->table() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Javascript sourced data -->    
@endsection

@section('scripts')
{!! $dataTable->scripts() !!}
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function(){

    $(document).on('click', '.delete-user', function(e){
        e.preventDefault();
        
        var user_id = $(this).data("user-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, cancel plx!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                $("#tr_"+user_id).hide();
            } else {
                swal("Cancelled", "Your imaginary file is safe", "error");
            }
        });

    });
});
</script>
@endsection