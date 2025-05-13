<div>
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Connect with us</h2>
        <p class="fs-5">Let us help you overshoot your goals in the right ways</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6 ">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <a href="https://maps.app.goo.gl/NZXNxGQJnUT6e7Mr9" target="_blank">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p class="text-center">4th Floor, Suite 8, Murtala House, <br>No 37 Murtala Mohammed way, Jos, Nigeria</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Info Item -->
                    <div class="col-md-6">
                        <a href="tel:+2348033454222">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+234 803 345 4222</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Info Item -->
                    <div class="col-md-6">
                        <a href="mailto:contact@dankisha.com">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>contact@dankisha.com</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>

            <div class="col-lg-6">
                <form wire:submit="store" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" wire:model="name" class="form-control" placeholder="Your Name" required="">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" wire:model="email" placeholder="Your Email" required="">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" wire:model="subject" placeholder="Subject" required="">
                            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" wire:model="message" rows="4" placeholder="Message" required=""></textarea>
                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</div>
