@extends('layouts.home')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Emeral</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/login">Login</a>
      </li>
        <!-- Authentication Links -->
        {{-- @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li> --}}
        {{-- @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li> --}}
        {{-- @endguest --}}
        </ul>
    </div>
    </div>
</nav>


<!-- Header -->
<header class="masthead">
    <div class="container">
    <div class="intro-text">
        <div class="intro-lead-in">Welcome to Optik Emeral Bukittinggi!</div>
        <div class="intro-heading text-uppercase">Quality It's Our Priority</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
    </div>
</header>

<!-- Services -->
<section class="page-section" id="services">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">Kami menyediakan beberapa jasa menarik, diantaranya :</h3>
    </div>
    </div>
    <div class="row text-center">
    <div class="col-md-3">
        <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Periksa Mata Gratis</h4>
        <p class="text-muted">Jika anda ingin mengetahui kesehatan mata anda, maka kami hadir memberikan layanan periksa mata tanpa dipungut biaya sedikitpun</p>
    </div>
    <div class="col-md-3">
        <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Computer Based Checkup</h4>
        <p class="text-muted">Pemeriksaan pada optik kami sudah berteknologi canggih, menggunakan alat autorefracto yang akan memaksimalkan kinerja pemeriksaan</p>
    </div>
    <div class="col-md-3">
        <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-cog fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Service Kacamata </h4>
        <p class="text-muted">Jika kacamata anda mengalami gangguan, bahkan kerusakan, kami mampu melakukan service kacamata hingga kacamata anda menjadi seperti baru kembali</p>
    </div>
    <div class="col-md-3">
      <span class="fa-stack fa-4x">
      <i class="fas fa-circle fa-stack-2x text-primary"></i>
      <i class="fas fa-heartbeat fa-stack-1x fa-inverse"></i>
      </span>
      <h4 class="service-heading">Menerima BPJS</h4>
      <p class="text-muted">Jika anda memiliki BPJS, maka kami juga menyediakan jasa bagi anda</p>
    </div>
    </div>
</div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Gallery</h2>
        <h3 class="section-subheading text-muted">Optik Emeral menyediakan berbagai frame berikut</h3>
    </div>
    </div>
    <div class="row">

      @foreach ($data_galeri as $galeri)

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$galeri -> id}}">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
                </div>
            </div>
            <img class="img-fluid" src="{{asset('images/'.$galeri -> gambar)}}" alt="">
            </a>
            <div class="portfolio-caption">
            <h4>{{$galeri -> nama}}</h4>
            <p class="text-muted">Diskon {{$galeri -> diskon}}</p>
            </div>
        </div>

       @endforeach 

    </div>
</div>
</section>

<!-- About -->
{{-- <section class="page-section" id="about">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <ul class="timeline">
        <li>
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src=" {{url('frontend/img/about/1.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src=" {{url('frontend/img/about/2.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li>
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src=" {{url('frontend/img/about/3.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <img class="rounded-circle img-fluid" src=" {{url('frontend/img/about/4.jpg')}}" alt="">
            </div>
            <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
            </div>
            <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-image">
            <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
        </li>
        </ul>
    </div>
    </div>
</div>
</section> --}}

<!-- Team -->
<section class="bg-light page-section" id="team">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Video Profil</h2>
        <h3 class="section-subheading text-muted">Optik Emeral</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pvuN_WvF1to?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
    </div>
    <div class="row">
    {{-- <div class="col-sm-4">
        <div class="team-member">
        <img class="mx-auto rounded-circle" src=" {{url('frontend/img/team/1.jpg')}}" alt="">
        <h4>Kay Garland</h4>
        <p class="text-muted">Lead Designer</p>
        <ul class="list-inline social-buttons">
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="team-member">
        <img class="mx-auto rounded-circle" src=" {{url('frontend/img/team/2.jpg')}}" alt="">
        <h4>Larry Parker</h4>
        <p class="text-muted">Lead Marketer</p>
        <ul class="list-inline social-buttons">
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </li>
        </ul>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="team-member">
        <img class="mx-auto rounded-circle" src=" {{url('frontend/img/team/3.jpg')}}" alt="">
        <h4>Diana Pertersen</h4>
        <p class="text-muted">Lead Developer</p>
        <ul class="list-inline social-buttons">
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </li>
        </ul>
        </div>
    </div> --}}
    </div>
    <div class="row">
    <div class="col-lg-8 mx-auto text-center">
      <br>
        <p class="large text-muted">Dapat disaksikan pada akun youtube kami</p>
    </div>
    </div>
</div>
</section>

<!-- Clients -->
{{-- <section class="py-5">
<div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6">
        <a href="#">
        <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/logos/envato.jpg')}}" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6">
        <a href="#">
        <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/logos/designmodo.jpg')}}" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6">
        <a href="#">
        <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/logos/themeforest.jpg')}}" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6">
        <a href="#">
        <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/logos/creative-market.jpg')}}" alt="">
        </a>
    </div>
    </div>
</div>
</section> --}}

<!-- Contact -->
<section class="page-section" id="contact">
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Kritik dan saran anda sangat membantu dalam pengembangan kami untuk melayani anda</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
</section>

 <!-- Footer -->
 <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Optik Emeral 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
   @foreach ($data_galeri as $galeri) 
      <div class="portfolio-modal modal fade" id="portfolioModal{{$galeri -> id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 class="text-uppercase">{{$galeri -> nama}}</h2>
                    <p class="item-intro text-muted">Diskon {{$galeri -> diskon}}</p>
                    <img class="img-fluid d-block mx-auto" src="{{asset('images/'.$galeri -> gambar)}}" alt="">
                    <p>{{$galeri -> deskripsi}}</p>
                    <ul class="list-inline">
                      <li>Merek: {{$galeri -> merek}}</li>
                      <li>Ukuran: {{$galeri -> tahun}}</li>
                      <li>Harga: {{$galeri -> harga}}</li>
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close Project</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   @endforeach 
  {{-- <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/portfolio/02-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/portfolio/03-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/portfolio/04-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/portfolio/05-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src=" {{url('frontend/img/portfolio/06-full.jpg')}}" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Bootstrap core JavaScript -->
  <script src=" {{url('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src=" {{url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src=" {{url('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src=" {{url('frontend/js/jqBootstrapValidation.js')}}"></script>
  <script src=" {{url('frontend/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src=" {{url('frontend/js/agency.min.js')}}"></script>

@endsection
