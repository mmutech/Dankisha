<div>
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>What we do</h2>
        <p class="fs-5">Driving Growth Through Training, Insight, and Expert Solutions.<br></p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            @foreach($services as $service)
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/services/'.$service['img']) }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-{{ $service['icon'] }}"></i>
                        </div>
                        <a href="{{ url('service-details', $service['slug'])}}" class="stretched-link">
                            <h3>{{ $service['title'] }}</h3>
                        </a>
                        <p>{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Service Item -->
        </div>
    </div>
</div>
