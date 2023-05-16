

<?php $__env->startSection('content'); ?>

    
    <div class="profile-wraper">
        <div class="pageHeading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="heading-page">
                            <h1>You are welcome to wafid services</h1>
                            <p class="text-center">They are under Visa Processing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white" style="margin:4% 0%">
        <div class="container">
          <div class="row">
            <?php $__currentLoopData = $processing_candidate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 mb-4">
                    <div class="profile-photo-wrap align-self-stretch">
                        <div class="avatar-upload">
                            <div class="avatar-preview">
                                <?php if(isset($user->photo_name)): ?>
                                    <div id="imagePreview" style="background-image: url(../../uploads/userProfile/<?php echo e($user->photo_name); ?>);"></div>
                                <?php else: ?> 
                                    <div id="imagePreview" style="background-image: url(../../uploads/bg/profileDummy.jpg);"></div>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="profile-persone-info">
                            <p><strong>Id Number:</strong><?php echo e($user->id_number); ?></p>
                            <p><strong>Name:</strong><?php echo e($user->name); ?></p>
                            <p><strong>Job Title:</strong><?php echo e($user->job_title); ?></p>
                            <p><strong>From:</strong><?php echo e($user->from_country); ?></p>
                            <p><strong>To:</strong><?php echo e($user->to_country); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php echo e($processing_candidate->links()); ?> 
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/website/processing_candidate.blade.php ENDPATH**/ ?>