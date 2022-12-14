@extends('admin.layouts.app',[
    'title' => 'Switch',
    'active' => 'inputs.switch',
    'breadcrumb' => [
        'title' => 'Inputs',
        'map' => [
            'Switch' => 'active',
        ],
    ]
])

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/toggle/switchery.min.css') }}">
@endsection


@section('content')
<!-- Checkbox Toggle start -->
<section class="bootstrap-checkbox" id="bootstrap-checkbox">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Bootstrap Checkbox Toggle</h4>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Simple Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>.switch</code>class to checkbox to set as switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch1" checked="checked" />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Reverse Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>checked</code> to set checked bootstrap switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch2" data-reverse/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Always toggle Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-switch-always</code> to switch on every click</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch3" data-switch-always checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Disabled Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Checked &amp; Disabled toggle</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch4" disabled checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Small Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-group-cls="btn-group-sm"</code> attribute for
                small switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch5" data-group-cls="btn-group-sm"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Large Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-group-cls="btn-group-lg"</code> attribute for
                large switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch6" data-group-cls="btn-group-lg"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Vertical Switch</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-group-cls="btn-group-vertical"</code> attribute
                for vertical switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch7" data-group-cls="btn-group-vertical"
                data-switch-always/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Change Switch Title</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-off-title="VALUE"</code> attribute for OFF hover
                title and <code>data-on-title="VALUE"</code> attribute for
                ON hover title</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch8" data-off-title="Don't Say NO!!"
                data-on-title="Say,Yes please!!" data-switch-always checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Switch with Icons</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-icon-cls="fa"</code> to set font family you are
                using <code>data-off-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for off switch icon &amp; <code>data-on-icon-cls="fa FONT_AWESOME_ICON"</code>                      attribute for on switch icon</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch9" data-icon-cls="fa" data-off-icon-cls="ft-thumbs-down"
                data-on-icon-cls="ft-thumbs-up" />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Only Switch Icons</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>To set only icon switch set <code>data-off-label="false"</code>                      &amp; <code>data-off-label="false"</code>.</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch10" data-off-label="false" data-on-label="false"
                data-icon-cls="fa" data-off-icon-cls="icon-user" data-on-icon-cls="icon-user-female"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">OnLabel Click change</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" id="switch11" data-col-sm-3/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Change Switch Labels</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>Add <code>data-off-label="OffValue"</code> attribute for off
                switch label &amp; <code>data-on-label="OnValue"</code> attribute
                for on switch label</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switch" data-on-label="Male" data-off-label="Female"
                id="switch12" checked />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Checkbox Toggle end -->
