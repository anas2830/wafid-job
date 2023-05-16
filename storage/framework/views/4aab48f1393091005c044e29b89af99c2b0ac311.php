

<?php $__env->startSection('content'); ?>


<!-- <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo e(asset('website')); ?>/images/img_4.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Template</h1>
            </div>
          </div>
        </div>
      </div>
    </div> -->


<div class="template-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="template-wrap">
                    <?php $__currentLoopData = $all_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo e(asset($template->photo_thumb_path)); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($template->template_name); ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="process-btn-wrap">
                                <a target="_blank"
                                    href="<?php echo e(route('template-preview', ['slug' => $template->template_url])); ?>"
                                    class="btn process-btn">Demo</a>
                                <a target="_blank"
                                    href="<?php echo e(route('template-process', ['slug' => $template->template_url])); ?>"
                                    class="btn process-btn">Process</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\templete-create-corporate\resources\views/website/template.blade.php ENDPATH**/ ?>