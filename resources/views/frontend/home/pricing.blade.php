        <section class="bg-color-op-1 rounded-1 mx-2">
            <div class="container">
                <div class="row g-4 mb-2 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="subtitle id-color wow fadeInUp">Support Plans</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Latest Support Offers</h2>
                    </div>
                </div>

                <div class="row g-4">

                    @forelse ($featuredPlans as $plan)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                            <div class="overflow-hidden rounded-1">
                                @if ($loop->index % 2 === 1)
                                    <div class="p-40 bg-dark-2 text-light relative">
                                        <a class="text-white" href="{{ route('pricing') }}">
                                            <h3>{{ $plan->title }}</h3>
                                            <p>{{ $plan->description }}</p>
                                        </a>
                                    </div>
                                @endif

                                <div class="hover relative">
                                    @if ($plan->badge)
                                        <h3 class="abs bg-color rounded-3 text-white fs-20 lh-1 p-2 px-3 m-4 {{ $loop->index % 2 === 1 ? 'bottom-0' : 'top-0' }} start-0 z-3 text-uppercase">{{ $plan->badge }}</h3>
                                    @endif
                                    <img src="{{ $plan->image_url }}" class="w-100 hover-scale-1-1" style="height: 480px; object-fit: cover;" alt="{{ $plan->title }}">
                                    <a href="{{ route('pricing') }}" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                </div>

                                @if ($loop->index % 2 === 0)
                                    <div class="p-40 bg-dark-2 text-light relative">
                                        <a class="text-white" href="{{ route('pricing') }}">
                                            <h3>{{ $plan->title }}</h3>
                                            <p>{{ $plan->description }}</p>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <p class="mb-0">No featured plans available right now.</p>
                        </div>
                    @endforelse

                </div>

            </div>
        </section>
