

<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <h1>Dashboard</h1>
        
        <?php if(session('resent')): ?>
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        <?php endif; ?>

        Before proceeding, please check your email for a verification link. If you did not receive the email,
        <form action="<?php echo e(route('verification.resend')); ?>" method="POST" class="d-inline">
            <?php echo csrf_field(); ?>
            <button type="submit" class="d-inline btn btn-link p-0">
                click here to request another
            </button>.
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/verification/notice.blade.php ENDPATH**/ ?>