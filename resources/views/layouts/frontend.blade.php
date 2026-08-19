<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tech Support Inc - Reliable IT Support for UK Small Businesses</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/assets/images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Tech Support Inc is a UK-based IT support company helping small businesses stay secure, connected, and running smoothly with reliable IT support and technology solutions." name="description" >
    <meta content="IT support, managed IT services, cybersecurity, UK small business IT, helpdesk support, cloud backup" name="keywords" >
    <meta content="Tech Support Inc" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="/assets/css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="/assets/css/swiper-custom-1.css" rel="stylesheet" type="text/css" >
    <link href="/assets/css/daterangepicker.css" rel="stylesheet" type="text/css" >
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" >
    <link href="/assets/css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="/assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>

<body>

        <!-- header begin -->
        @include('frontend.components.header')
        <!-- header close -->

    <main>
        <a href="#" id="back-to-top"></a>
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->
        
        @yield('content')

    </main>
    
    @include('frontend.components.footer')

    <!-- Javascript Files
    ================================================== -->
    <script src="/assets/js/vendors.js"></script>
    <script src="/assets/js/designesia.js"></script>

    <!-- swiper slider -->
    <script src="/assets/js/swiper.js"></script>
    <script src="/assets/js/custom-swiper-1.js"></script>

    <!-- form -->
    <script src="/assets/js/moment.js"></script>
    <script src="/assets/js/daterangepicker.js"></script>
    <script src="/assets/js/custom-datepicker.js"></script>

    <!-- contact form -->
    <script src="/assets/js/validation-contact.js"></script>

</body>

</html>