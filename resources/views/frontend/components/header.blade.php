    <header class="header-light transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('home') }}">
                                    <img class="logo-main" src="/assets/images/logo-black.webp" alt="" >
                                    <img class="logo-scroll" src="/assets/images/logo-black.webp" alt="" >
                                    <img class="logo-mobile" src="/assets/images/logo-black.webp" alt="" >
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>

                        <div class="de-flex-col">
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                                    <li><a class="menu-item" href="rooms.html">Rooms</a>
                                        <ul>
                                            <li><a class="menu-item" href="rooms.html">Rooms Default</a></li>
                                            <li><a class="menu-item new" href="rooms-interactive.html">Interactive</a></li>
                                            <li><a class="menu-item new" href="rooms-grid.html">Rooms Grid</a></li>
                                            <li><a class="menu-item" href="rooms-list.html">Rooms List</a></li>
                                            <li><a class="menu-item" href="rooms-split.html">Rooms Split</a></li>
                                            <li><a class="menu-item" href="rooms-slider.html">Rooms Slider</a></li>
                                            <li><a class="menu-item" href="room-single.html">Single Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('about') }}">About</a></li>

                                    <li><a class="menu-item" href="{{ route('blog') }}">Blog</a></li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                    <li><a class="menu-item" href="#">More</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('testimonial') }}">Testimonials</a></li>
                                            <li><a class="menu-item" href="facilities.html">Facilities</a></li>
                                            <li><a class="menu-item" href="offers.html">Offers</a></li>
                                            <li><a class="menu-item" href="gallery.html">Gallery</a></li>
                                            <li><a class="menu-item" href="gallery-carousel.html">Gallery Carousel</a></li>
                                            <li><a class="menu-item" href="testimonials.html">Testimonials</a></li>
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