<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Apex - Home Repair Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('/template/second-template')); ?>/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/template/second-template')); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('/template/second-template')); ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('/template/second-template')); ?>/css/style.css" rel="stylesheet" />
    <style>

      .loader-bg {
        width: 100%;
        height: 100%;
        background: #ffffff;
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999999999;
      }
      .loader-bg h3 {
        position: fixed;
        color: #ff5e31;
        font-size: 24px;
      }
      .loader {
        width: 8em;
        height: 8em;
        font-size: 22px;
        box-sizing: border-box;
        border-top: 0.3em solid #505050;
        border-radius: 50%;
        position: relative;
        animation: rotating 2s ease-in-out infinite;
        --direction: 1;
      }
      .loader span {
        position: absolute;
        color: #FF5E31;
        width: inherit;
        height: inherit;
        text-align: center;
        line-height: 10em;
        font-family: sans-serif;
        animation: rotating 2s linear infinite;
      }
      .loader::before,
      .loader::after {
        content: '';
        position: absolute;
        width: inherit;
        height: inherit;
        border-radius: 50%;
        box-sizing: border-box;
        top: -0.2em;
      }
      .loader:::before {
        border-top: 0.3em solid dodgerblue;
        transform: rotate(120deg);
      }
      .loader::after {
        border-top: 0.3em solid #ff5e31;
        transform: rotate(240deg);
      }
      @keyframes rotating {
        50% {
          transform: rotate(calc(180deg));
        }
        100% {
          transform: rotate(calc(360deg));
        }
      }
    </style>

    <?php echo $__env->make('googleAnalytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>

  <body>

    
    <div class="loader-bg">
        <h3>Loading...</h3>
      <div class="loader">
          <span></span>
      </div>
    </div>

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="<?php echo e(url('website/my-second-template')); ?>" class="navbar-brand d-flex align-items-center active_sections">
        <?php if(isset($fill_up_info["'img'"]['template_logo'])): ?>
          <img src="<?php echo e($fill_up_info["'img'"]['template_logo']); ?>" class="w-100 second_template_home_first_img author_view" alt="Image" style="    height: 60px;">
        <?php else: ?> 
          <img src="<?php echo e(asset('/template/second-template')); ?>/img/logo.png" class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][template_logo]" alt="image" type="image" style="height: 60px;"/>
        <?php endif; ?>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="#" class="nav-item nav-link active active-nav" data-id="second_template_home_section">Home</a>
          <a href="#second_template_about_section" class="nav-item nav-link active-nav" data-id="second_template_about_section">About Us</a>
          <a href="#second_template_service_section" class="nav-item nav-link active-nav" data-id="second_template_service_section">Our Services</a>
          <a href="#second_template_team_section" class="nav-item nav-link active-nav" data-id="second_template_team_section">Our Team</a>
          <a href="#second_template_testimonial_section" class="nav-item nav-link active-nav" data-id="second_template_testimonial_section">Testimonial</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <?php if(isset($section_name_array) && in_array('second_template_home_section', $section_name_array)): ?>
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5 wow fadeIn template_sections active_sections" id="second_template_home_section" type="<?php echo e($template_view); ?>" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <?php if(isset($fill_up_info["'img'"]['second_template_home_first_img'])): ?>
                        <img src="<?php echo e($fill_up_info["'img'"]['second_template_home_first_img']); ?>" class="w-100 second_template_home_first_img author_view" alt="Image">
                    <?php else: ?> 
                        <img src="<?php echo e(asset('/template/second-template')); ?>/img/carousel-1.jpg" class="w-100 second_template_home_first_img <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_home_first_img]">
                    <?php endif; ?>
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="row justify-content-center">
                            <?php if(isset($fill_up_info['second_template_home_first_img_content'])): ?> 

                                <div class="col-12 col-lg-10" class="second_template_home_first_img_content <?php echo e($template_view); ?>_view">
                                    <?php echo $fill_up_info['second_template_home_first_img_content']; ?>

                                </div>
                            <?php else: ?> 
                                <div class="col-12 col-lg-10 second_template_home_first_img_content <?php echo e($template_view); ?>_view" type="html" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_first_img_content]">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to Apex</h5>
                                </div>
                            <?php endif; ?>
                            
                            <div class="col-12 col-lg-10">

                              <?php if(isset($fill_up_info['second_template_home_first_img_btn_text'])): ?> 
                                <a href="<?php echo e($fill_up_info['second_template_home_second_img_btn_url']); ?>" class="btn btn-primary py-3 px-5"><?php echo e($fill_up_info['second_template_home_first_img_btn_text']); ?></a>
                              <?php else: ?> 
                                <a href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_first_img_btn_text]" class="btn btn-primary py-3 px-5 <?php echo e($template_view); ?>_view" type="link" link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_first_img_btn_url]">Click Here</a>
                              <?php endif; ?>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                
                <div class="carousel-item">
                    <?php if(isset($fill_up_info["'img'"]['second_template_home_second_img'])): ?>
                        <img src="<?php echo e($fill_up_info["'img'"]['second_template_home_second_img']); ?>" class="w-100 second_template_home_second_img author_view" alt="Image">
                    <?php else: ?> 
                        <img src="<?php echo e(asset('/template/second-template')); ?>/img/carousel-1.jpg" class="w-100 second_template_home_second_img <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_home_second_img]">
                    <?php endif; ?>
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="row justify-content-center">
                            <?php if(isset($fill_up_info['second_template_home_second_img_content'])): ?> 

                                <div class="col-12 col-lg-10" class="second_template_home_second_img_content <?php echo e($template_view); ?>_view">
                                    <?php echo $fill_up_info['second_template_home_second_img_content']; ?>

                                </div>
                            <?php else: ?> 
                                <div class="col-12 col-lg-10 second_template_home_second_img_content <?php echo e($template_view); ?>_view" type="html" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_second_img_content]">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to Apex</h5>
                                </div>
                            <?php endif; ?>
                            
                            <div class="col-12 col-lg-10">

                              <?php if(isset($fill_up_info['second_template_home_second_img_btn_text'])): ?> 
                                <a href="<?php echo e($fill_up_info['second_template_home_second_img_btn_url']); ?>" class="btn btn-primary py-3 px-5"><?php echo e($fill_up_info['second_template_home_second_img_btn_text']); ?></a>
                              <?php else: ?> 
                                <a href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_second_img_btn_text]" class="btn btn-primary py-3 px-5 <?php echo e($template_view); ?>_view" type="link" link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_home_second_img_btn_url]">Click Here</a>
                              <?php endif; ?>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <!-- Carousel End -->
    <?php endif; ?>


    <?php if(isset($section_name_array) && in_array('second_template_about_section', $section_name_array)): ?>
      <!-- About Start -->
      <div class="container-xxl py-5 active_sections template_sections" type="<?php echo e($template_view); ?>" id="second_template_about_section">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">

                  <?php if(isset($fill_up_info["'img'"]['second_template_about_image'])): ?>
                    <img class="position-absolute w-100 h-100" src="<?php echo e($fill_up_info["'img'"]['second_template_about_image']); ?>" alt="Image" style="object-fit: cover"/>
                  <?php else: ?> 
                      <img src="<?php echo e(asset('/template/second-template')); ?>/img/about.jpg" class="position-absolute w-100 h-100 <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_about_image]" style="object-fit: cover">
                  <?php endif; ?>
                
                <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                  <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">

                    <?php if(isset($fill_up_info['second_template_about_image_content'])): ?> 
                      <?php echo $fill_up_info['second_template_about_image_content']; ?>

                    <?php else: ?> 
                      <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_about_image_content]" type="html">
                        <h1 class="text-white">25</h1>
                        <h2 class="text-white">Years</h2>
                        <h5 class="text-white mb-0">Experience</h5>
                      </div>
                    <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="h-100">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                  <h6 class="text-body text-uppercase mb-2">About Us</h6>
                  <?php if(isset($fill_up_info['second_template_about_section_heading'])): ?> 
                    <h1 class="display-6 mb-0"><?php echo e($fill_up_info['second_template_about_section_heading']); ?></h1>
                  <?php else: ?> 
                    <h1 name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_about_section_heading]" class="display-6 mb-0 <?php echo e($template_view); ?>_view" type="html">Unique Solutions For Residentials & Industries!</a>
                  <?php endif; ?>

                </div>

                <?php if(isset($fill_up_info['second_template_about_section_content'])): ?> 

                  <?php echo $fill_up_info['second_template_about_section_content']; ?>


                <?php else: ?> 

                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_about_section_content]" type="html">
                    <p>
                      Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                      Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                      sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class="mb-4">
                      Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                      Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                      sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                  </div>

                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->
    <?php endif; ?>

    <!-- Service Start -->

    <?php if(isset($section_name_array) && in_array('second_template_service_section', $section_name_array)): ?>
    <div class="container-xxl py-5 active_sections template_sections" type="<?php echo e($template_view); ?>" id="second_template_service_section">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Services</h6>

              <?php if(isset($fill_up_info['second_template_service_section_heading'])): ?> 
                <h1 class="display-6 mb-0"><?php echo e($fill_up_info['second_template_service_section_heading']); ?></h1>
              <?php else: ?> 
                <h1 class="display-6 mb-0 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_heading]" type="text">Construction And Renovation Solutions</h1>
              <?php endif; ?>

            </div>
          </div>
          <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            
            <?php if(isset($fill_up_info['second_template_service_section_btn_text'])): ?> 
              <a href="<?php echo e($fill_up_info['second_template_service_section_btn_url']); ?>" class="btn btn-primary py-3 px-5"><?php echo e($fill_up_info['second_template_service_section_btn_text']); ?></a>
            <?php else: ?> 
              <a href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_btn_text]" class="btn btn-primary py-3 px-5 <?php echo e($template_view); ?>_view" type="link" link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_btn_url]">More Services</a>
            <?php endif; ?>
            
          </div>
        </div>
        <div class="row g-4 justify-content-center">

          

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">

              <?php if(isset($fill_up_info["'img'"]['second_template_service_section_first_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_service_section_first_image']); ?>" alt="Image"/>
              <?php else: ?> 
                <img src="<?php echo e(asset('/template/second-template')); ?>/img/service-1.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_service_section_first_image]">
              <?php endif; ?>

              <div class="service-text position-relative text-center h-100 p-4">

                <?php if(isset($fill_up_info['second_template_service_section_first_header'])): ?> 
                  <h5 class="mb-3"><?php echo e($fill_up_info['second_template_service_section_first_header']); ?></h5>
                <?php else: ?> 
                  <h5 class="mb-3 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_first_header]" type="text">Building Construction</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_service_section_first_content'])): ?> 
                  <?php echo $fill_up_info['second_template_service_section_first_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_first_content]" type="html">
                    <p>
                      Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                      amet diam et eos
                    </p>
                  </div>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_service_section_first_button'])): ?> 
                  <a href="<?php echo e($fill_up_info['second_template_service_section_first_link']); ?>" class="small"><?php echo e($fill_up_info['second_template_service_section_first_button']); ?></a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                    >
                <?php else: ?> 
                  <a class="small <?php echo e($template_view); ?>_view" href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_first_button]"
                    link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_first_link]">READ MORE</a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                      >
                <?php endif; ?>

                
                

              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <?php if(isset($fill_up_info["'img'"]['second_template_service_section_second_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_service_section_second_image']); ?>" alt="Image"/>
              <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/service-2.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_service_section_second_image]">
              <?php endif; ?>

              <div class="service-text position-relative text-center h-100 p-4">
                <?php if(isset($fill_up_info['second_template_service_section_second_header'])): ?> 
                  <h5 class="mb-3"><?php echo e($fill_up_info['second_template_service_section_second_header']); ?></h5>
                <?php else: ?> 
                  <h5 class="mb-3 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_second_header]" type="text">Building Construction</h5>
                <?php endif; ?>
                
                <?php if(isset($fill_up_info['second_template_service_section_second_content'])): ?> 
                  <?php echo $fill_up_info['second_template_service_section_second_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_second_content]" type="html">
                    <p>
                      Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                      amet diam et eos
                    </p>
                  </div>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_service_section_second_button'])): ?> 
                  <a href="<?php echo e($fill_up_info['second_template_service_section_second_link']); ?>" class="small"><?php echo e($fill_up_info['second_template_service_section_second_button']); ?></a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                    >
                <?php else: ?> 
                  <a class="small <?php echo e($template_view); ?>_view" href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_second_button]"
                    link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_second_link]">READ MORE</a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                      >
                <?php endif; ?>

              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <?php if(isset($fill_up_info["'img'"]['second_template_service_section_third_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_service_section_third_image']); ?>" alt="Image"/>
              <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/service-3.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_service_section_third_image]">
              <?php endif; ?>
              <div class="service-text position-relative text-center h-100 p-4">
                <?php if(isset($fill_up_info['second_template_service_section_third_header'])): ?> 
                  <h5 class="mb-3"><?php echo e($fill_up_info['second_template_service_section_third_header']); ?></h5>
                <?php else: ?> 
                  <h5 class="mb-3 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_third_header]" type="text">Building Construction</h5>
                <?php endif; ?>
                
                <?php if(isset($fill_up_info['second_template_service_section_third_content'])): ?> 
                  <?php echo $fill_up_info['second_template_service_section_third_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_third_content]" type="html">
                    <p>
                      Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                      amet diam et eos
                    </p>
                  </div>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_service_section_third_button'])): ?> 
                  <a href="<?php echo e($fill_up_info['second_template_service_section_third_link']); ?>" class="small"><?php echo e($fill_up_info['second_template_service_section_third_button']); ?></a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                    >
                <?php else: ?> 
                  <a class="small <?php echo e($template_view); ?>_view" href="" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_third_button]"
                    link-name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_service_section_third_link]">READ MORE</a><i class="fa fa-arrow-right ms-3" style="color:#FDA12B"></i
                      >
                <?php endif; ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php endif; ?>
    <!-- Service End -->

    
    <!-- Team Start -->
    <?php if(isset($section_name_array) && in_array('second_template_team_section', $section_name_array)): ?>

    <div class="container-xxl py-5 active_sections template_sections" type="<?php echo e($template_view); ?>" id="second_template_team_section">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Team</h6>
              
                <?php if(isset($fill_up_info['second_template_team_main_heading'])): ?> 
                  <h5 class="mb-3"><?php echo e($fill_up_info['second_template_team_main_heading']); ?></h5>
                <?php else: ?> 
                  <h5 class="mb-3 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_main_heading]" type="text">Our Expert Worker</h5>
                <?php endif; ?>

            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            

            <?php if(isset($fill_up_info['second_template_team_main_content'])): ?> 
              <?php echo $fill_up_info['second_template_team_main_content']; ?>

            <?php else: ?> 
              <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_main_content]" type="html">
                <p class="mb-0">
                  Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                  amet diam et eos
                </p>
              </div>
            <?php endif; ?>

          </div>
        </div>
        <div class="row g-4">

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">

              <?php if(isset($fill_up_info["'img'"]['second_template_team_first_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_team_first_image']); ?>" alt="Image"/>
              <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/team-1.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_team_first_image]">
              <?php endif; ?>

              <div class="team-text bg-white p-4">

                <?php if(isset($fill_up_info['second_template_team_first_name'])): ?> 
                  <h5><?php echo e($fill_up_info['second_template_team_first_name']); ?></h5>
                <?php else: ?> 
                  <h5 class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_first_name]" type="text">Full Name</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_team_first_title'])): ?> 
                  <span><?php echo e($fill_up_info['second_template_team_first_title']); ?></span>
                <?php else: ?> 
                  <span class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_first_title]" type="text">Engineer</span>
                <?php endif; ?>
                

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item position-relative">

              <?php if(isset($fill_up_info["'img'"]['second_template_team_second_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_team_second_image']); ?>" alt="Image"/>
              <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/team-1.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_team_second_image]">
              <?php endif; ?>

              <div class="team-text bg-white p-4">

                <?php if(isset($fill_up_info['second_template_team_second_name'])): ?> 
                  <h5><?php echo e($fill_up_info['second_template_team_second_name']); ?></h5>
                <?php else: ?> 
                  <h5 class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_second_name]" type="text">Full Name</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_team_second_title'])): ?> 
                  <span><?php echo e($fill_up_info['second_template_team_second_title']); ?></span>
                <?php else: ?> 
                  <span class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_second_title]" type="text">Engineer</span>
                <?php endif; ?>

              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item position-relative">

              <?php if(isset($fill_up_info["'img'"]['second_template_team_third_image'])): ?>
                <img class="img-fluid" src="<?php echo e($fill_up_info["'img'"]['second_template_team_third_image']); ?>" alt="Image"/>
              <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/team-1.jpg" class="img-fluid <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_team_third_image]">
              <?php endif; ?>

              <div class="team-text bg-white p-4">

                <?php if(isset($fill_up_info['second_template_team_three_name'])): ?> 
                  <h5><?php echo e($fill_up_info['second_template_team_three_name']); ?></h5>
                <?php else: ?> 
                  <h5 class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_three_name]" type="text">Full Name</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_team_three_title'])): ?> 
                  <span><?php echo e($fill_up_info['second_template_team_three_title']); ?></span>
                <?php else: ?> 
                  <span class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_team_three_title]" type="text">Engineer</span>
                <?php endif; ?>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <?php endif; ?>
    <!-- Team End -->

    <!-- Testimonial Start -->
    
    <?php if(isset($section_name_array) && in_array('second_template_testimonial_section', $section_name_array)): ?>
    <div class="container-xxl py-5 active_sections template_sections" type="<?php echo e($template_view); ?>" id="second_template_testimonial_section">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
           
              <?php if(isset($fill_up_info['second_template_testimonial_main_heading'])): ?> 
                <h1 class="display-6 mb-0"><?php echo e($fill_up_info['second_template_testimonial_main_heading']); ?></h1>
              <?php else: ?> 
                <h1 class="display-6 mb-0 <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_main_heading]" type="text">What Our Happy Clients Say!</h1>
              <?php endif; ?>

            </div>

            <?php if(isset($fill_up_info['second_template_testimonial_content'])): ?> 
            <div>
              <?php echo $fill_up_info['second_template_testimonial_content']; ?>

            </div>
            <?php else: ?> 
              <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_content]" type="html">
                
                <?php if(isset($fill_up_info['second_template_testimonial_slider_first_content'])): ?> 
                  <?php echo $fill_up_info['second_template_testimonial_slider_first_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_first_content]" type="html">
                    <p class="mb-4">
                      Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                      ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                      dolore erat amet
                    </p>
                  </div>
                <?php endif; ?>
                
              </div>
            <?php endif; ?>

            
          </div>
          <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item">

                <?php if(isset($fill_up_info["'img'"]['second_template_testimonial_slider_first_image'])): ?>
                  <img class="img-fluid mb-4" src="<?php echo e($fill_up_info["'img'"]['second_template_testimonial_slider_first_image']); ?>" alt="Image"/>
                <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/testimonial-1.jpg" class="img-fluid mb-4 <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_testimonial_slider_first_image]">
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_testimonial_slider_first_content'])): ?> 
                  <?php echo $fill_up_info['second_template_testimonial_slider_first_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_first_content]" type="html">
                    <p class="mb-4">
                      Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                      ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                      dolore erat amet
                    </p>
                  </div>
                <?php endif; ?>

                <div
                  class="bg-primary mb-3"
                  style="width: 60px; height: 5px"
                ></div>
                
                <?php if(isset($fill_up_info['second_template_testimonial_slider_first_name'])): ?> 
                  <h5><?php echo e($fill_up_info['second_template_testimonial_slider_first_name']); ?></h5>
                <?php else: ?> 
                  <h5 class=" <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_first_name]" type="text">Client Name</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_testimonial_slider_first_title'])): ?> 
                  <span><?php echo e($fill_up_info['second_template_testimonial_slider_first_title']); ?></span>
                <?php else: ?> 
                  <span class=" <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_first_title]" type="text">Profession</span>
                <?php endif; ?>

              </div>
              <div class="testimonial-item">
                <?php if(isset($fill_up_info["'img'"]['second_template_testimonial_slider_second_image'])): ?>
                  <img class="img-fluid mb-4" src="<?php echo e($fill_up_info["'img'"]['second_template_testimonial_slider_second_image']); ?>" alt="Image"/>
                <?php else: ?> 
                  <img src="<?php echo e(asset('/template/second-template')); ?>/img/testimonial-2.jpg" class="img-fluid mb-4 <?php echo e($template_view); ?>_view" alt="image" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_testimonial_slider_second_image]">
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_testimonial_slider_second_content'])): ?> 
                  <?php echo $fill_up_info['second_template_testimonial_slider_second_content']; ?>

                <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_second_content]" type="html">
                    <p class="mb-4">
                      Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                      ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                      dolore erat amet
                    </p>
                  </div>
                <?php endif; ?>

                <div
                  class="bg-primary mb-3"
                  style="width: 60px; height: 5px"
                ></div>

                <?php if(isset($fill_up_info['second_template_testimonial_slider_second_name'])): ?> 
                  <h5><?php echo e($fill_up_info['second_template_testimonial_slider_second_name']); ?></h5>
                <?php else: ?> 
                  <h5 class=" <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_second_name]" type="text">Client Name</h5>
                <?php endif; ?>

                <?php if(isset($fill_up_info['second_template_testimonial_slider_second_title'])): ?> 
                  <span><?php echo e($fill_up_info['second_template_testimonial_slider_second_title']); ?></span>
                <?php else: ?> 
                  <span class=" <?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_testimonial_slider_second_title]" type="text">Profession</span>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    
    <?php if(isset($section_name_array) && in_array('second_template_footer_section', $section_name_array)): ?>
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn active_sections template_sections" data-wow-delay="0.1s" type="<?php echo e($template_view); ?>" id="second_template_footer_section">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-4 col-md-4">
            <h1 class="text-white mb-4">
                <?php if(isset($fill_up_info["'img'"]['second_template_footer_logo'])): ?>
                  <img class="img-fluid mb-4" src="<?php echo e($fill_up_info["'img'"]['second_template_footer_logo']); ?>" alt="Image"/>
                <?php else: ?> 
                  <img class="img-fluid mb-4 <?php echo e($template_view); ?>_view" src="https://cdn.logo.com/hotlink-ok/logo-social.png" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][second_template_footer_logo]">
                  
                <?php endif; ?>
              
            </h1>

            <div>
              <?php if(isset($fill_up_info['second_template_footer_left_content'])): ?> 
              <div>
                <?php echo $fill_up_info['second_template_footer_left_content']; ?>

              </div>
              <?php else: ?> 
                  <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_footer_left_content]" type="html">
                    <p>
                      Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                      ipsum et lorem et sit, sed stet lorem sit clita
                    </p>
                    <div class="d-flex pt-2">
                      <a class="btn btn-square btn-outline-primary me-1" href=""
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a class="btn btn-square btn-outline-primary me-1" href=""
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a class="btn btn-square btn-outline-primary me-1" href=""
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a class="btn btn-square btn-outline-primary me-0" href=""
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                  </div>
                </div>
              <?php endif; ?>
            
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <h4 class="text-light mb-4">Address</h4>

            <?php if(isset($fill_up_info['second_template_footer_middle_content'])): ?> 
            <div>
              <?php echo $fill_up_info['second_template_footer_middle_content']; ?>

            </div>
            <?php else: ?> 
              <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_footer_middle_content]" type="html">
                
                <p>
                  <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                </p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
              </div>
            <?php endif; ?>
            
          </div>
          <div class="col-lg-4 col-md-4">
            <h4 class="text-light mb-4">Quick Links</h4>
            <?php if(isset($fill_up_info['second_template_footer_right_content'])): ?> 
            <div>
              <?php echo $fill_up_info['second_template_footer_right_content']; ?>

            </div>
            <?php else: ?> 
              <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_footer_right_content]" type="html">
                
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
              </div>
            <?php endif; ?>
            
          </div>
          
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              
              
              <?php if(isset($fill_up_info['second_template_footer_copyright_content'])): ?> 
              <?php echo $fill_up_info['second_template_footer_copyright_content']; ?>

            <?php else: ?> 
              <div class="<?php echo e($template_view); ?>_view" name="<?php echo e($template_info->template_slug); ?>_website_template_info[second_template_footer_copyright_content]" type="html">
                &copy; <a href="#">Your Site Name</a>, All Right Reserved.
              </div>
            <?php endif; ?>
            </div>
            <div class="col-md-6 text-center text-md-end">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('/template/second-template')); ?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo e(asset('/template/second-template')); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo e(asset('/template/second-template')); ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo e(asset('/template/second-template')); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('/template/second-template')); ?>/js/main.js"></script>

    <script>
        window.addEventListener('load', function () {
          $(".loader-bg").hide(); 
        });
        
        var template_slug = "<?php echo e($template_info->template_slug); ?>";

        console.log(template_slug);
      
        $('.template_sections').each(function(){
            var template_section_this = $(this);
            var access_type = template_section_this.attr('type');
            var section_id = template_section_this.attr('id');
            if(access_type == "public"){
              var section_array = localStorage.getItem(template_slug+'_sections');
              var section_json_array = JSON.parse(section_array);
              if(section_json_array.some(item => item.section == section_id)){
                template_section_this.removeClass('d-none');
              }else{
                $('.nav-item').each(function(){
                  $(this).removeClass('active');
                  var data_id = $(this).attr('data-id');
                  if(data_id == section_id){
                    $(this).addClass('d-none');
                    $(this).removeClass('active-nav');
                  }
                });
                $('.nav-item').removeClass('active');
                $('.active-nav').eq(0).addClass('active');

                template_section_this.addClass('d-none');
                template_section_this.removeClass('active_sections');
              }
            }
        });
      
        $('.active_sections .public_view').each(function(){
          var name = $(this).attr('name');
          var type = $(this).attr('type');
          console.log('abc',name);
          switch (type) {
            case "text":
              if (localStorage.getItem(name) != '') {
                var value = localStorage.getItem(name);
                $(this).text(value);
              }
              break;
            case "image":
              if (localStorage.getItem(name) != '') {
                var value = localStorage.getItem(name);
                $(this).attr('src', value);
              }
              break;
            case "html":
              if (localStorage.getItem(name) != '') {
                var value = localStorage.getItem(name);
                $(this).html(value);
              }
              break;
            case "link":
              var link_name = $(this).attr('link-name');
              console.log(link_name);
              if (localStorage.getItem(name) != '') {
                var value = localStorage.getItem(name);
                $(this).text(value);
                if (localStorage.getItem(link_name) != '') {
                  var link  = localStorage.getItem(link_name);
                  $(this).attr('href', link);
                }
              }
              break;
          }
        });


        $('.active-nav').on('click', function(){
          $('.active-nav').removeClass('active');
          $(this).addClass('active');
        });



        
          
      </script>

  </body>
</html>
<?php /**PATH D:\xampp\htdocs\templete-create-corporate\resources\views/website/template/second-template.blade.php ENDPATH**/ ?>