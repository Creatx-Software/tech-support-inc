
        <section aria-label="section">
            <div class="container">
                <div class="row g-4">

                    @forelse ($testimonials as $testimonial)
                        <div class="col-lg-4">
                            <div class="bg-white rounded-1 p-30 h-100" style="display: flex; flex-direction: column;">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="circle me-3" alt="{{ $testimonial->name }}" src="{{ $testimonial->avatar_url }}" style="width: 40px; height: 40px; object-fit: cover; flex-shrink: 0;">
                                        <div class="mt-2">
                                            <div class="text-dark fw-bold lh-1">{{ $testimonial->name }}</div>
                                            @if ($testimonial->review_date)
                                                <small>{{ $testimonial->review_date->format('d F Y') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <img src="assets/images/misc/google-icon.svg" class="w-30px" alt="" style="height: 30px; object-fit: contain; flex-shrink: 0;">
                                </div>

                                <div class="de-rating-ext mb-2">
                                    <span class="d-stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa fa-star{{ $i <= round($testimonial->rating) ? '' : '-o' }}"></i>
                                        @endfor
                                    </span>
                                    <span class="ms-2 text-white">{{ number_format((float) $testimonial->rating, 1) }}</span>
                                </div>

                                <p class="mb-0" style="min-width: 0; white-space: normal; overflow-wrap: break-word;">
                                    "{{ $testimonial->review }}"
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">No testimonials to show yet.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
