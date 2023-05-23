 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wafid Service</title>

    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="{{ asset('website')}}/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('website')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/css/magnific-popup.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/css/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/css/owl.theme.default.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap-datepicker.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('website')}}/fonts/flaticon/font/flaticon.css"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('website')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/sweet-alert.css">

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('website')}}/css/dataTables.min.css"> --}}
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/plugins/summernote/summernote.css" /> --}}

    
  </head>
  <body>
  
  <div class="site-wrap">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-8 col-12 d-flex align-items-center justify-content-sm-start justify-content-center mb-sm-0 mb-2">
            <div class="headerTopLeft">
              <ul class="d-flex">
                <li><a href="mailto:contact-us@al-wafid.com"><i class="fa-regular fa-envelope"></i>contact-us@al-wafid.com</a></li>
                <li><a href="tel:0564082349"><i class="fa-solid fa-phone"></i>0564082349</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-12 d-flex  justify-content-sm-end justify-content-center">
            <div class="lang-selector-wrap">
              <select class="form-select" aria-label="Default select example">
                <option selected>Bangladesh</option>
                <option value="1">India</option>
                <option value="2">Pakistan</option>
                <option value="3">USA</option>
              </select>
            </div>
            <!-- <div class="headerTopRight">
                <ul>
                  <li><a href="{{ @$header_footer_seetings->facebook }}"><i class="icon-facebook"></i></a></li>
                  <li><a href="{{ @$header_footer_seetings->twitter }}"><i class="icon-twitter"></i></a></li>
                  <li><a href="{{ @$header_footer_seetings->instagram }}"><i class="icon-instagram"></i></a></li>
                  <li><a href="{{ @$header_footer_seetings->linkedin	 }}"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-4 site-logo">
            <a href="{{url('/')}}" class="text-black h2 mb-0"><img class="img-fluid" src="{{ asset('uploads/bg/Al-wafid.webp')}}" class="" alt=""></a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ route('processing-candidate') }}">Candidates</a></li>
                <li><a href="{{ route('successfull-candidate') }}">Companies</a></li>
                <li><a href="{{ route('successfull-candidate') }}">All Jobs</a></li>
                <li><a href="{{ route('successfull-candidate') }}">Blog</a></li>
                <li><a href="{{ route('successfull-candidate') }}">About Us</a></li>
                <!-- Authentication Links -->
                @guest
                    <li class="logRebtn"><a  href="{{ url('/login')}}">Login</a></li>
                    <li class="logRebtn"><a href="{{ route('register') }}">Registion</a></li>
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
                            @if(Auth::guard('web')->check())
                             <a class="dropdown-item" href="{{ url('user-dashboard') }}">Dashboard</a>
                             <a class="dropdown-item" href="{{ url('company-dashboard') }}">Company Dashboard</a>
                             <a class="dropdown-item" href="{{ url('user-profile') }}">Profile</a>
                             <a class="dropdown-item" href="{{ url('view-resume') }}">View Resume</a>
                            @endif
                        </div>
                    </li>
                @endguest
                <!-- <li><a href="{{ url('contact') }}">Contact</a></li>
                <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li> -->
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    @yield('content')

    <footer class="footer-section">
          <div class="container">
              <div class="footer-content pt-5 pb-5">
                  <div class="row">
                      <div class="col-md-4 col-sm-6 mb-50">
                          <div class="footer-widget">
                              <div class="footer-logo mb-2">
                                  <a href="{{url('/')}}" class="text-black h2"><img class="img-fluid" src="{{ asset('uploads/bg/Al-wafid.webp')}}" class="" alt=""></a>
                              </div>
                              <div class="footer-text">
                                  <p>{!! @$header_footer_seetings->footer_left_short_text	 !!}</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 mb-30 d-flex justify-content-lg-center justify-content-start">
                          <div class="footer-widget">
                              <div class="footer-widget-heading">
                                  <h3>Quick Links</h3>
                              </div>
                              <ul>
                                  <li><a href="{{ route('processing-candidate') }}">Processing</a></li>
                                  <li><a href="{{ route('successfull-candidate') }}">Successful Candidates</a></li>
                                  <li><a href="{{ url('/login')}}">Login</a></li>
                                  <li><a href="{{ route('register') }}">Registion</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 mb-50 d-flex justify-content-lg-center justify-content-start">
                          <div class="footer-social-icon">
                                  <div class="footer-widget-heading">
                                      <h3>Find us</h3>
                                  </div>
                                  <div class="footer-text">
                                    <p>{!! @$header_footer_seetings->address !!}</p>
                                  </div>
                                  <!-- <span>Follow us</span> -->
                                  <div class="footer-widget-heading">
                                      <h3>Follow us</h3>
                                  </div>
                                  <ul class="social_icon">
                                    <li><a href="{{ @$header_footer_seetings->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="{{ @$header_footer_seetings->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="{{ @$header_footer_seetings->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                              </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copyright-area">
              <div class="container">
                  <div class="row" style="justify-content: center;">
                      {{-- <div class="col-xl-6 col-lg-6 text-center text-center"> --}}
                          <div class="copyright-text">
                              <p>Copyright &copy; 2023 wafid, All Right Reserved <a href="#"></a></p>
                          </div>
                      {{-- </div> --}}
                      {{-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                          <div class="footer-menu">
                              <ul>
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Terms</a></li>
                                  <li><a href="#">Privacy</a></li>
                                  <li><a href="#">Policy</a></li>
                                  <li><a href="#">Contact</a></li>
                              </ul>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </footer>
    
  </div>


  <script src="{{ asset('website')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery-ui.js"></script>
  <script src="{{ asset('website')}}/js/popper.min.js"></script>
  <script src="{{ asset('website')}}/js/bootstrap.min.js"></script>
  <script src="{{ asset('website')}}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.countdown.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  <script src="{{ asset('website')}}/js/main.js"></script>



  <!-- Per Page JS files -->
  @stack('javascript')
  <!-- /Per Page JS files -->


  </body>
</html>