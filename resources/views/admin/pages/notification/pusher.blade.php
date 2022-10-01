@extends('admin.layouts.app',[
    'title' => 'Pusher Notifications',
    'active' => 'pusher-notification'
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/plugins/extensions/toastr.css') }}">
@endsection


@section('content')
<!-- Description -->
<section id="description" class="card">
    <div class="card-header">
        <h4 class="card-title">Pusher Notifications</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <div class="jumbotron text-center bg-primary">
                    <h1 class="text-light">Send & Reciver Notifications via Pusher</h1>
                    <button class="btn btn-success" id="send-notification">Click Here to send Notification</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
@endsection


@section('scripts')
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
$("#send-notification").on('click', function(e){
    e.preventDefault();

    

    $.ajax({
        type : "POST",
        url : "{{ route('admin.send-notification') }}",
        data : {
            "_token" : "{{ csrf_token() }}"
        },
        beforeSend : () => {

            swal({
                title : "Loading...",
                closeOnClickOutside: false,
                buttons: false,
            });
        },
        success : (data) => {

            swal({
                title: "تم الارسال",
                icon: "../../../app-assets/images/icons/thumbs-up.jpg",
                closeOnClickOutside: false,
            });
        },
        error : () => {

            swal("خطاء", "حدث خطاء ماء", "error");
        }
    });
});
// // Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

// var pusher = new Pusher('036ef20ca6d3cb5435a7', {
//   cluster: 'eu'
// });

// var channel = pusher.subscribe('my-channel');
// channel.bind('my-event', function(data) {
//   alert(JSON.stringify(data));
// });
</script>
@endsection