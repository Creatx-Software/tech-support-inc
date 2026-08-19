        <section>
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8">

                        <div class="rounded-1 overflow-hidden mb-4 wow fadeInUp">
                            <img src="{{ $blog->image_url }}" class="w-100" style="max-height: 420px; object-fit: cover;" alt="{{ $blog->title }}">
                        </div>

                        <div class="d-flex flex-wrap gap-3 mb-4 text-muted text-wrap">
                            @if ($blog->author_name)
                                <span><i class="icofont-user"></i> {{ $blog->author_name }}</span>
                            @endif
                            @if ($blog->date)
                                <span><i class="icofont-calendar"></i> {{ $blog->date->format('d M, Y') }}</span>
                            @endif
                            @if ($blog->category)
                                <span><i class="icofont-tag"></i> {{ $blog->category->name }}</span>
                            @endif
                        </div>

                        <div class="blog-read">
                            {!! $blog->description !!}
                        </div>

                        @if ($blog->tags->isNotEmpty())
                            <div class="d-flex flex-wrap align-items-center gap-2 mt-4 text-wrap">
                                <strong class="me-1">Tags:</strong>
                                @foreach ($blog->tags as $tag)
                                    <a href="{{ route('blog', ['tag' => $tag->slug]) }}" class="btn-tag">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        @endif

                        <div class="p-4 bg-light rounded-3 mt-4">
                            <h3 class="fs-20">About Tech Support Inc</h3>
                            <p class="mb-0">
                                Tech Support Inc is a UK-based IT support company that helps small businesses with reliable
                                technology solutions and ongoing IT support. The company positions itself as a trusted IT
                                partner, providing support to help businesses keep their systems secure, connected, and running
                                smoothly.
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        @if ($categories->isNotEmpty())
                            <div class="widget widget_categories">
                                <h4>Categories</h4>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('blog', ['category' => $category->slug]) }}">
                                                {{ $category->name }} <span>({{ $category->blogs_count }})</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($relatedBlogs->isNotEmpty())
                            <div class="widget widget-post">
                                <h4>Related Posts</h4>
                                <div class="blog-related-post">
                                    @foreach ($relatedBlogs as $related)
                                        <div class="mb-4">
                                            <div class="overflow-hidden">
                                                <div class="hover relative">
                                                    <div class="abs z-2 bg-blur text-white p-3 pb-2 m-4 text-center fw-600 rounded-3">
                                                        <div class="fs-36 fw-bold lh-1">{{ $related->date?->format('d') ?? '--' }}</div>
                                                        <span>{{ $related->date?->format('M') ?? '' }}</span>
                                                    </div>
                                                    <div class="rounded-1 overflow-hidden">
                                                        <img src="{{ $related->image_url }}" class="w-100 h-200px hover-scale-1-1" style="object-fit: cover;" alt="{{ $related->title }}">
                                                    </div>
                                                    <a href="{{ url($related->slug) }}" class="d-block abs w-100 h-100 top-0 start-0"></a>
                                                </div>

                                                <div class="pt-4 relative">
                                                    <a href="{{ url($related->slug) }}">
                                                        <h3>{{ $related->title }}</h3>
                                                    </a>
                                                    <p>{{ Str::limit(strip_tags($related->description), 100) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if ($popularPosts->isNotEmpty())
                            <div class="widget widget-post">
                                <h4>Popular Posts</h4>
                                <div class="blog-related-post">
                                    @foreach ($popularPosts as $popular)
                                        <div class="mb-3">
                                            <a href="{{ url($popular->slug) }}" class="d-flex align-items-center text-dark text-wrap">
                                                <img src="{{ $popular->image_url }}" class="me-3 rounded-1" style="width: 60px; height: 60px; object-fit: cover;" alt="{{ $popular->title }}">
                                                <span>{{ $popular->title }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if ($allTags->isNotEmpty())
                            <div class="widget widget_tags">
                                <h4>Popular Tags</h4>
                                <ul>
                                    @foreach ($allTags as $tag)
                                        <li><a href="{{ route('blog', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
