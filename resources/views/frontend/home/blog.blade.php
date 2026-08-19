        <section>
            <div class="container">
                <div class="row g-4 mb-2 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="subtitle id-color wow fadeInUp">Our Blog</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">IT Insights &amp; Articles</h2>
                    </div>
                </div>

                <div class="row g-4">

                    @forelse ($featuredBlogs as $blog)
                        <div class="col-xl-3 col-lg-6">
                            <div class="h-100 d-flex flex-column text-wrap">
                                <div class="overflow-hidden">
                                    <div class="hover relative">
                                        <div class="abs z-2 bg-blur text-white p-3 pb-2 m-4 text-center fw-600 rounded-3">
                                            <div class="fs-36 fw-bold lh-1">{{ $blog->date?->format('d') ?? '--' }}</div>
                                            <span>{{ $blog->date?->format('M') ?? '' }}</span>
                                        </div>
                                        <div class="rounded-1 overflow-hidden">
                                            <img src="{{ $blog->image_url }}" class="w-100 h-250px hover-scale-1-1" style="object-fit: cover;" alt="{{ $blog->title }}">
                                        </div>
                                        <a href="{{ url($blog->slug) }}" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                    </div>
                                </div>

                                <div class="pt-4 relative flex-grow-1">
                                    <a href="{{ url($blog->slug) }}">
                                        <h3 class="fs-20">{{ Str::limit($blog->title, 55) }}</h3>
                                    </a>
                                    <p class="mb-0">{{ Str::limit(strip_tags($blog->description), 90) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <p class="mb-0">No featured blog posts available right now. Please check back soon.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
