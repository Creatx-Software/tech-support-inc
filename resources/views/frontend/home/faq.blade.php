        <section>
            <div class="container">
                <div class="row g-4 gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="subtitle id-color">FAQ</div>
                        <h2 class="wow fadeInUp">
                            Everything You Need to Know About Our IT Support
                        </h2>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion title-boxed wow fadeInUp">
                            <div class="accordion-section">

                                @foreach ($featuredFaqs as $faq)
                                    <div class="accordion-section-title" data-tab="#accordion-home-b{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-home-b{{ $faq->id }}">
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
