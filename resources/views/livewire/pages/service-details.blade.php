<div>
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/about.png') }});">
      <div class="container position-relative">
        <h1>{{ $service['title']}}</h1>
        <p>{{ $service['motto']}}</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}/#services">Services</a></li>
            <li class="current">{{ $service['title']}}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-7">
            <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    @foreach($service['imgs'] as $img)
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/services/' .$img) }}" alt="" style="height: 400px; width: 100%">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>{{ $service['title']}}</h3>
              <p>{{ $service['description']}}</p>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                <p>
                {{ $service['text1']}}
                </p>
                <p>
                {{ $service['text2']}}
                </p>
                <p>
                {{ $service['text3']}}
                </p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Service Details Section -->
</div>
