<div>
     <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p class="fs-5">Empowering Growth, Driving Excellence.<br></p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/p2.png') }}" style="height: 300px; width: 100%" class="img-fluid rounded-4 mb-4" alt="">
                <p class="text-justify">{{ $about['p1'] }}</p>
                <p>{{ $about['p2'] }}</p>
                <p>{{ $about['p3'] }}</p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <h3><a href="#" onclick="return false;"><i class="bi bi-check-circle-fill"></i></a> Why choose us</h3>
                    <p class="fst-italic">{{ $about['wcu'] }}</p>

                    <h3><a href="#" onclick="return false;"><i class="bi bi-check-circle-fill"></i></a> Vision</h3>
                    <p class="fst-italic">{{ $vision['p1'] }}</p>

                    <h3><a href="#" onclick="return false;"><i class="bi bi-check-circle-fill"></i></a> Mission</h3>
                    <p class="fst-italic">{{ $vision['p1'] }}</p>

                    <h3><a href="#" onclick="return false;"><i class="bi bi-check-circle-fill"></i></a> Our Training scheme & courses</h3>
                    <p class="fst-italic">We offer a robust system designed to support your personal development, enhance physical growth, and help you set and achieve meaningful goals.</p>
                </div>
            </div>
        </div>
    </div>
</div>
