

<?php $__env->startSection('content'); ?>
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update About Us Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Website</a></li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if(session('message')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(Session::get('message')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e(Session::get('error')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <form action="<?php echo e(route('about-us')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">What We do?</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="we_do_content" rows="5"><?php echo $about_us_seetings->we_do_content; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">For Candidates</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="candidates_content" rows="5"><?php echo $about_us_seetings->candidates_content; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">For Employers</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="employers_content" rows="5"><?php echo $about_us_seetings->employers_content; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </section>

    </div>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>

<script type="text/javascript">

    
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/super-admin/website/about-us.blade.php ENDPATH**/ ?>