        <section id="section-services-intro" aria-label="section">
            <div class="container">
                <div class="row g-4 mb-1 justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">What We Offer</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">IT Support Built Around Your Business</h2>
                        <p class="cwow fadeInUp" data-wow-delay=".4s">
                            From day-to-day helpdesk requests to full IT management, we give small businesses a reliable technology partner, covering everything from security to support.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-services-list" class="bg-light pt-0" aria-label="section">
            <div class="container">
                <div class="row g-4">

                    @forelse ($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="p-40 bg-white rounded-1 h-100 hover wow fadeInUp d-flex flex-column text-wrap" data-wow-delay=".{{ $loop->iteration % 6 }}s">
                                <img src="{{ $service->icon_url }}" class="fs-40 id-color mb-3" style="width: 48px; height: 48px; object-fit: contain;" alt="{{ $service->title }}">
                                <h3 class="mb-2">{{ $service->title }}</h3>
                                <p class="mb-3">
                                    {{ $service->short_description }}
                                </p>
                                <a href="{{ url($service->slug) }}" class="mt-auto id-color fw-600 text-decoration-none">View More Details <i class="icofont-simple-right"></i></a>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <p class="mb-0">No services available right now. Please check back soon.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
