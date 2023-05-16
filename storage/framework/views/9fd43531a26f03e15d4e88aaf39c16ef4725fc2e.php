  
  

  <?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="" style="padding:2%">

                <?php if(session('msgType')): ?>
                    <?php if(session('msgType') == 'danger'): ?>
                      <div id="msgDiv" class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold"><?php echo e(session('msgType')); ?>!</span> <?php echo e(session('messege')); ?>

                      </div>
                    <?php else: ?>
                      <div id="msgDiv" class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold"><?php echo e(session('msgType')); ?>!</span> <?php echo e(session('messege')); ?>

                      </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="alert alert-danger alert-styled-left alert-bordered">
                          <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                          <span class="text-semibold">Opps!</span> <?php echo e($error); ?>.
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                

                <table class="table table-bordered table-hover datatable-highlight data-list" id="offersTable">
                    <thead>
                        <tr>
                            <th width="5%">SL.</th>
                            <th width="10%">ID Number</th>
                            <th width="10%">Name</th>
                            <th width="10%">Email</th>
                            <th width="10%">Job Title</th>
                            <th width="20%">Offer</th>
                            <th width="10%">Country</th>
                            <th width="10%">Destination</th>
                            <th width="5%">Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(count($users) > 0): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($user->id_number); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->job_title); ?></td>
                                <td><?php echo e(Helper::offerName($user->offer_id)); ?></td>
                                <td><?php echo e($user->from_country); ?></td>
                                <td><?php echo e($user->to_country); ?></td>
                                <td>
                                    <?php if($user->complete_step == 4): ?>
                                      <span class="right badge badge-success"> Complete </span>
                                    <?php else: ?> 
                                      <span class="right badge badge-warning"> Processing </span>
                                    <?php endif; ?> 
                                </td>
                                <td>
                                  <a href="#" class="open-modal action-icon" modal-title="Show Document" modal-type="show" modal-size="large" modal-class="" selector="userDocument" modal-link="<?php echo e(url('user-document/'.$user->id)); ?> ">
                                    Documents | 
                                  </a>
                                  <a href="#" class="action-icon"><i class="icon-trash" id="delete" delete-link="<?php echo e(url('delete-user', [$user->id])); ?>"><?php echo csrf_field(); ?> </i></a>
                                </td>
                            </tr> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9">No Data Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
          </div>
        </div>


    </div>
    <!-- /.content-wrapper -->


  <?php $__env->stopSection(); ?>


  <?php $__env->startPush('javascript'); ?>

    <script type="text/javascript">
      $(document).ready( function () {
        $('#offersTable').DataTable();
      });
    </script>
  <?php $__env->stopPush(); ?>

  

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/super-admin/user/listData.blade.php ENDPATH**/ ?>