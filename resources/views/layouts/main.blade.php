<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Colegio Heidy</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta content="Metronic Shop UI description" name="description">
<meta content="Metronic Shop UI keywords" name="keywords">
<meta content="keenthemes" name="author">

<meta property="og:site_name" content="-CUSTOMER VALUE-">
<meta property="og:title" content="-CUSTOMER VALUE-">
<meta property="og:description" content="-CUSTOMER VALUE-">
<meta property="og:type" content="website">
<meta property="og:image" content="-CUSTOMER VALUE-">
<meta property="og:url" content="-CUSTOMER VALUE-">

<link rel="shortcut icon" href="favicon.ico">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class="menu-always-on-top">
   
    @include('layouts.header')
    
        @yield('content')
    
      @include('layouts.footer')

    <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
    
</body>
<script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
</html>