

<?php $__env->startSection('content'); ?>

<div class="profile-wraper">
    <div class="pageHeading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading-page">
                        <h1>You are welcome to wafid services company</h1>
                        <p>You are requested to fulfill your requirements to complete your process. When your
                            requirement will be 100% successfull submision,we will check your documents and will make
                            sure your process </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-info-wrap">
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('message')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
 
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\wafid-job\resources\views/website/view-resume.blade.php ENDPATH**/ ?>