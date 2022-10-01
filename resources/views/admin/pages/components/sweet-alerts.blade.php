@extends('admin.layouts.app',[
    'title' => 'Sweet Alerts',
    'active' => 'sweet-alerts'
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
@endsection

@section('content')
<!-- Basic example section start -->
<section id="basic-examples">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Basic Examples</h4>
            <p>SweetAlert automatically centers itself on the page and looks great
            no matter if you're using a desktop computer, mobile or tablet. It's
            even highly customizable, as you can see below!</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
            <div class="row mt-1">
                <div class="col-md-4 col-sm-12">
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="basic-alert">Basic</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="with-title">With Title</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="html-alert">HTML</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic example section end -->

<!-- Types section start -->
<section id="types">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Types</h4>
            <p>The type of the modal. SweetAlert comes with 4 built-in types which
            will show a corresponding icon animation: "warning", "error", "success"
            and "info". You can also set it as "input" to get a prompt modal.
            It can either be put in the object under the key "icon" or passed
            as the third parameter of the function.</p>
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
            <div class="row mt-2">
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
                <div class="col-md-4 col-sm-12">
                <h5>Custom Icon</h5>
                <p><code>icon</code> is used to add a customized icon for the modal.
                    Should contain a string with the path to the image.</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="custom-icon">Custom Icon</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <h5>Auto Close Timer</h5>
                <p>A message with auto close timer. <code>timer</code> is default
                    set to <code>null</code>. You can set timer in ms (milliseconds).</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="auto-close">Auto Close</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <h5>Close on click outside</h5>
                <p>If <code>closeOnClickOutside</code> is set to <code>true</code>,
                    the user can dismiss the modal by clicking outside it.</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="outside-click">Click Outside</button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4 col-sm-12">
                <h5>Show Cancel Button</h5>
                <p>You can set <code>buttons: true</code> to show both buttons,
                    or <code>buttons: false</code> to hide all buttons. By default,
                    only the confirm button is shown.</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="cancel-button">Cancel Button</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <h5>Prompt Function</h5>
                <p>A replacement for the "prompt" function. You can set <code>content</code>                      as "input" to get a prompt modal.</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="prompt-function">Prompt</button>
                </div>
                <div class="col-md-4 col-sm-12">
                <h5>Ajax Request</h5>
                <p>Search for a movie. e.g. "La La Land" to view the AJAX request
                    for example.</p>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="ajax-request">Ajax</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- // Options section end -->

<!-- Confirm option section start -->
<section id="confirm-option">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Confirm Options</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="row mt-1">
                    <div class="col-md-6 col-sm-12">
                    <h5>Confirm Button Text</h5>
                    <p>Use this to change the text on the "Confirm"-button. If <code>showCancelButton</code>                      is set as <code>true</code>, the confirm button will automatically
                        show "Confirm" instead of "OK".</p>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-text">Confirm Text</button>
                    </div>
                    <div class="col-md-6 col-sm-12">
                    <h5>Confirm Button Color</h5>
                    <p>Use <code>className: "btn-warning"</code> option to change the
                        background color of the "Confirm"-button.</p>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color">Confirm Button Color</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Confirm option section end -->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script>
/*=========================================================================================
	File Name: sweet-alerts.js
	Description: A beautiful replacement for javascript alerts
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Responsive Admin Theme
	Version: 1.0
	Author: Pixinvent
	Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function(){

    $('#basic-alert').on('click',function(){
        swal("Here's a message!");
    });

    $('#with-title').on('click',function(){
        swal("Here's a message!", "It's pretty, isn't it?");
    });

    $('#html-alert').on('click',function(){
        var el = document.createElement('span'),
        t = document.createTextNode("Custom HTML Message!!");
        el.style.cssText = 'color:#F6BB42';
        el.appendChild(t);
        swal({
            title: 'HTML Alert!',
            content: {
                element: el,
            }
        });
    });

    $('#type-success').on('click',function(){
        swal("Good job!", "You clicked the button!", "success");
    });

    $('#type-info').on('click',function(){
        swal("Info!", "You clicked the button!", "info");
    });

    $('#type-warning').on('click',function(){
        swal("Warning!", "You clicked the button!", "warning");
    });

    $('#type-error').on('click',function(){
        swal("Error!", "You clicked the button!", "error");
    });

    $('#custom-icon').on('click',function(){
        swal({   title: "Sweet!",   text: "Here's a custom image.",   icon: "../../../app-assets/images/icons/thumbs-up.jpg" });
    });

    $('#auto-close').on('click',function(){
        swal({   title: "Auto close alert!",   text: "I will close in 2 seconds.",   timer: 2000,   showConfirmButton: false });
    });

    $('#outside-click').on('click',function(){
        swal({
            title: 'Click outside to close!',
            text: 'This is a cool message!',
            closeOnClickOutside: true
        });
    });

    $('#cancel-button').on('click',function(){
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
            } else {
                swal("Cancelled", "Your imaginary file is safe", "error");
            }
        });

    });

    $('#prompt-function').on('click',function(){
        swal("Write something interesting:", {
                content: "input",
            })
            .then((value) => {
                if (value === false) return false;
                if (value === "") {
                    swal("You need to write something!", "", "error");
                    return false;
                }
                swal(`You typed: ${value}`);
            })

    });

    $('#ajax-request').on('click',function(){
        swal({
                text: 'Search for a movie. e.g. "La La Land".',
                content: "input",
                button: {
                    text: "Search!",
                    closeModal: false,
                },
            })
            .then(name => {
                if (!name) throw null;

                return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
            })
            .then(results => {
                return results.json();
            })
            .then(json => {
                const movie = json.results[0];

                if (!movie) {
                    return swal("No movie was found!");
                }

                const name = movie.trackName;
                const imageURL = movie.artworkUrl100;

                swal({
                    title: "Top result:",
                    text: name,
                    icon: imageURL,
                });
            })
            .catch(err => {
                if (err) {
                    swal("Oh noes!", "The AJAX request failed!", "error");
                } else {
                    swal.stopLoading();
                    swal.close();
                }
            });
    });

    $('#confirm-text').on('click',function(){
        swal({
            title: "Confirm Button Text",
            text: "See the confirm button text! Have you noticed the Change?",
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
                    text: "Text Changed!!!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        }).then(isConfirm => {
            if (isConfirm) {
                swal("Changed!", "Confirm button text was changed!!", "success");
            } else {
                swal("Cancelled", "It's safe.", "error");
            }
        });
    });

    $('#confirm-color').on('click',function(){
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            showCancelButton: true,
            buttons: {
                cancel: {
                    text: "No, cancel plx!",
                    value: null,
                    visible: true,
                    className: "btn-warning",
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
        }).then(isConfirm => {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    });

});
</script>
@endsection