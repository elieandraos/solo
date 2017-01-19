<!DOCTYPE html>
<html>
<head>
    <title>Solo | The Freelancer Companion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- stylesheets -->
    @include('theme_stylesheets')
    <link rel="stylesheet" type="text/css" href="/css/custom/app.css" />
    @yield('stylesheets')

    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,500,300italic'>

    <style>
        .invalid { color: #f96868; }
    </style>

    <script src="/js/vendor/breakpoints.min.js"></script>
    <script>
    	Breakpoints();
    </script>
</head>

<?php /* {!! Ekko::areActiveRoutes(['merchant.shop.*', 'merchant.shop.*.*']) !!} */ ?>
<body class="animsition site-navbar-small">
    @include('app.navigation.index')
	
    <div class="page">
        <div class="page-content">
            @yield('content')
        </div>
    </div>

    <!-- Emmpty modal initialized -->
    <div id="bootstrap-modal" class="modal fade" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modal-title"></h4>
                </div>
                <div class="modal-body">
                    
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-form" data-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>
    
	@include('theme_scripts')
    @yield('scripts')
</body>
</html>