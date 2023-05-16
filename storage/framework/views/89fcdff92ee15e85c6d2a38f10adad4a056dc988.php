  
  

  <?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Template List</h1>
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

                <div class="data-list text-right">
                    <button type="button" class="btn btn-info btn-xs open-modal" modal-title="Create Plan" modal-type="create" modal-size="medium" modal-class="lg" selector="Plan" modal-link="<?php echo e(route('admin.plan-create')); ?>" style="margin-bottom:2%; padding:5px"> Add New Plan </button>
                </div> 

                <table class="table table-bordered table-hover datatable-highlight data-list" id="planTable">
                    <thead>
                        <tr>
                            <th width="3%">SL.</th>
                            <th width="20%">Plan Name</th>
                            <th width="10%">Plan Type</th>
                            <th width="10%">Trail Date</th>
                            <th width="3%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(count($all_plans) > 0): ?>
                            <?php $__currentLoopData = $all_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($plan->plan_name); ?></td>
                                <td>
                                    <?php if($plan->plan_type == 1): ?>
                                        <span class="badge bg-info text-dark">Monthly</span>
                                    <?php else: ?> 
                                        <span class="badge bg-info text-dark">Yearly</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($plan->trial_days); ?>

                                </td>
                                <td class="text-center">
                                    <a href="#" class="open-modal action-icon" modal-title="Update Plan" modal-type="update" modal-size="medium" modal-class="" selector="ModeratorUpdate" modal-link="<?php echo e(url('admin/edit-plan/'.$plan->id.'/edit')); ?>"><i class="icon-pencil"></i></a>
                                    
                                    <a href="#" class="action-icon"><i class="icon-trash" id="delete" delete-link="<?php echo e(url('admin/delete-plan', [$plan->id])); ?>"><?php echo csrf_field(); ?> </i></a>
                                </td>
                            </tr> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No Data Found!</td>
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
        $('#planTable').DataTable();
      });
    </script>
  <?php $__env->stopPush(); ?>

  

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/super-admin/plan/listData.blade.php ENDPATH**/ ?>