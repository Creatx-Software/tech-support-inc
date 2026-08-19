

        <section class="relative">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="subtitle">Write a Message</div>
                    <h2 class="wow fadeInUp">Get In Touch</h2>

                    <p class="col-lg-8">Have a question, suggestion, or just want to say hi? We’re here and happy to hear from you!</p>

                    <div class="spacer-single"></div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-location-pin"></i>
                            <div class="ms-80px">
                                <h3 class="fs-20 mb-0">Address</h3>
                                Level 01, 39 Fitzroy Square, London W1T 6EZ
                            </div>
                        </div>

                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-envelope"></i>
                            <div class="ms-80px">
                                <h3 class="fs-20 mb-0">Email</h3>
                                info@techsupportinc.co.uk
                            </div>
                        </div>

                        <div class="col-md-6">
                            <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-phone"></i>
                            <div class="ms-80px">
                                <h3 class="fs-20 mb-0">Phone</h3>
                                +44 7459 425326
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="bg-color-op-1 rounded-1 p-40 relative">
                        <form name="contactForm" id="contact_form" method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h3 class="fs-18">Name</h3>
                                <input type="text" name="name" id="name" class="bg-white form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6">
                                <h3 class="fs-18">Email</h3>
                                <input type="text" name="email" id="email" class="bg-white form-control" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <h3 class="fs-18">Phone</h3>
                                <input type="text" name="phone" id="phone" class="bg-white form-control" placeholder="Your Phone" required>
                            </div>

                            <div class="col-md-12">
                                <h3 class="fs-18">Message</h3>
                                <textarea name="message" id="message" class="bg-white form-control h-100px" placeholder="Your Message" required></textarea>
                            </div>

                            <div class="col-md-12">
                                <div id='submit'>
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </div>
                        </div>
                            
                        
                        
                    </form>
                    </div>
                </div>
              </div>
            </div>
        </section>
        