<!-- Bootstrap Switch start -->
<section class="bootstrap-switch-toggle" id="bootstrap-switch-toggle">
    <div class="row">
    <div class="col-12">
        <h4>Bootstrap Switch Toggle</h4>
        <hr>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch default</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>.switchBootstrap</code> class to set bootstrap switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="make-switch switchBootstrap" id="switchBootstrap1"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch checked</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>checked</code> to set checked bootstrap switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch checked &amp; Disabled</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>checked disabled</code> to set checked &amp; disabled
                bootstrap switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" checked disabled/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Checked &amp; readonly</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>checked readonly</code> for checked &amp; readonly
                switch direction.</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" checked readonly/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch with On Text</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>data-on-text="TEXT"</code> to change text of the left
                side of the switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap5" data-on-text="Left"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch with Off Text</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p> Add <code>data-off-text="TEXT"</code> to change text of the right
                side of the switch</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap6" data-off-text="Right"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch with custom Label</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <p>use <code>data-label-text="TEXT"</code> for text of the center
                handle of the switch and that will work with <code>data-indeterminate="true"</code>                      attribute only.</p>
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap7" data-on-text="Female"
                data-off-text="Male" data-label-text="Gender" data-indeterminate="true"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Label Options</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap8" data-on-text="Yes"
                data-off-text="No" />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Label Options</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap9" data-on-text="Online"
                data-off-text="Offline" checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Label Options</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap10" data-on-text="Enable"
                data-off-text="Disable" />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch with Icon</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap11" data-on-text="<i class='la la-thumbs-up'></i>"
                data-off-text="<i class='la la-thumbs-down'></i>" checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch with Icon &amp; Text</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap12" data-on-text="<i class='la la-thumbs-up'></i> <br>Yes"
                data-off-text="<i class='la la-thumbs-down'></i> <br> No"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Label with Icon</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap13" data-on-text="Male <i class='la la-mars'></i>"
                data-off-text="Female <i class='la la-venus'></i>" data-label-text="Gender"
                data-indeterminate="true" checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Label with Icon on top</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap14" data-on-text="<i class='la la-mars'></i> <br> Male "
                data-off-text="<i class='la la-venus'></i> <br> Female "
                data-label-text="Gender" data-indeterminate="true" checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Default Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap15" data-on-color="default"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Primary Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap16" data-on-color="primary"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Warning Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap17" data-on-color="warning"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Success Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap18" data-on-color="success"
                data-off-color="danger" checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Danger Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap19" data-off-color="danger"
                />
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Info Color</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="checkbox" class="switchBootstrap" id="switchBootstrap20" data-on-color="info"
                checked/>
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Radio</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="radio" name="radio1" checked class="switchBootstrap">
                <input type="radio" name="radio1" class="switchBootstrap">
                <input type="radio" name="radio1" class="switchBootstrap">
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <label class="card-title">Bootstrap Switch Radio Icons</label>
        </div>
        <div class="card-content">
            <div class="card-body">
            <fieldset>
                <div class="float-left">
                <input type="radio" name="radio2" checked data-radio-all-off="true" class="switchBootstrap">
                <input type="radio" name="radio2" data-radio-all-off="true" class="switchBootstrap">
                <input type="radio" name="radio2" data-radio-all-off="true" class="switchBootstrap">
                </div>
            </fieldset>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Bootstrap Switch end -->
