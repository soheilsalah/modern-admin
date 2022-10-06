@extends('admin.layouts.app',[
    'title' => 'User : '.$user->name,
    'active' => 'users',
    'breadcrumb' => [
        'title' => 'User : '.$user->name,
        'map' => [
            'Users' => 'admin.users',
            'User : '.$user->name => 'active',
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
                    <h4 class="card-title" id="bordered-layout-colored-controls">Update User <b>{{ $user->name }}</b> Account</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form class="form form-horizontal form-bordered" id="update-user-info">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-user"></i>{{ $user->name }} Data</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="username">Fist Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="username" name="username" class="form-control border-primary" placeholder="First Name" value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="email">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" name="email" class="form-control border-primary" placeholder="Last Name" value="{{ $user->email }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning">
                                    <i class="la la-check-square-o"></i> Update
                                </button>
                                <button type="button" class="btn btn-danger" id="force-delete-user" data-user-id="{{ $user->id }}">
                                    <i class="la la-trash"></i> Delete
                                </button>
                                <div id="res"></div>
                            </div>
                        </form>

                        <form class="form form-horizontal form-bordered mt-5" id="update-user-password">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-key"></i>{{ $user->name }} Password</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="current_password">Current Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="current_password" name="current_password" class="form-control border-primary" placeholder="User Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="new_password">New Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="new_password" name="new_password" class="form-control border-primary" placeholder="User Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 label-control" for="repass">Confirm Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="repass" name="repass" class="form-control border-primary" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning">
                                    <i class="la la-check-square-o"></i> Update Password
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

    $("#update-user-info").on('submit', function(e){
        e.preventDefault();
        
        $.ajax({
            type : "POST",
            url : "{{ route('admin.ajax.user.update-user-info') }}",
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            beforeSend : () => {

                swal("Updating ...", "Updating User {{ $user->name }} info, Please wait...", "info");
            },
            success : (data) => {
                swal("Done", "User : {{ $user->name }} info has been updated", "success");
            },
            error : (xhr, status, error) => {
                
                var err = JSON.parse(xhr.responseText);

                swal("Error!", err.message, "error");
            },
        });
    });

    $("#update-user-password").on('submit', function(e){
        e.preventDefault();
        
        $.ajax({
            type : "POST",
            url : "{{ route('admin.ajax.user.update-user-password') }}",
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            beforeSend : () => {

                swal("Updating ...", "Updating User {{ $user->name }} password, Please wait...", "info");
            },
            success : (data) => {
                swal("Done", "User : {{ $user->name }} password has been updated", "success");
            },
            error : (xhr, status, error) => {
                
                var err = JSON.parse(xhr.responseText);

                swal("Error!", err.message, "error");
            },
        });
    });
    
    $('#force-delete-user').on('click',function(){

        var user_id = $(this).data('user-id');

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this user!",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, cancel it!",
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
        }).then((isConfirm) => {

            if (isConfirm) {

                $.ajax({
                    type : "POST",
                    url : "{{ route('admin.ajax.user.force-delete') }}",
                    data : {
                        "_token" : "{{ csrf_token() }}",
                        "user_id" : user_id,
                    },
                    beforeSend : () => {

                        swal("Deleting ...", "Deleting User {{ $user->name }}, Please wait...", "info");
                    },
                    success : (data) => {

                        swal("Deleted!", "User : {{ $user->name }} has been removed form our system.", "success");
                        $("#res").html(data);
                    },
                    error : (xhr, status, error) => {
                        
                        var err = JSON.parse(xhr.responseText);

                        swal("Error!", err.message, "error");
                    },
                });

            } else {
                swal("Cancelled", "", "error");
            }
        });
    });
});
</script>
@endsection