<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <!-- Dashboard -->
    <li class="nav-item {{ isset($active) && $active == 'index' ? 'active' : null }}">
        <a class="menu-item" href="{{ route('admin.index') }}">
            <i class="la la-home"></i>
            Dashboard
        </a>
    </li>
    <!--/ Dashboard -->
    

    <!-- Icons -->
    <li class="nav-item">
        <a href="#"><i class="la la-eye"></i><span class="menu-title">Icons</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'feather-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.feather-icons') }}">Feather</a>
            </li>
            <li class="{{ isset($active) && $active == 'line-awesome-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.line-awesome-icons') }}">Line Awesome</a>
            </li>
            <li class="{{ isset($active) && $active == 'meteocons-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.meteocons-icons') }}">Meteocons</a>
            </li>
            <li class="{{ isset($active) && $active == 'simple-line-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.simple-line-icons') }}">Simple Line Icons</a>
            </li>
        </ul>
    </li>
    <!--/ Icons -->


    <!-- Pusher Notification -->
    <li class="nav-item {{ isset($active) && $active == 'pusher-notification' ? 'active' : null }}">
        <a class="menu-item" href="{{ route('admin.pusher-notification') }}">
            <i class="la la-bell-o"></i>
            Pusher Notifications
        </a>
    </li>
    <!--/ Pusher Notification -->
    

    <!-- Datatables -->
    <li class="nav-item">
        <a href="#"><i class="la la-table"></i><span class="menu-title">Datatables</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'datatables-api' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.datatables-api') }}">Datatables API</a>
            </li>

            <li class="{{ isset($active) && $active == 'datatables-ajax' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.datatables-ajax') }}">Datatables AJAX</a>
            </li>
        </ul>
    </li>
    <!--/ Datatables -->


    <!-- Forms -->
    <li class="nav-item">
        <a href="#"><i class="la la-eye"></i><span class="menu-title">Forms</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'forms.basic-layouts' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.forms.basic-layouts') }}">Basic Layout Form</a>
            </li>

            <li class="{{ isset($active) && $active == 'forms.bordered-layouts' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.forms.bordered-layouts') }}">Bordered Layout Form</a>
            </li>

            <li class="{{ isset($active) && $active == 'forms.wizard' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.forms.wizard') }}">Wizard Form</a>
            </li>
        </ul>
    </li>
    <!--/ Forms -->

    
    <!-- Inputs -->
    <li class="nav-item">
        <a href="#"><i class="la la-eye"></i><span class="menu-title">Inputs</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'inputs.radio-and-checkboxes' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.inputs.radio-and-checkboxes') }}">Radio & Checkboxes</a>
            </li>

            <li class="{{ isset($active) && $active == 'inputs.switch' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.inputs.switch') }}">Switch</a>
            </li>
            
            <li class="{{ isset($active) && $active == 'inputs.select2' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.inputs.select2') }}">Select2</a>
            </li>

            <li class="{{ isset($active) && $active == 'inputs.tags' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.inputs.tags') }}">Tags</a>
            </li>
        </ul>
    </li>
    <!--/ Inputs -->


    <!-- Components -->
    <li class="nav-item">
        <a href="javascript:void(0);">
            <i class="la la-diamond"></i>
            <span class="menu-title">Components</span>
        </a>
        <ul class="menu-content">
            <li class="nav-item {{ isset($active) && $active == 'sweet-alerts' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.sweet-alerts') }}">Sweet Alerts</a>
            </li>

            <li class="nav-item {{ isset($active) && $active == 'toastr' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.toastr') }}">Toastr</a>
            </li>
        </ul>
    </li>
    <!--/ Components -->


    <!-- Single Menu -->
    <li class="nav-item">
        <a class="menu-item" href="javascript:void(0);">
            <i class="la la-bars"></i>
            Single Menu
        </a>
    </li>
    <!--/ Single Menu -->


    <!-- Sub-menus -->
    <li class="nav-item">
        <a href="javascript:void(0);">
            <i class="la la-database"></i>
            <span class="menu-title">Submenus</span>
            <span class="badge badge badge-info badge-pill float-right mr-2">3</span>
        </a>
        <ul class="menu-content">
            <li>
                <a class="menu-item" href="javascript:void(0);">Submenu 1</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:void(0);">Submenu 2</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:void(0);">Submenu 3</a>
            </li>
        </ul>
    </li>
    <!--/ Sub-menus -->
</ul>
