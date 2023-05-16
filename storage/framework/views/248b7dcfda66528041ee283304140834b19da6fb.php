  
  

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
                    <button type="button" class="btn btn-info btn-xs open-modal" modal-title="Create Template" modal-type="create" modal-size="large" modal-class="lg" selector="Template" modal-link="<?php echo e(route('admin.template-create')); ?>" style="margin-bottom:2%; padding:5px"> Add New Template </button>
                </div> 

                <table class="table table-bordered table-hover datatable-highlight data-list" id="templateTable">
                    <thead>
                        <tr>
                            <th width="3%">SL.</th>
                            <th width="20%">Title</th>
                            <th width="10%">Thumbnail</th>
                            <th width="30%">Section</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(count($all_templates) > 0): ?>
                            <?php $__currentLoopData = $all_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($template->template_name); ?></td>
                                <td>
                                    <img src="<?php echo e(asset($template->photo_full_path)); ?>" style="width:200px; height:150px"/>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs open-modal" modal-title="View Sections" modal-type="show" modal-size="large" modal-class="lg" selector="TemplateSection" modal-link="<?php echo e(route('admin.view-template-section', ['id' => $template->id])); ?>" style="margin-bottom:2%; padding:5px"> Sections </button>
                                </td>
                                
                                
                            </tr> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No Data Found!</td>
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
        $('#templateTable').DataTable();
      });
    </script>
  <?php $__env->stopPush(); ?>

  

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/super-admin/template/listData.blade.php ENDPATH**/ ?>