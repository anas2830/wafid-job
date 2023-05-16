 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <script src="<?php echo e(asset('website')); ?>/js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website')); ?>/css/dataTables.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('website')); ?>/plugins/summernote/summernote.css" />

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <?php echo $__env->yieldPushContent('header'); ?>

    
  </head>
  <body>
  
  <div class="site-wrap">
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
          
          <!-- <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div> -->

          <div class="col-4 site-logo">
            <a href="<?php echo e(url('/home')); ?>" class="text-black h2 mb-0">
              <div class="logo">
                <img src="<?php echo e(asset('/uploads/images/logo.png')); ?>"  class="img-fluid" alt="logo" title="logo">
              </div>
            </a>
          </div>

          <div class="col-8 text-right d-flex justify-content-end align-items-center">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
                <li><a href="<?php echo e(route('public-template')); ?>">Project</a></li>
                <li><a href="#">Serivecs</a></li>
                <!-- <li><a href="#">Contact</a></li> -->

                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php if(Route::has('register')): ?>
                      <li class="nav-item">
                          <a class="nav-link login-btn btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                      </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                             <a class="dropdown-item" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
          
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    <?php echo $__env->yieldContent('content'); ?>
    
    
    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-info">
              <div class="footer-logo">
                <a href="#">
                  <img src="<?php echo e(asset('/uploads/images/footer-logo.png')); ?>"  class="img-fluid" alt="logo" title="logo">
                </a>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-center">
            <div class="footer-info">
              <h3 class="footer-heading mb-4">About us</h3>
              <ul class="list-unstyled float-left mr-5">
                <li><a href="<?php echo e(url('/about')); ?>">Price</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">Menu</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-center">
            <div class="footer-info">
              <h3 class="footer-heading mb-4">Services</h3>
              <ul class="list-unstyled float-left mr-5">
                <li><a href="<?php echo e(url('/about')); ?>">Website</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">Demo</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">Lorem</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-center">
            <div class="footer-info">
              <h3 class="footer-heading mb-4">Dummy</h3>
              <ul class="list-unstyled float-left mr-5">
                <li><a href="<?php echo e(url('/about')); ?>">Los Angeles</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">California</a></li>
                <li><a href="<?php echo e(url('/category')); ?>">New York</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
              <div class="footer-socail-icon">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
              </div>
              <div class="copyRight">
                <p>&copy;2022 . All rights reserved</p>
              </div>
          </div>
          <div class="col-lg-6 d-flex align-items-end">
            <div class="subscribe-wrap">
              <form>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Subscribe to get latest update">
                <a class="arrow-btn" href="#">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="<?php echo e(asset('website')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery-ui.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/popper.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.countdown.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/aos.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/sweetalert2/sweetalert2.js"></script>

  <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/bootbox.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/bootbox.locales.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/custom_frame.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/main.js"></script>
  <script src="<?php echo e(asset('website')); ?>/plugins/summernote/summernote.min.js"></script>

  <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        showCloseButton: true,
        timer: 5000,
        timerProgressBar:true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
  </script>
  


  <!-- Per Page JS files -->
  <?php echo $__env->yieldPushContent('javascript'); ?>
  <!-- /Per Page JS files -->


  </body>
</html><?php /**PATH C:\laragon\www\laravel-blog\resources\views/layouts/website.blade.php ENDPATH**/ ?>