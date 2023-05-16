

<?php $__env->startSection('content'); ?>

<div class="site-section bg-light hero-area">
    <div class="container-fluid">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-lg-12">
                <div class="hero-bg">
                    <img class="img-fluid" src="<?php echo e(asset('uploads/bg/hero-bg.jpg')); ?>" class="" alt="">
                    <div class="hero-text-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero-text " data-aos="fade-left">
                                        <div class="txt1">
                                            <h6><?php echo e($header_footer_seetings->banner_top_text); ?></h6>
                                        </div>
                                        <div class="txt2">
                                            <h1><?php echo e($header_footer_seetings->banner_middle_text); ?></h1>
                                        </div>
                                        <div class="txt3">
                                            <p><?php echo e($header_footer_seetings->banner_bottom_text); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-us-img-wrap position-relative h-100" data-aos="fade-up">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('uploads/bg/about_bg_2.jpg')); ?>"
                        class="" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-us-text" data-aos="fade-left">
                    <h6 class="section-title text-start mb-4">About Us</h6>
                    <h5 class="mb-2">What We do<span>?</span></h5>
                    <p class="mb-3"><?php echo e($about_us_seetings->we_do_content); ?></p>
                    <h5 class="mb-2">For <span>Candidates</span></h5>
                    <p class="mb-3"><?php echo e($about_us_seetings->candidates_content); ?></p>
                    <h5 class="mb-2">For <span>Employers</span></h5>
                    <p class="mb-3"><?php echo e($about_us_seetings->employers_content); ?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Services</h6>
                    <h5 class="mb-5">Our Services</h5>
                </div>
            </div>
        </div>
        <div class="service-card">
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item align-self-stretch rounded pt-3">
                            <div class="p-4">
                                <?php switch($key):
                                    case (0): ?>
                                        <i class="fa-solid fa-briefcase"></i>
                                        <?php break; ?>
                                    <?php case (1): ?>
                                        <i class="fa-brands fa-cc-visa"></i>
                                        <?php break; ?>
                                    <?php case (2): ?>
                                        <i class="fa-solid fa-building"></i>
                                        <?php break; ?>
                                <?php endswitch; ?>
                                <h5><?php echo e($service->name); ?></h5>
                                <p><?php echo e($service->short_desc); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<section class="work-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6 class="bg-white px-3">Process</h6>
                    <h5 class="mb-5">3 Easy Steps</h5>
                </div>
            </div>
        </div>
        <div class="process-step mt-5">
            <div class="row">

                <?php $__currentLoopData = $easy_steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card align-self-stretch border text-center pt-5 pb-4 px-4">
                            <div class="process-icon d-inline-flex align-items-center justify-content-center rounded-circle shadow">
                                <?php switch($key):
                                    case (0): ?>
                                        <i class="fa-solid fa-3x fa-circle-info text-white"></i>
                                        <?php break; ?>
                                    <?php case (1): ?>
                                        <i class="fa fa-plane fa-3x text-white"></i>
                                        <?php break; ?>
                                    <?php case (2): ?>
                                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                                        <?php break; ?>
                                <?php endswitch; ?>
                            </div>
                            <h5 class="mt-4"><?php echo e($step->name); ?></h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0"><?php echo e($step->short_desc); ?></p>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<section class="offers-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="section-heading text-center">
                    <h6 class="bg-white px-3">Offer</h6>
                    <h5 class="mb-2">Our Special Offer</h5>
                    <p class="mb-5">We will ensure your appearance ontime in your workplace country by the Grace Of
                        Almighty with less expenses</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
                    <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
                            <div class="card-basic align-self-stretch">
                                <div class="card-header header-basic">
                                    <h5><?php echo e($offer->name); ?></h5>
                                </div>
                                <div class="card-body">
                                    <p><?php echo e($offer->short_desc); ?></p>
                                    <div class="card-element-hidden-basic">
                                        <?php echo $offer->points; ?>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/website/home.blade.php ENDPATH**/ ?>