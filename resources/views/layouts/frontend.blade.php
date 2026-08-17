<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2VCT23PGD6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2VCT23PGD6');
    </script>

    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '946182625169331');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1"
        src="https://www.facebook.com/tr?id=946182625169331&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts (async — non-blocking) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Salsa&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap"></noscript>

    <!-- Preload LCP hero image — must match the exact src used in hero.blade.php -->
    @if(request()->routeIs('home') || request()->is('/'))
    <link rel="preload" as="image" href="{{ asset('assets/images/hero/picture_3 (1)-compressed.webp') }}" fetchpriority="high">
    @endif

    {{-- Dynamic Title --}}
    <title>@yield('title', 'Aromat - Natural & Organic Baby Food in Sri Lanka')</title>

    {{-- Basic Meta Tags --}}
    <meta name="author" content="Aromat">
    <meta name="description" content="@yield('meta_description', 'Aromat is Sri Lanka&#39;s trusted baby food brand offering safe, nutritious, and affordable natural &amp; organic food for babies from 6 months onward. Shop baby cereals, purees, puffs, biscuits, and more.')">
    <meta name="keywords" content="@yield('meta_keywords', 'baby food Sri Lanka, children food Sri Lanka, kids food Sri Lanka, toddler food Sri Lanka, organic baby food, natural baby food, infant food Sri Lanka, baby cereal Sri Lanka, baby purees, weaning food Sri Lanka, buy baby food online Sri Lanka, baby food delivery Sri Lanka, 6 month baby food, baby snacks Sri Lanka, baby biscuits, baby puffs, baby yogurt, Aromat baby food, healthy baby food, baby nutrition Sri Lanka')">
    <meta name="robots" content="INDEX,FOLLOW">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('title', 'Aromat — Natural & Organic Baby Food in Sri Lanka')">
    <meta property="og:description" content="@yield('meta_description', 'Aromat is Sri Lanka&#39;s trusted baby food brand offering safe, nutritious, and affordable natural &amp; organic food for babies from 6 months onward.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo/og_image_2.webp'))">
    <meta property="og:image:secure_url" content="@yield('og_image', asset('assets/images/logo/og_image_2.webp'))">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="@yield('title', 'Aromat — Natural & Organic Baby Food in Sri Lanka')">
    <meta property="og:site_name" content="Aromat">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Aromat — Natural & Organic Baby Food in Sri Lanka')">
    <meta name="twitter:description" content="@yield('meta_description', 'Aromat is Sri Lanka&#39;s trusted baby food brand offering safe, nutritious, and affordable natural &amp; organic food for babies from 6 months onward.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo/og_image_2.webp'))">
    <meta name="twitter:image:alt" content="@yield('title', 'Aromat — Natural & Organic Baby Food in Sri Lanka')">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Window Tab Color -->
    <meta name="theme-color" content="#4a7c3f">
    <meta name="msapplication-navbutton-color" content="#4a7c3f">
    <meta name="apple-mobile-web-app-status-bar-style" content="#4a7c3f">

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo/favicon_icon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/favicon_icon/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/favicon_icon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/logo/favicon_icon/site.webmanifest') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/logo/favicon_icon/favicon-32x32.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">

    {{-- Schema.org Markup for Local Business --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": ["LocalBusiness", "Store"],
        "@@id": "{{ url('/') }}#business",
        "name": "Aromat",
        "description": "Sri Lanka's trusted natural and organic baby food brand offering safe, nutritious, and affordable food for babies from 6 months onward.",
        "url": "{{ url('/') }}",
        "telephone": "+94743388370",
        "email": "shop@aromat.lk",
        "priceRange": "LKR",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('assets/images/logo/icons_img.webp') }}",
            "width": 200,
            "height": 80
        },
        "image": {
            "@@type": "ImageObject",
            "url": "{{ asset('assets/images/logo/og_image_2.webp') }}",
            "width": 1200,
            "height": 630
        },
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "No 51/B Wetara",
            "addressLocality": "Polgasowita",
            "addressRegion": "Western Province",
            "addressCountry": "LK"
        },
        "openingHoursSpecification": [
            {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
                "opens": "09:00",
                "closes": "18:00"
            },
            {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "09:00",
                "closes": "13:00"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/AromatSriLanka",
            "https://www.instagram.com/aromat_lk"
        ]
    }
    </script>

    <!-- CSS deferred — preloader covers unstyled content while these download in parallel -->
    <link rel="preload" as="style" href="assets/css/bootstrap.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/bootstrap.css"></noscript>
    <link rel="preload" as="style" href="assets/css/owl.carousel.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/owl.carousel.css"></noscript>
    <link rel="preload" as="style" href="assets/css/shortcodes.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/shortcodes.css"></noscript>
    <link rel="preload" as="style" href="assets/css/style.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/style.css"></noscript>
    <link rel="preload" as="style" href="assets/css/responsive.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/responsive.css"></noscript>

    <!-- Deferred CSS — header uses inline SVGs so FA icons are never needed for initial paint -->
    <link rel="preload" as="style" href="assets/css/font-awesome.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/font-awesome.css"></noscript>

    <!-- animate.css is scroll-animation only — safe to load async -->
    <link rel="preload" as="style" href="assets/css/animate.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/animate.css"></noscript>

    @stack('styles')

    <!-- Critical CSS: renders the preloader before any external stylesheet loads -->
    <style>
        .preload{width:100%;height:100%;background:#fff;position:fixed;top:0;bottom:0;right:0;left:0;z-index:99999999999;display:flex;align-items:center;justify-content:center;overflow:hidden}
        .preload-logo{width:clamp(120px,20vw,220px);height:clamp(120px,20vw,220px);background-image:url('{{ asset('assets/images/logo/Logo_01.webp') }}');background-repeat:no-repeat;background-position:center;background-size:contain;animation:bounce 1.5s linear infinite}
        @keyframes bounce{from,20%,53%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1);transform:translate3d(0,0,0)}40%,43%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-30px,0)}70%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-15px,0)}90%{transform:translate3d(0,-4px,0)}}
    </style>

    <style>
        /* Header icon colors */
        .home2     .header-icon-btn { color: #4a7c3f !important; } /* home page (white header) â†’ navy */
        .inner-page .header-icon-btn { color: #ffffff !important; } /* other pages (dark header) â†’ white */
        /* Scrolled fixed header (white bg) â†’ always navy */
        #site-header.is-fixed .header-icon-btn { color: #4a7c3f !important; }
        /* Also force the SVG stroke directly */
        .home2     .header-icon-btn svg { stroke: #4a7c3f !important; }
        .inner-page .header-icon-btn svg { stroke: #ffffff !important; }
        #site-header.is-fixed .header-icon-btn svg { stroke: #4a7c3f !important; }
        /* Active page icon â†’ --primary-color3 (#f5c518) */
        .header-icon-btn.active,
        .header-icon-btn.active svg { color: var(--primary-color3) !important; stroke: var(--primary-color3) !important; }

        /* Inner pages: logo and phone icon are green on green hero — invert to white until header is fixed */
        .inner-page #site-header:not(.is-fixed) .logo-main,
        .inner-page #site-header:not(.is-fixed) .header-contact svg {
            filter: brightness(0) invert(1) !important;
        }

        /* Mobile: shift header-right left to avoid overlapping the hamburger button (20px wide at right:15px) */
        @@media only screen and (max-width: 991px) {
            .header-right { right: 45px !important; }
        }
        html { scroll-behavior: smooth; }
    </style>

</head>

<body class="counter-scroll header-fixed @yield('body-class', 'home2')">

    <!-- Preloader -->
    <div id="preload" class="preload">
        <div class="preload-logo"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="top-bar">
                <div class="inner jus-ct">
                    <p class="clr-pri-1">Working Hours : Mon - Sat, 09:00 am - 06:00 pm</p>
                </div>
            </div>

            <!-- header begin -->
            @include('frontend.components.header')
            <!-- header close -->

            @yield('content')

            <!-- footer begin -->
            @include('frontend.components.footer')
            <!-- footer close -->

    </div>
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/countto.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Toast Alert System -->
    <div id="aromat-toast-container" style="
        position: fixed;
        bottom: 28px;
        right: 28px;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        gap: 10px;
        pointer-events: none;
    "></div>

    <style>
    .aromat-toast {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 13px 18px;
        border-radius: 12px;
        font-family: 'Mulish', sans-serif;
        font-size: 13px;
        font-weight: 700;
        color: #666;
        background: #fff;
        border: 1.5px solid #ddd;
        box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        pointer-events: all;
        opacity: 0;
        transform: translateY(12px);
        transition: opacity .28s ease, transform .28s ease;
        min-width: 220px;
        max-width: 320px;
    }
    .aromat-toast.show { opacity: 1; transform: translateY(0); }
    .aromat-toast.hide { opacity: 0; transform: translateY(12px); }
    .aromat-toast__icon { font-size: 16px; flex-shrink: 0; color: #aaa; }
    .aromat-toast__msg  { flex: 1; }
    </style>

    <script>
    function showToast(message, type) {
        type = type || 'cart';
        var icons = { cart: '&#128722;', wishlist: '&#10084;', error: '&#9888;' };
        var container = document.getElementById('aromat-toast-container');
        var toast = document.createElement('div');
        toast.className = 'aromat-toast aromat-toast--' + type;
        toast.innerHTML =
            '<span class="aromat-toast__icon">' + (icons[type] || icons.cart) + '</span>' +
            '<span class="aromat-toast__msg">' + message + '</span>';
        container.appendChild(toast);
        requestAnimationFrame(function () {
            requestAnimationFrame(function () { toast.classList.add('show'); });
        });
        setTimeout(function () {
            toast.classList.add('hide');
            toast.classList.remove('show');
            setTimeout(function () { toast.remove(); }, 320);
        }, 3000);
    }

    // Global header badge updaters
    window.updateCartBadge = function (count) {
        var b = document.getElementById('cart-count-badge');
        if (!b) return;
        b.textContent = count;
        b.style.display = count > 0 ? 'flex' : 'none';
    };
    window.updateWishlistBadge = function (count) {
        var b = document.getElementById('wishlist-count-badge');
        if (!b) return;
        b.textContent = count;
        b.style.display = count > 0 ? 'flex' : 'none';
    };
    </script>

    @stack('scripts')
</body>

</html>