<!-- Switchery Switch start -->
<section class="switchery-toggle" id="switchery-toggle">
    <div class="row">
    <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Switchery Toggle</h4>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Switchery Toggle</h4>
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
        <div class="card-content">
            <div class="card-body">
            <p>To set Switchery toggle, add <code>.switchery</code> class to
                checkbox.
            </p>
            <div class="form-group pb-1">
                <input type="checkbox" id="switchery" class="switchery" checked/>
                <label for="switchery" class="font-medium-2 text-bold-600 ml-1">Switchery Default</label>
            </div>
            <div class="form-group pb-1">
                <input type="checkbox" id="switchery1" class="switchery" />
                <label for="switchery1" class="font-medium-2 text-bold-600 ml-1">Switchery Unchecked</label>
            </div>
            <div class="form-group pb-1">
                <input type="checkbox" id="switchery2" class="switchery" checked disabled/>
                <label for="switchery2" class="font-medium-2 text-bold-600 ml-1">Switchery Checked &amp; Disabled</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="switchery3" class="switchery" disabled/>
                <label for="switchery3" class="font-medium-2 text-bold-600 ml-1">Switchery Disable</label>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Right Switchery Toggle</h4>
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
        <div class="card-content">
            <div class="card-body">
            <p> To set Switchery toggle to right, wrap checkbox with <code>.float-right</code>                      class.</p>
            <div class="form-group pb-1">
                <div class="float-right">
                <input type="checkbox" name="switchery" id="switchery0" class="switchery" checked/>
                </div>
                <label for="switchery0" class="font-medium-2 text-bold-600">Switchery Default</label>
            </div>
            <div class="form-group pb-1">
                <div class="float-right">
                <input type="checkbox" name="switchery" id="switchery01" class="switchery" />
                </div>
                <label for="switchery01" class="font-medium-2 text-bold-600">Switchery Unchecked</label>
            </div>
            <div class="form-group pb-1">
                <div class="float-right">
                <input type="checkbox" name="switchery" id="switchery02" class="switchery" checked
                disabled/>
                </div>
                <label for="switchery02" class="font-medium-2 text-bold-600">Switchery Checked &amp; Disabled</label>
            </div>
            <div class="form-group">
                <div class="float-right">
                <input type="checkbox" name="switchery" id="switchery03" class="switchery" disabled/>
                </div>
                <label for="switchery03" class="font-medium-2 text-bold-600">Switchery Disable</label>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Switchery Sizes</h4>
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
        <div class="card-content">
            <div class="card-body">
            <div class="form-group ">
                <input type="checkbox" id="switcherySize" class="switchery" data-size="lg" checked/>
                <label for="switcherySize" class="font-medium-2 text-bold-600 ml-1">Large Switchery</label>
                <p class="text-muted"> To set Large Switchery toggle, add <code>data-size="lg"</code>                        to checkbox with <code>.switchery</code> class.</p>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcherySize1" class="switchery" checked/>
                <label for="switcherySize1" class="font-medium-2 text-bold-600 ml-1">Default Switchery</label>
                <p class="text-muted"> To set Default Switchery toggle, add <code>.switchery</code>                        class to checkbox.</p>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcherySize2" class="switchery" data-size="sm" checked/>
                <label for="switcherySize2" class="font-medium-2 text-bold-600 ml-1">Small Switchery</label>
                <p class="text-muted"> To set Small Switchery toggle, add <code>data-size="sm"</code>                        to checkbox with <code>.switchery</code> class.</p>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                <label for="switcherySize3" class="font-medium-2 text-bold-600 ml-1">Extra Small Switchery</label>
                <p class="text-muted"> To set Extra Small Switchery toggle, add <code>data-size="xs"</code>                        to checkbox with <code>.switchery</code> class.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Switchery Labels on both sides</h4>
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
        <div class="card-content">
            <div class="card-body">
            <div class="form-group pb-1">
                <label for="switcherySize10" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                <input type="checkbox" id="switcherySize10" class="switchery" data-size="lg" checked/>
                <label for="switcherySize10" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
            </div>
            <div class="form-group mt-1 pb-1">
                <label for="switcherySize11" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                <input type="checkbox" id="switcherySize11" class="switchery" checked/>
                <label for="switcherySize11" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
            </div>
            <div class="form-group mt-1 pb-1">
                <label for="switcherySize12" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                <input type="checkbox" id="switcherySize12" class="switchery" data-size="sm" checked/>
                <label for="switcherySize12" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
            </div>
            <div class="form-group mt-1">
                <label for="switcherySize13" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                <input type="checkbox" id="switcherySize13" class="switchery" data-size="xs" checked/>
                <label for="switcherySize13" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Switchery Switch end -->
