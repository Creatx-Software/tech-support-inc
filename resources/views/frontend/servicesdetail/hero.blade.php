        <section class="jarallax text-light relative rounded-1 overflow-hidden mt-80 mt-sm-70 mx-2">
            <div class="de-gradient-edge-top"></div>
            <img src="/assets/images/about/pexels-ivan-s-7213547.jpg" class="jarallax-img" alt="">
            <div class="container relative z-2">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="subtitle id-color wow fadeInUp mb-2">Service Details</div>
                        <div class="clearfix"></div>
                        <h2 class="fs-60 fs-xs-8vw wow fadeInUp" data-wow-delay=".4s">{{ $service->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="crumb-wrapper">
                <ul class="crumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li class="active">{{ Str::limit($service->title, 10, '...') }}</li>
                </ul>
            </div>
            <div class="sw-overlay op-8"></div>
        </section>
