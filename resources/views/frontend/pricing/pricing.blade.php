        <section id="section-pricing" aria-label="section">
            <div class="container">

                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <div class="subtitle id-color wow fadeInUp">Support Plans</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Choose the Right Level of IT Support for Your Business</h2>
                        <p class="wow fadeInUp mb-0" data-wow-delay=".4s">
                            From one-off fixes to fully managed IT, pick a plan that fits how your business works today - and scale up whenever you're ready.
                        </p>
                    </div>
                </div>

                <div class="row g-4 align-items-stretch">

                    @forelse ($plans as $plan)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                            @if ($plan->is_popular)
                                <div class="h-100 d-flex flex-column text-wrap bg-dark-2 text-light rounded-1 soft-shadow p-40 relative overflow-hidden">
                                    <div class="abs top-0 end-0 bg-color text-white fs-12 fw-600 text-uppercase px-3 py-2 rounded-bl-1" style="border-radius: 0 0 0 8px;">Most Popular</div>
                                    <div class="d-inline-block bg-white bg-opacity-10 id-color fs-12 fw-600 text-uppercase px-3 py-1 rounded-pill mb-3 align-self-start">{{ $plan->badge }}</div>
                                    <h3 class="fs-24 mb-1 text-white">{{ $plan->title }}</h3>
                                    <div class="d-flex align-items-end text-wrap mb-1">
                                        <span class="fs-40 fw-bold id-color lh-1">{{ $plan->price_label }}</span>
                                        @if ($plan->price_period)
                                            <span class="fs-14 op-7 ms-2 mb-1">{{ $plan->price_period }}</span>
                                        @endif
                                    </div>
                                    <div class="fs-14 op-7 mb-3">&nbsp;</div>
                                    <p class="fs-14 op-7 mb-4 pb-3 border-bottom border-light border-opacity-25">{{ $plan->description }}</p>

                                    <div class="mb-4 flex-grow-1">
                                        @foreach ($plan->features ?? [] as $feature)
                                            <div class="d-flex align-items-start text-wrap mb-2 {{ empty($feature['included']) ? 'op-5' : '' }}">
                                                <i class="{{ empty($feature['included']) ? 'icofont-close-circled' : 'icofont-check-circled id-color' }} fs-18 me-2 mt-1"></i>
                                                <span class="fs-14">{{ $feature['text'] ?? '' }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <a href="{{ route('contact') }}" class="btn-main fx-slide btn-white w-100 text-center"><span>Get Started</span></a>
                                </div>
                            @else
                                <div class="h-100 d-flex flex-column text-wrap bg-white rounded-1 soft-shadow p-40">
                                    <div class="d-inline-block bg-color-op-1 id-color fs-12 fw-600 text-uppercase px-3 py-1 rounded-pill mb-3 align-self-start">{{ $plan->badge }}</div>
                                    <h3 class="fs-24 mb-1">{{ $plan->title }}</h3>
                                    @if ($plan->price_amount !== null)
                                        <div class="d-flex align-items-end text-wrap mb-1">
                                            <span class="fs-40 fw-bold id-color lh-1">{{ $plan->price_label }}</span>
                                            @if ($plan->price_period)
                                                <span class="fs-14 op-7 ms-2 mb-1">{{ $plan->price_period }}</span>
                                            @endif
                                        </div>
                                        <div class="fs-14 op-7 mb-3">&nbsp;</div>
                                    @else
                                        <div class="fs-24 fw-bold id-color mb-1">{{ $plan->price_label }}</div>
                                        <div class="fs-14 op-7 mb-3">{{ $plan->price_period }}</div>
                                    @endif
                                    <p class="fs-14 op-7 mb-4 pb-3 border-bottom">{{ $plan->description }}</p>

                                    <div class="mb-4 flex-grow-1">
                                        @foreach ($plan->features ?? [] as $feature)
                                            <div class="d-flex align-items-start text-wrap mb-2 {{ empty($feature['included']) ? 'op-5' : '' }}">
                                                <i class="{{ empty($feature['included']) ? 'icofont-close-circled' : 'icofont-check-circled id-color' }} fs-18 me-2 mt-1"></i>
                                                <span class="fs-14">{{ $feature['text'] ?? '' }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <a href="{{ route('contact') }}" class="btn-main fx-slide btn-light-trans w-100 text-center"><span>Get Started</span></a>
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="mb-0">Pricing plans will be available soon.</p>
                        </div>
                    @endforelse

                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8 text-center wow fadeInUp">
                        <p class="mb-0">
                            Not sure which plan fits your business? <a href="{{ route('contact') }}" class="id-color fw-600">Get in touch</a> for a free consultation and a tailored quote.
                        </p>
                    </div>
                </div>

            </div>
        </section>
