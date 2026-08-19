        <section aria-label="section">
            <div class="container">
                <div class="row g-4 mb-2 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Short Overview</div>
                        <p class="fs-20 mb-0 wow fadeInUp" data-wow-delay=".2s">
                            {{ $service->short_description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8">

                        <div class="rounded-1 overflow-hidden mb-4 wow fadeInUp">
                            <img src="{{ $service->image_url }}" class="w-100" style="max-height: 420px; object-fit: cover;" alt="{{ $service->title }}">
                        </div>

                        <div class="blog-read">
                            <h3 class="fs-24">About This Service</h3>
                            {!! $service->long_description !!}
                        </div>

                        @if (! empty($service->includes))
                            <div class="mt-4">
                                <h3 class="fs-24 mb-3">What's Included</h3>
                                <div class="row g-3">
                                    @foreach ($service->includes as $point)
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-start text-wrap">
                                                <i class="icofont-check-circled id-color fs-20 me-2 mt-1"></i>
                                                <span>{{ $point }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="p-4 bg-light rounded-3 mt-4">
                            <h3 class="fs-20">About Tech Support Inc</h3>
                            <p class="mb-0">
                                Tech Support Inc is a UK-based IT support company that helps small businesses with reliable
                                technology solutions and ongoing IT support. We position ourselves as a trusted IT
                                partner, providing support to help businesses keep their systems secure, connected, and running
                                smoothly.
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="widget widget-post">
                            <h4>Explore Other Services</h4>
                            <div class="blog-related-post">
                                @foreach ($otherServices as $otherService)
                                    <div class="mb-3">
                                        <a href="{{ url($otherService->slug) }}" class="d-flex align-items-center text-dark text-wrap">
                                            <img src="{{ $otherService->icon_url }}" class="me-3" style="width: 24px; height: 24px; object-fit: contain;" alt="{{ $otherService->title }}">
                                            <span>{{ $otherService->title }}</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget bg-dark-2 text-light rounded-1 p-30 mt-4">
                            <h4 class="text-white">Need This Service?</h4>
                            <p>
                                Talk to our team today and get a fast, no-obligation quote tailored to your business.
                            </p>
                            <a href="{{ route('contact') }}" class="btn-main fx-slide hover-white w-100 text-center"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


