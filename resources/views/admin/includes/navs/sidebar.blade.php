<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="nav-item {{ isset($active) && $active == 'index' ? 'active' : null }}">
        <a class="menu-item" href="{{ route('admin.index') }}">
            <i class="la la-home"></i>
            الصفحة الرئيسية
        </a>
    </li>
    

    <li class="nav-item">
        <a href="#"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.icons.main">الايقونات</span></a>
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

    <li class="nav-item {{ isset($active) && $active == 'pusher-notification' ? 'active' : null }}">
        <a class="menu-item" href="{{ route('admin.pusher-notification') }}">
            <i class="la la-bell-o"></i>
            اشعارات Pusher
        </a>
    </li>

    <li class="nav-item">
        <a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.icons.main">Datatables</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'datatables-api' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.datatables-api') }}">Datatables API</a>
            </li>

            <li class="{{ isset($active) && $active == 'datatables-ajax' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('admin.datatables-ajax') }}">Datatables AJAX</a>
            </li>
        </ul>
    </li>

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

    <li class="nav-item">
        <a class="menu-item" href="javascript:void(0);">
            <i class="la la-bars"></i>
            قائمة منفردة
        </a>
    </li>

    <li class="nav-item">
        <a href="javascript:void(0);">
            <i class="la la-database"></i>
            <span class="menu-title">قوائم فرعية</span>
            <span class="badge badge badge-info badge-pill float-right mr-2">3</span>
        </a>
        <ul class="menu-content">
            <li>
                <a class="menu-item" href="javascript:void(0);">قائمة فرعية 1</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:void(0);">قائمة فرعية 2</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:void(0);">قائمة فرعية 3</a>
            </li>
        </ul>
    </li>
</ul>
