 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wafid Service</title>

    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="<?php echo e(asset('website')); ?>/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap.min.css">
    
    
    
    
    
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/sweet-alert.css">

    
    

    
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
                  <li><a href="<?php echo e(@$header_footer_seetings->facebook); ?>"><i class="icon-facebook"></i></a></li>
                  <li><a href="<?php echo e(@$header_footer_seetings->twitter); ?>"><i class="icon-twitter"></i></a></li>
                  <li><a href="<?php echo e(@$header_footer_seetings->instagram); ?>"><i class="icon-instagram"></i></a></li>
                  <li><a href="<?php echo e(@$header_footer_seetings->linkedin); ?>"><i class="icon-linkedin"></i></a></li>
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
            <a href="<?php echo e(url('/')); ?>" class="text-black h2 mb-0"><img class="img-fluid" src="<?php echo e(asset('uploads/bg/Al-wafid.webp')); ?>" class="" alt=""></a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('processing-candidate')); ?>">Candidates</a></li>
                <li><a href="<?php echo e(route('successfull-candidate')); ?>">Companies</a></li>
                <li><a href="<?php echo e(route('successfull-candidate')); ?>">All Jobs</a></li>
                <li><a href="<?php echo e(route('successfull-candidate')); ?>">Blog</a></li>
                <li><a href="<?php echo e(route('successfull-candidate')); ?>">About Us</a></li>
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="logRebtn"><a  href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <li class="logRebtn"><a href="<?php echo e(route('register')); ?>">Registion</a></li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                            <?php if(Auth::guard('web')->check()): ?>
                             <a class="dropdown-item" href="<?php echo e(url('user-dashboard')); ?>">Dashboard</a>
                             <a class="dropdown-item" href="<?php echo e(url('company-dashboard')); ?>">Company Dashboard</a>
                             <a class="dropdown-item" href="<?php echo e(url('user-profile')); ?>">Profile</a>
                             <a class="dropdown-item" href="<?php echo e(url('view-resume')); ?>">View Resume</a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
                <!-- <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li> -->
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    <?php echo $__env->yieldContent('content'); ?>

    <footer class="footer-section">
          <div class="container">
              <div class="footer-content pt-5 pb-5">
                  <div class="row">
                      <div class="col-md-4 col-sm-6 mb-50">
                          <div class="footer-widget">
                              <div class="footer-logo mb-2">
                                  <a href="<?php echo e(url('/')); ?>" class="text-black h2"><img class="img-fluid" src="<?php echo e(asset('uploads/bg/Al-wafid.webp')); ?>" class="" alt=""></a>
                              </div>
                              <div class="footer-text">
                                  <p><?php echo @$header_footer_seetings->footer_left_short_text; ?></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 mb-30 d-flex justify-content-lg-center justify-content-start">
                          <div class="footer-widget">
                              <div class="footer-widget-heading">
                                  <h3>Quick Links</h3>
                              </div>
                              <ul>
                                  <li><a href="<?php echo e(route('processing-candidate')); ?>">Processing</a></li>
                                  <li><a href="<?php echo e(route('successfull-candidate')); ?>">Successful Candidates</a></li>
                                  <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                                  <li><a href="<?php echo e(route('register')); ?>">Registion</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 mb-50 d-flex justify-content-lg-center justify-content-start">
                          <div class="footer-social-icon">
                                  <div class="footer-widget-heading">
                                      <h3>Find us</h3>
                                  </div>
                                  <div class="footer-text">
                                    <p><?php echo @$header_footer_seetings->address; ?></p>
                                  </div>
                                  <!-- <span>Follow us</span> -->
                                  <div class="footer-widget-heading">
                                      <h3>Follow us</h3>
                                  </div>
                                  <ul class="social_icon">
                                    <li><a href="<?php echo e(@$header_footer_seetings->facebook); ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo e(@$header_footer_seetings->twitter); ?>"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e(@$header_footer_seetings->instagram); ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                              </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copyright-area">
              <div class="container">
                  <div class="row" style="justify-content: center;">
                      
                          <div class="copyright-text">
                              <p>Copyright &copy; 2023 wafid, All Right Reserved <a href="#"></a></p>
                          </div>
                      
                      
                  </div>
              </div>
          </div>
      </footer>
    
  </div>


  <script src="<?php echo e(asset('website')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery-ui.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/popper.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.countdown.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  <script src="<?php echo e(asset('website')); ?>/js/main.js"></script>



  <!-- Per Page JS files -->
  <?php echo $__env->yieldPushContent('javascript'); ?>
  <!-- /Per Page JS files -->


  </body>
</html><?php /**PATH D:\xampp\htdocs\wafid-job\resources\views/layouts/website.blade.php ENDPATH**/ ?>