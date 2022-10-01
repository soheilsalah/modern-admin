<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    @isset($title)
        {{ $title }}
    @else
        {{ config('app.name') }}
    @endisset
    </title>

    @include('includes.assets.styles')
    
</head>
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    
    <!-- fixed-top-->
    @include('user.includes.navs.navbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">2 Columns</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Page Layouts</a>
                            </li>
                            <li class="breadcrumb-item active">2 Columns
                            </li>
                        </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                    </div>
                </div>
            </div>

            <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
                <div class="main-menu-content">
                    @include('user.includes.navs.sidebar')
                    
                </div>
            </div>

            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    
    @include('includes.footer')

    @include('includes.assets.scripts')

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('036ef20ca6d3cb5435a7', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('user-channel-{{ Auth::user()->id }}');
        channel.bind('user-event-{{ Auth::user()->id }}', function(data) {
            var obj = JSON.parse(JSON.stringify(data));

            $("#notification-counter").text(obj.count);

            var html;

            html  = '<a href="javascript:void(0)">';
            html += '<div class="media">';
            html += '<div class="media-left align-self-center">';
            html += '<i class="ft-plus-square icon-bg-circle bg-cyan"></i>';
            html += '</div>';
            html += '<div class="media-body">';
            html += '<h6 class="media-heading">'+obj.message+'</h6>';
            html += '<p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>';
            html += '<small><time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{ Carbon\Carbon::now()->diffForHumans() }}</time></small>';
            html += '</div>';                       
            html += '</div>';                       
            html += '</a>';                       

            $("#notification-list").prepend(html);
        });
    </script>
</body>
</html>