<!-- Template Color Switchery start -->
<section class="theme-switchery" id="theme-switchery">
    <div class="row">
    <div class="col-12">
        <h4>Template Color Switchery</h4>
        <hr>
    </div>
    </div>
    <div class="row match-height">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Color Switchery</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
            <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
            <div class="form-group ">
                <input type="checkbox" id="switcheryColor" class="switchery" data-color="primary"
                checked/>
                <label for="switcheryColor" class="card-title ml-1">Primary Color Switchery</label>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcheryColor4" class="switchery" data-color="success"
                checked/>
                <label for="switcheryColor4" class="card-title ml-1">Success Switchery</label>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcheryColor3" class="switchery" data-color="danger"
                checked/>
                <label for="switcheryColor3" class="card-title ml-1">Danger Switchery</label>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcheryColor2" class="switchery" data-color="info" checked/>
                <label for="switcheryColor2" class="card-title ml-1">Info Switchery</label>
            </div>
            <div class="form-group mt-1">
                <input type="checkbox" id="switcheryColor1" class="switchery" data-color="warning"
                checked/>
                <label for="switcheryColor1" class="card-title ml-1">Warning Switchery</label>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">COLOR SWITCHERY WITH LABELS ON BOTH SIDES</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
            <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
            <div class="form-group row overflow-hidden">
                <div class="col-sm-4 col-5">
                <label for="switcheryColor10" class="card-title primary ">Primary Color Label &amp; Switchery</label>
                </div>
                <div class="col-sm-4 col-2 text-center mb-1">
                <input type="checkbox" id="switcheryColor10" class="switchery" data-color="primary"
                checked/>
                </div>
                <div class="col-sm-4 col-5">
                <label for="switcheryColor10" class="card-title primary ">Primary Color Label &amp; Switchery</label>
                </div>
            </div>
            <div class="form-group row overflow-hidden mt-1">
                <div class="col-sm-4 col-5">
                <label for="switcheryColor14" class="card-title success">Success Color Label &amp; Switchery</label>
                </div>
                <div class="col-sm-4 col-2 text-center mb-1">
                <input type="checkbox" id="switcheryColor14" class="switchery" data-color="success"
                checked/>
                </div>
                <div class="col-sm-4 col-5">
                <label for="switcheryColor14" class="card-title success">Success Color Label &amp; Switchery</label>
                </div>
            </div>
            <div class="form-group row overflow-hidden mt-1">
                <div class="col-sm-4 col-5">
                <label for="switcheryColor13" class="card-title danger">Danger Color Label &amp; Switchery</label>
                </div>
                <div class="col-sm-4 col-2 text-center mb-1">
                <input type="checkbox" id="switcheryColor13" class="switchery" data-color="danger"
                checked/>
                </div>
                <div class="col-sm-4 col-5">
                <label for="switcheryColor13" class="card-title danger">Danger Color Label &amp; Switchery</label>
                </div>
            </div>
            <div class="form-group row overflow-hidden mt-1">
                <div class="col-sm-4 col-5">
                <label for="switcheryColor12" class="card-title info">Info Color Label &amp; Switchery</label>
                </div>
                <div class="col-sm-4 col-2 text-center mb-1">
                <input type="checkbox" id="switcheryColor12" class="switchery" data-color="info"
                checked/>
                </div>
                <div class="col-sm-4 col-5">
                <label for="switcheryColor12" class="card-title info">Info Color Label &amp; Switchery</label>
                </div>
            </div>
            <div class="form-group row mt-1">
                <div class="col-sm-4 col-5">
                <label for="switcheryColor11" class="card-title warning">Warning Color Label &amp; Switchery</label>
                </div>
                <div class="col-sm-4 col-2 text-center overflow-hidden mb-1">
                <input type="checkbox" id="switcheryColor11" class="switchery" data-color="warning"
                checked/>
                </div>
                <div class="col-sm-4 col-5">
                <label for="switcheryColor11" class="card-title warning">Warning Color Label &amp; Switchery</label>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Template Color Switchery end-->
@endsection

@section('scripts')
<script src="{{ asset('app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
<script>
/*=========================================================================================
    File Name: switch.js
    Description: Bootstrap switch and switchery are best switches with many options.
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
  'use strict';
  var $html = $('html');

    /*  Toggle Starts   */
    $('.switch:checkbox').checkboxpicker();
    $(".switchBootstrap").bootstrapSwitch();
    

    $('#switch12').checkboxpicker({
        html: true,
        offLabel: '<span class="icon-remove">',
        onLabel: '<span class="icon-ok">'
    });

    // Switchery
    var i = 0;
    if (Array.prototype.forEach) {

        var elems = $('.switchery');
        $.each( elems, function( key, value ) {
            var $size="", $color="",$sizeClass="", $colorCode="";
            $size = $(this).data('size');
            var $sizes ={
                'lg' : "large",
                'sm' : "small",
                'xs' : "xsmall"
            };
            if($(this).data('size')!== undefined){
                $sizeClass = "switchery switchery-"+$sizes[$size];
            }
            else{
                $sizeClass = "switchery";
            }

            $color = $(this).data('color');
            var $colors ={
                'primary' : "#967ADC",
                'success' : "#37BC9B",
                'danger' : "#DA4453",
                'warning' : "#F6BB42",
                'info' : "#3BAFDA"
            };
            if($color !== undefined){
                $colorCode = $colors[$color];
            }
            else{
                $colorCode = "#37BC9B";
            }

            var switchery = new Switchery($(this)[0], { className: $sizeClass, color: $colorCode });
        });
    } else {
        var elems1 = document.querySelectorAll('.switchery');

        for (i = 0; i < elems1.length; i++) {
            var $size = elems1[i].data('size');
            var $color = elems1[i].data('color');
            var switchery = new Switchery(elems1[i], { color: '#37BC9B' });
        }
    }
    /*  Toggle Ends   */

})(window, document, jQuery);
</script>
@endsection