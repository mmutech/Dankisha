<div>
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Dankisha</span>
          </a>
          <div class="footer-contact pt-3">
            <p>4th Floor, Suite 8, Murtala House, <br> No 37 Murtala Mohammed way.</p>
            <p>Jos, Nigeria</p>
            <p class="mt-3"><strong>Phone:</strong> <span><a href="tel:+2348033454222">+234 803 345 4222</a></span></p>
            <p><strong>Email:</strong> <span><a href="mailto:contact@dankisha.com">contact@dankisha.com</a></span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/dankishandassociates" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com/dankishandassociates" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/dankishandassociates" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://in.com/dankishandassociates" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://wa.me/+2348033454222" target="_blank"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}/#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}/#about">About Us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}/#services">What we do</a></li>
            <!-- <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('service-details/'. 'training')}}">Training</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('service-details/'. 'research')}}">Research</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{url('service-details/'. 'consultancy')}}">Consultancy</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our services!</p>
            <form wire:submit="subscribe" class="php-email-form">
                <div class="newsletter-form"><input type="email" wire:model="email"><input type="submit" value="Subscribe"></div>
            </form>
            @if ($response)
                <div  class="sent-message">
                    {{ $response }}
                </div>
            @endif
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dankish</strong> <span>All Rights Reserved</span></p>
    </div>
</div>
