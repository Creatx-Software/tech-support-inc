        <section class="text-light jarallax mx-2 rounded-1 overflow-hidden">
            <img src="/assets/images/home/pexels-cottonbro-5185159.jpg" class="jarallax-img" alt="">
            <div class="sw-overlay op-6"></div>
            <div class="container relative z-2">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-5 text-center">
                        <h2 class="fs-96 mb-0">4.9</h2>
                        <span class="d-stars id-color d-block wow fadeInUp">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </span>
                        (300+ Reviews)
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-single-dots owl-carousel owl-theme">

                            @forelse ($testimonials as $testimonial)
                                <div class="item">
                                    <span class="d-stars id-color d-block mb-3">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="icofont-star" style="{{ $i <= round($testimonial->rating) ? '' : 'opacity: 0.3;' }}"></i>
                                        @endfor
                                    </span>
                                    <h3 class="mb-4 wow fadeInUp fs-40">{{ $testimonial->review }}</h3>
                                    <span class="wow fadeInUp">{{ $testimonial->name }}</span>
                                </div>
                            @empty
                                <div class="item">
                                    <p class="mb-0">No featured testimonials yet.</p>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </section>