<!DOCTYPE html>
<html>
<head>
    <title>Solo | Freelancer Companion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    @include('theme_stylesheets')

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
<body class="animsition page-login-v2 layout-full page-dark">
	@yield('content')
	@include('theme_scripts')
</body>
</html>