

        <section id="section-gallery" class="bg-light" aria-label="section">
            <div class="container">

              <div class="row">
                  <div class="col-md-12 text-center">
                      <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">View All</a></li>
                          @foreach ($categories as $category)
                              <li><a href="#" data-filter=".{{ $category['slug'] }}">{{ $category['name'] }}</a></li>
                          @endforeach
                      </ul>
                  </div>
              </div>

              <div id="gallery" class="row g-3 wow fadeIn" data-wow-delay=".3s">

                  @forelse ($galleries as $gallery)
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
                          <p class="text-center">No gallery images to show yet.</p>
                      </div>
                  @endforelse

              </div>



            </div>
        </section>
