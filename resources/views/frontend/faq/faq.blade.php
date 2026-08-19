        <section id="section-faq" aria-label="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mb-4">
                        <div class="subtitle id-color wow fadeInUp">FAQ</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Everything You Need to Know About Our IT Support
                        </h2>
                    </div>

                    <div class="col-lg-8">
                        <div class="accordion title-boxed wow fadeInUp">
                            <div class="accordion-section">

                                @foreach ($faqs as $faq)
                                    <div class="accordion-section-title" data-tab="#accordion-b{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b{{ $faq->id }}">
                                        <p class="mb-0">
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
