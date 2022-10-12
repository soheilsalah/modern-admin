<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach (navbarMenus() as $navbarMenu => $key)
                @if(isset($key['pages']) && is_array($key['pages']))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $navbarMenu }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($key['pages'] as $page => $pageKey)
                        <li><a class="dropdown-item {{ isset($pageKey['active']) && isset($active) && $pageKey['active'] == $active ? 'active' : null }}" href="{{ isset($pageKey['route']) ? route($pageKey['route']) : 'javascript:void();' }}">{{ $page }}</a></li>
                    @endforeach
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ isset($key['active']) && isset($active) && $key['active'] == $active ? 'active' : null }}" aria-current="page" href="{{ isset($key['route']) ? route($key['route']) : 'javascript:void();' }}">{{ $navbarMenu }}</a>
                </li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</nav>