<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An Unlimited WordPress News & Magazine Theme with WooCommerce Support">
    <meta name="keywords" content="magazine template, news template">
    <meta name="author" content="themejunkie">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('supernews/style.css') }}"/>   
    <link rel="stylesheet" href="{{ asset('supernews/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('supernews/css/prettyPhoto.css') }}"/> 
    <link rel="stylesheet" href="{{ asset('supernews/css/colors/default.css') }}"/>
    <link rel="stylesheet" href="{{ asset('supernews/css/responsive.css') }}"/>

    <!-- Favicon -->
    <link type="image/x-icon" href="{{ asset('supernews/images/favicon.png') }}" rel="shortcut icon">

</head>

<body class="woocommerce woocommcer-page layout-narrow layout-1c">

    <!-- Page / Start -->   
    <div id="page" class="hfeed site clearfix">

        @include('layouts.home.header')         

        @yield('content')
        
        @include('layouts.home.footer') 

    </div>
    <!-- Page / End -->

    <!-- JavaScripts -->
    <script src="{{ asset('supernews/js/jquery.js') }}"></script>
    <script src="{{ asset('supernews/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('supernews/js/jquery.matchHeight.js') }}"></script>     
    <script src="{{ asset('supernews/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('supernews/js/superfish.js') }}"></script>  
    <script src="{{ asset('supernews/js/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('supernews/js/jquery.sidr.min.js') }}"></script>
    <script src="{{ asset('supernews/js/retina.js') }}"></script>
    <script src="{{ asset('supernews/js/jquery.sticky.js') }}"></script>
    <script src='{{ asset('supernews/js/jquery.prettyPhoto.js') }}'></script>
    <script src="{{ asset('supernews/js/jquery.custom.js') }}"></script>

</body>
</html>
