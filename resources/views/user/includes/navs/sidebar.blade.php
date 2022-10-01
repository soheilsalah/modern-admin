<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="{{ isset($active) && $active == 'index' ? 'active' : null }}">
        <a class="menu-item" href="{{ route('index') }}">
            <i class="la la-home"></i>
            الصفحة الرئيسية
        </a>
    </li>
    

    <li class="nav-item">
        <a href="#"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.icons.main">الايقونات</span></a>
        <ul class="menu-content">
            <li class="{{ isset($active) && $active == 'feather-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('feather-icons') }}">Feather</a>
            </li>
            <li class="{{ isset($active) && $active == 'line-awesome-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('line-awesome-icons') }}">Line Awesome</a>
            </li>
            <li class="{{ isset($active) && $active == 'meteocons-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('meteocons-icons') }}">Meteocons</a>
            </li>
            <li class="{{ isset($active) && $active == 'simple-line-icons' ? 'active' : null }}">
                <a class="menu-item" href="{{ route('simple-line-icons') }}">Simple Line Icons</a>
            </li>
        </ul>
    </li>

    <li class="">
        <a class="menu-item" href="javascript:void(0);">
            <i class="la la-home"></i>
            قائمة منفردة
        </a>
    </li>

    <li class="nav-item">
        <a href="javascript:void(0);">
            <i class="la la-home"></i>
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
