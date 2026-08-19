        <section class="bg-light">
            <div class="container">

                @if (request()->filled('category') || request()->filled('tag'))
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 text-wrap">
                        <p class="mb-0">
                            Showing posts
                            @if (request()->filled('category'))
                                in <strong>{{ optional($categories->firstWhere('slug', request('category')))->name ?? request('category') }}</strong>
                            @endif
                            @if (request()->filled('tag'))
                                tagged <strong>{{ optional($tags->firstWhere('slug', request('tag')))->name ?? request('tag') }}</strong>
                            @endif
                        </p>
                        <a href="{{ route('blog') }}" class="btn-main btn-sm fx-slide"><span>Clear Filter</span></a>
                    </div>
                @endif

                <div class="row g-4">

                    @forelse ($blogs as $blog)
                        <div class="col-xl-3 col-lg-6">
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

                                <div class="pt-4 relative">
                                    <a href="{{ url($blog->slug) }}">
                                        <h3>{{ $blog->title }}</h3>
                                    </a>
                                    <p>{{ Str::limit(strip_tags($blog->description), 110) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <p class="mb-0">No blog posts available right now. Please check back soon.</p>
                        </div>
                    @endforelse

                </div>

                @if ($blogs->hasPages())
                    <div class="mt-5">
                        {{ $blogs->onEachSide(1)->links('vendor.pagination.blog') }}
                    </div>
                @endif
            </div>
        </section>

        <style>
            .pagination .page-link {
                width: 44px;
                height: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                border: none;
                background: transparent;
                color: var(--primary-color);
                padding: 0;
            }

            .pagination .page-item.active .page-link {
                background: var(--secondary-color);
                color: #fff;
            }

            .pagination .page-item:not(.disabled) .page-link:hover,
            .pagination .page-item:not(.disabled) .page-link:focus {
                background: var(--secondary-color);
                color: #fff;
                box-shadow: none;
            }

            .pagination .page-item.disabled .page-link {
                background: transparent;
                color: #ccc;
                box-shadow: none;
            }
        </style>
