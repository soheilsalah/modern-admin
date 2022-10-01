@extends('admin.layouts.app',[
    'title' => 'Toastr',
    'active' => 'toastr',
    'breadcrumb' => [
        'title' => 'Components',
        'map' => [
            'Toastr' => 'active',
        ],
    ]
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
@endsection

@section('content')
<!-- Types section start -->
<section id="types">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Types</h4>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success">Success</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-info mb-2" id="type-info">Info</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-warning mb-2" id="type-warning">Warning</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-danger mb-2" id="type-error">Error</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Types section end -->
<!-- Position section start -->
<section id="position">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Position</h4>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-6 col-sm-12">
            <h5>Top Positions</h5>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-left">Top Left</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-center">Top Center</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-right">Top Right</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-top-full">Top Full Width</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <h5>Bottom Positions</h5>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-left">Bottom Left</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-center">Bottom Center</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-right">Bottom Right</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="position-bottom-full">Bottom Full Width</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Position section end -->
<!-- Options section start -->
<section id="options">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Options</h4>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-3 col-sm-12">
            <h5>Text Notifications</h5>
            <p>This notification just includes text.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="text-notification">Show Toast</button>
            </div>
            <div class="col-md-3 col-sm-12">
            <h5>Close Button</h5>
            <p>Close this notification clicking on close button.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="close-button">Show Toast</button>
            </div>
            <div class="col-md-3 col-sm-12">
            <h5>Progress Bar</h5>
            <p>Visually indicate how long before a toast expires.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="progress-bar">Show Toast</button>
            </div>
            <div class="col-md-3 col-sm-12">
            <h5>Clear Toast</h5>
            <p>Add button to force clearing a toast, ignoring focus.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="clear-toast-btn">Show Toast</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Options section end -->
<!-- Clear toasts section start -->
<section id="clear-toasts">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Clear Toasts</h4>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-6 col-sm-12">
            <h5>Remove</h5>
            <p>Immediately remove current toasts without using animation.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="show-remove-toast">Show Toast</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="remove-toast">Remove Toast</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <h5>Clear</h5>
            <p>Remove current toasts using animation.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="show-clear-toast">Show Toast</button>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="clear-toast">Clear Toast</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Clear toasts section end -->
<!-- Duration & Timeout section start -->
<section id="duration-timeout">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Duration & Timeout</h4>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-6 col-sm-12">
            <h5>Show .5s</h5>
            <p>You can define via <code>showDuration</code> what amount of time
                will it take to show a message.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="fast-duration">Show Toast</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <h5>Hide 3s</h5>
            <p>You can define via <code>hideDuration</code> what amount of time
                will it take to hide a message.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="slow-duration">Show Toast</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
            <h5>Timeout 5s</h5>
            <p>You can define via <code>timeout</code> for what amount of time
                in milliseconds a message is visible.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="timeout">Show Toast</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <h5>Sticky</h5>
            <p>You can also create a sticky message by setting the <code>timeout</code>                      to <code>0</code>.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="sticky">Show Toast</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Duration & Timeout section end -->
<!-- Animation section start -->
<section id="animation">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Show / Hide Animation</h4>
        <p>Use the jQuery <code>show/hide</code> method of your choice. These
        default to <code>fadeIn/fadeOut</code>. The methods <code>fadeIn/fadeOut</code>,
        <code>slideDown/slideUp</code>, and <code>show/hide</code> are built
        into jQuery.</p>
    </div>
    </div>
    <div class="card">
    <div class="card-content">
        <div class="card-body">
        <div class="row mt-1">
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="slide-toast">slideDown - slideUp</button>
            </div>
            <div class="col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="fade-toast">fadeIn - fadeOut</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- // Animation section end -->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}" type="text/javascript"></script>
<script>
/*=========================================================================================
	File Name: toastr.js
	Description: Toastr notifications
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
	Version: 1.0
	Author: Pixinvent
	Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function(){

    // Success Type
    $('#type-success').on('click',function(){
        toastr.success('Have fun storming the castle!', 'Miracle Max Says');
    });

    // Success Type
    $('#type-info').on('click',function(){
        toastr.info('We do have the Kapua suite available.', 'Turtle Bay Resort');
    });

    // Success Type
    $('#type-warning').on('click',function(){
        toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
    });

    // Success Type
    $('#type-error').on('click',function(){
        toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
    });

    // Position Top Left
    $('#position-top-left').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Top Left!', {positionClass: 'toast-top-left', containerId: 'toast-top-left' });
    });

    // Position Top Center
    $('#position-top-center').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Top Center!', {positionClass: 'toast-top-center', containerId: 'toast-top-center'});
    });

    // Position Top Right
    $('#position-top-right').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Top Right!', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});
    });

    // Position Top Full Width
    $('#position-top-full').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Top Full Width!', {positionClass: 'toast-top-full-width', containerId: 'toast-top-full-width'});
    });

    // Position Bottom Left
    $('#position-bottom-left').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Bottom Left!', {positionClass: 'toast-bottom-left', containerId: 'toast-bottom-left'});
    });

    // Position Bottom Center
    $('#position-bottom-center').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Bottom Center!', {positionClass: 'toast-bottom-center', containerId: 'toast-bottom-center'});
    });

    // Position Bottom Right
    $('#position-bottom-right').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Bottom Right!', {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right'});
    });

    // Position Bottom Full Width
    $('#position-bottom-full').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Bottom Full Width!', {positionClass: 'toast-bottom-full-width', containerId: 'toast-bottom-full-width'});
    });

    // Text Notification
    $('#text-notification').on('click',function(){
        toastr.info('Have fun storming the castle!', 'Miracle Max Says');
    });

    // Close Button
    $('#close-button').on('click',function(){
        toastr.success('Have fun storming the castle!', 'With Close Button', {"closeButton": true});
    });

    // Progress Bar
    $('#progress-bar').on('click',function(){
        toastr.warning('Have fun storming the castle!', 'Progress Bar', {"progressBar": true});
    });

    // Clear Toast Button
    $('#clear-toast-btn').on('click',function(){
        toastr.error('Clear itself?<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>', 'Clear Toast Button');
    });


    // Immediately remove current toasts without using animation
    $('#show-remove-toast').on('click',function(){
        toastr.info('Have fun storming the castle!', 'Miracle Max Says');
    });

    $('#remove-toast').on('click',function(){
        toastr.remove();
    });

    // Remove current toasts using animation
    $('#show-clear-toast').on('click',function(){
        toastr.info('Have fun storming the castle!', 'Miracle Max Says');
    });

    $('#clear-toast').on('click',function(){
        toastr.clear();
    });


    // Fast Duration
    $('#fast-duration').on('click',function(){
        toastr.success('Have fun storming the castle!', 'Fast Duration', {"showDuration": 500});
    });

    // Slow Duration
    $('#slow-duration').on('click',function(){
        toastr.warning('Have fun storming the castle!', 'Slow Duration', {"hideDuration": 3000});
    });

    // Timeout
    $('#timeout').on('click',function(){
        toastr.error('I do not think that word means what you think it means.', 'Timeout!', {"timeOut": 5000});
    });

    // Sticky
    $('#sticky').on('click',function(){
        toastr.info('I do not think that word means what you think it means.', 'Sticky!', {"timeOut": 0});
    });

    // Slide Down / Slide Up
    $('#slide-toast').on('click',function(){
        toastr.success('I do not think that word means what you think it means.', 'Slide Down / Slide Up!', {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
    });

    // Fade In / Fade Out
    $('#fade-toast').on('click',function(){
        toastr.success('I do not think that word means what you think it means.', 'Slide Down / Slide Up!', {"showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 2000});
    });
});
</script>
@endsection