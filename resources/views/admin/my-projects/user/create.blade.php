@extends('admin.layouts.app',[
    'title' => 'Create new User',
    'active' => 'user.create',
    'breadcrumb' => [
        'title' => 'Create new User',
        'map' => [
            'Users' => 'admin.users',
            'Create new User' => 'active',
        ],
    ]
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
@endsection

@section('content')
<!-- User Creation Form -->
<section id="basic-form-layouts">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="bordered-layout-colored-controls">Create new User Account</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form class="form form-horizontal form-bordered" id="create-new-user">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-user"></i>User Data</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="username">Fist Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="username" name="username" class="form-control border-primary" placeholder="First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="email">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" name="email" class="form-control border-primary" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="password">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="password" name="password" class="form-control border-primary" placeholder="User Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="repass">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="repass" name="repass" class="form-control border-primary" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // User Creation Form -->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function(){

    $("#create-new-user").on('submit', function(e){
        e.preventDefault();
        
        $.ajax({
            type : "POST",
            url : "{{ route('admin.ajax.user.create') }}",
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            beforeSend : () => {

                swal("Uploading ...", "Creating new User, Please wait...", "info");
            },
            success : (data) => {
                swal("Done", "New User has been created", "success");
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