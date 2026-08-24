<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Basic Page Needs --}}
    <meta charset="utf-8">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Dynamic Title --}}
    <title>@yield('title', 'Tech Support Inc | IT Support & Managed IT Services for UK Small Businesses in London')</title>

    {{-- Basic Meta Tags --}}
    <meta name="author" content="Tech Support Inc">
    <meta name="description" content="@yield('meta_description', 'Tech Support Inc delivers reliable IT support, managed IT services, cybersecurity, cloud and Microsoft 365 solutions for UK small businesses. Over a decade of experience with a 24/7 helpdesk. Call +44 7459 425326.')">
    <meta name="keywords" content="@yield('meta_keywords', 'IT support London, managed IT services UK, IT support for small business, cybersecurity services UK, cloud services UK, Microsoft 365 support, IT consultancy London, network management, IT helpdesk support, data backup and recovery, hardware support, virtualization, IT support UK small business')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Tech Support Inc | IT Support & Managed IT Services for UK Small Businesses in London')">
    <meta property="og:description" content="@yield('og_description', 'Tech Support Inc delivers reliable IT support, managed IT services, cybersecurity, cloud and Microsoft 365 solutions for UK small businesses. Over a decade of experience with a 24/7 helpdesk.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo/og_image.webp'))">
    <meta property="og:image:secure_url" content="@yield('og_image', asset('assets/images/logo/og_image.webp'))">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="@yield('og_title', 'Tech Support Inc - IT Support for UK Small Businesses')">
    <meta property="og:site_name" content="Tech Support Inc">
    <meta property="og:locale" content="en_GB">

    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Tech Support Inc | IT Support & Managed IT Services for UK Small Businesses in London')">
    <meta name="twitter:description" content="@yield('og_description', 'Tech Support Inc delivers reliable IT support, managed IT services, cybersecurity, cloud and Microsoft 365 solutions for UK small businesses. Over a decade of experience with a 24/7 helpdesk.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo/og_image.webp'))">
    <meta name="twitter:image:alt" content="@yield('og_title', 'Tech Support Inc - IT Support for UK Small Businesses')">

    {{-- Favicon --}}
    <link rel="icon" href="/assets/images/logo/favicon.webp" type="image/webp" sizes="16x16">

    {{-- Theme Color --}}
    <meta name="theme-color" content="#CAA05C">

    {{-- Schema.org Markup for Local Business --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ProfessionalService",
        "@@id": "{{ url('/') }}#business",
        "name": "Tech Support Inc",
        "description": "Tech Support Inc is a London-based IT support company with over a decade of experience, providing tailored IT infrastructure, managed IT services, cybersecurity, cloud and Microsoft 365 solutions mainly for UK small businesses.",
        "url": "{{ url('/') }}",
        "telephone": "+447459425326",
        "email": "info@techsupportinc.co.uk",
        "priceRange": "$$",
        "image": "{{ asset('assets/images/logo/og_image.webp') }}",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('assets/images/logo/563456436734.webp') }}"
        },
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Level 01, 39 Fitzroy Square",
            "addressLocality": "London",
            "postalCode": "W1T 6EZ",
            "addressCountry": "GB"
        },
        "openingHoursSpecification": [
            {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
                "opens": "09:00",
                "closes": "22:00"
            }
        ],
        "areaServed": {
            "@@type": "Country",
            "name": "United Kingdom"
        }
    }
    </script>

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

    @stack('styles')

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

    @stack('scripts')

</body>

</html>