        <section class="bg-color-op-1 rounded-1 mx-2">
            <div class="container">
                <div class="row g-4 gx-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Welcome</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Your Trusted IT Partner, Every Step of the Way</h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Welcome to Tech Support Inc, a UK-based IT support company built for small businesses. We provide reliable technology
                            solutions and ongoing support that keep your systems secure, connected, and running smoothly. From day-to-day helpdesk
                            requests to long-term IT strategy, every detail is handled with the care and responsiveness your business deserves.
                        </p>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="row">
                  <div class="col-md-12 text-center">
                      <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">View All</a></li>
                          @foreach ($galleryCategories as $category)
                              <li><a href="#" data-filter=".{{ $category['slug'] }}">{{ $category['name'] }}</a></li>
                          @endforeach
                      </ul>
                  </div>
                </div>

                <div id="gallery" class="row g-3 wow fadeIn" data-wow-delay=".3s">

                    @forelse ($featuredGalleries as $gallery)
                        <div class="col-md-3 col-sm-6 col-12 item {{ $gallery->category_slug }}">
                          <a href="{{ $gallery->image_url }}" class="image-popup d-block hover">
                              <div class="relative overflow-hidden rounded-1">
                                  <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-3 text-center text-white">View</div>
                                  <div class="absolute start-0 w-100 h-100 overlay-black-5 hover-op-1 z-2"></div>
                                  <img src="{{ $gallery->image_url }}" class="w-100 hover-scale-1-2" style="height: 280px; object-fit: cover;" alt="{{ $gallery->title }}">
                              </div>
                          </a>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">No featured gallery images to show yet.</p>
                        </div>
                    @endforelse

                    </div>
            </div>
        </section>
