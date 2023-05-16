<?php $__env->startSection('content'); ?>
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container">
              <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card" style="margin:4% 0%">
                        <input type="hidden" value="<?php echo e($authRole); ?>" id="authRole" />

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

                        <div class="card-header">Please fill up required fields</div>
                        <div class="card-body">
                            <form action="<?php echo e(route('adminProfileUpdate')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right required">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e($userInfo->name); ?>" required autocomplete="name" autofocus>
                                        <span class="text-danger" id="nameErrorMsg"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right required"><?php echo e(__('Password')); ?></label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                        <span class="text-danger" id="passwordErrorMsg"></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label text-md-right required"><?php echo e(__('Confirm Password')); ?></label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3 text-md-right">Photo </label>
                                    <div class="col-md-6">
                                        <?php if($userInfo->photo_name != null): ?>
                                            <img src="<?php echo e(asset('uploads/adminProfile/thumb/'.Auth::user()->photo_name)); ?>" />
                                            <p>If you want to change this please choose</p>
                                        <?php endif; ?>

                                        <input type="file" class="file-input" name="photo"> </br>
                                        <span class="help-block">Allow extensions: <code>jpg/jpeg</code> , <code>png</code>,and  Allow Size: <code>512 KB</code> Only</span> </br>
                                        <span class="text-danger" id="photoErrorMsg"></span>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            Update Profile
                                        </button>
                                    </div>
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

    //  $("#updateProfile").submit(function(e) {
    //       e.preventDefault();
    //       var form = document.getElementById('updateProfile');
    //       var formdata = new FormData(form);
    //       if($('#authRole').val() =="admin"){
    //         var url = "/adminProfileUpdate";
    //       }else{
    //         var url = "/moderatorProfileUpdate";
    //       }

    //       $.ajax({
    //           type: "POST",
    //           url: url,
    //           processData: false,
    //           contentType: false,
    //           headers: { 'X-CSRF-TOKEN': $('#token').val() },
    //           data: formdata,
    //           success: function(data) {
    //               console.log('success');
    //               console.log(data);
    //               console.log(data.msgtype);

    //               if(data.msgtype == "success"){
    //                   $('#Msg').removeClass('alert-danger');
    //                   $('#Msg').addClass('alert-success');
    //                   $('#text').text(data.messege);
    //                   $('#Msg').show();
    //                   setTimeout(function(){ 
    //                         location.reload();
    //                     }, 1000);
    //               }else{
    //                   $('#Msg').removeClass('alert-success');
    //                   $('#Msg').addClass('alert-danger');
    //                   $('#text').text(data.messege);
    //                   $('#Msg').show();
    //               }
    //           },
    //           error: function(response) {
    //               console.log('error');
    //               $('#nameErrorMsg').text(response.responseJSON.errors.name);
    //               $('#userNameErrorMsg').text(response.responseJSON.errors.userName);
    //               $('#passwordErrorMsg').text(response.responseJSON.errors.password);
    //               $('#photoErrorMsg').text(response.responseJSON.errors.photo);
    //           }
    //       });
    //   });
    
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/super-admin/profile.blade.php ENDPATH**/ ?>