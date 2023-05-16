<?php $__env->startSection('content'); ?>

    <div class="profile-wraper">
        <div class="pageHeading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="heading-page">
                            <h1>You are welcome to wafid services</h1>
                            <p class="text-center">You are requested to register in our website to get our services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center m-0">
            <div class="col-md-12">
                <div class="card" style="margin:4% 0%">
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
                    <div class="card-header">Please fill up required fields</div>
                    <div class="card-body">
                        <form action="<?php echo e(route('profileUpdate')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row col-md-12 p-0">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right required p-0">Full Name</label>
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" required autocomplete="name" autofocus placeholder="Eneter your full name" value="<?php echo e($userInfo->name); ?>">
                                            <span class="text-danger" id="nameErrorMsg"></span>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right p-0 required"><?php echo e(__('Password')); ?></label>
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="new-password" required>
                                            <span class="text-danger" id="passwordErrorMsg"></span> 
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0">Present Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="present_address"><?php echo $userInfo->present_address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0 required">Your Country</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="country" required value="<?php echo e($userInfo->from_country); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="job_title" class="col-md-4 col-form-label text-md-right p-0">Job Title</label>
                                        <div class="col-md-8">
                                            <input id="job_title" type="text" class="form-control"  name="job_title" placeholder="Enter your job title" autofocus value="<?php echo e($userInfo->job_title); ?>"> 
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0 required">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right p-0">Permanent Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="permanent_address"><?php echo $userInfo->permanent_address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right required p-0">Destination Country</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="destination_country" required placeholder="Where you want to go" value="<?php echo e($userInfo->to_country); ?>">
                                        </div>
                                    </div>
                         
                                </div>

                            </div>

                            <div class="form-group row mb-0" style="justify-content: center;margin:2% 0;">
                                <button type="submit" class="btn btn-primary" style="background: #16a549;">
                                    Update Profile
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>

<script type="text/javascript">

    // $("#updateProfile").submit(function(e) {
    //     e.preventDefault();
    //     var form = document.getElementById('updateProfile');
    //     var formdata = new FormData(form);

    //     $.ajax({
    //         type: "POST",
    //         url: "/profileUpdate",
    //         processData: false,
    //         contentType: false,
    //         headers: {
    //             'X-CSRF-TOKEN': $('#token').val()
    //         },
    //         data: formdata,
    //         success: function(data) {
    //             console.log('success');
    //             console.log(data);
    //             console.log(data.msgtype);

    //             if (data.msgtype == "success") {
    //                 $('#Msg').removeClass('alert-danger');
    //                 $('#Msg').addClass('alert-success');
    //                 $('#text').text(data.messege);
    //                 $('#Msg').show();
    //             } else {
    //                 $('#Msg').removeClass('alert-success');
    //                 $('#Msg').addClass('alert-danger');
    //                 $('#text').text(data.messege);
    //                 $('#Msg').show();
    //             }
    //         },
    //         error: function(response) {
    //             console.log('error');
    //             $('#nameErrorMsg').text(response.responseJSON.errors.name);
    //             $('#passwordErrorMsg').text(response.responseJSON.errors.password);
    //         }
    //     });
    // });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/website/profile.blade.php ENDPATH**/ ?>