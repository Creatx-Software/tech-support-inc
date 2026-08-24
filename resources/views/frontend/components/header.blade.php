    <header class="header-light transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('home') }}">
                                    <img class="logo-main" src="/assets/images/logo/563456436734.webp" alt="" >
                                    <img class="logo-scroll" src="/assets/images/logo/563456436734.webp" alt="" >
                                    <img class="logo-mobile" src="/assets/images/logo/563456436734.webp" alt="" >
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>

                        <div class="de-flex-col">
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                                    <li><a class="menu-item" href="{{ route('services') }}">Services</a>
                                        <ul>
                                            @foreach ($navFeaturedServices as $navService)
                                                <li><a class="menu-item" href="{{ url($navService->slug) }}">{{ $navService->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('about') }}">About</a></li>

                                    <li><a class="menu-item" href="{{ route('pricing') }}">Plans & Pricing</a></li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                    <li><a class="menu-item" href="#">More</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('blog') }}">Blog</a></li>
                                            <li><a class="menu-item" href="{{ route('testimonial') }}">Testimonials</a></li>
                                            <li><a class="menu-item" href="{{ route('gallery') }}">Gallery</a></li>
                                            <li><a class="menu-item" href="{{ route('faq') }}">FAQ</a></li>
                                            <li><a class="menu-item" href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                                            <li><a class="menu-item" href="{{ route('privacy') }}">Privacy Policy</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="de-flex-col">
                            <div class="menu_side_area">
                                <a href="{{ route('contact') }}" class="btn-main fx-slide hover-white"><span>Contact</span></a>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>