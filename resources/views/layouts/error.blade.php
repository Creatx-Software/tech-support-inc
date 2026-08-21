<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Error') - Tech Support Inc</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/assets/images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="noindex, nofollow" name="robots">
    <!-- CSS Files
    ================================================== -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="/assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css">

</head>

<body style="min-height: 100vh; padding: 40px 0; display: flex; align-items: center;">

    <main class="w-100">
        <section class="text-center relative">
            <div class="container relative z-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">

                        @hasSection('code')
                            <h1 style="color: var(--primary-color); line-height: 1; font-weight: 700; font-size: clamp(64px, 18vw, 150px);">@yield('code')</h1>
                        @endif

                        <h2 class="mt-3" style="font-size: clamp(26px, 6vw, 40px);">@yield('heading', 'Something went wrong')</h2>

                        <p class="opacity-8 mt-3 mb-4" style="font-size: clamp(15px, 3.5vw, 18px);">
                            @yield('message', 'Sorry, we ran into a problem. Please try again or head back to the homepage.')
                        </p>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ route('home') }}" class="btn-main fx-slide"><span>Back to Home</span></a>
                            <a href="{{ route('contact') }}" class="btn-main btn-light-trans fx-slide"><span>Contact Support</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Javascript Files
    ================================================== -->
    <script src="/assets/js/vendors.js"></script>
    <script src="/assets/js/designesia.js"></script>

</body>

</html>
