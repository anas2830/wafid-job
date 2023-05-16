

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content" style="margin-left: 3%">

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

        <form action="<?php echo e(route('user.template-update', ['id' => $user_tempalte_info->id])); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <h3 class="text-center p-2">Template name</h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="ml-3 mr-3">
                        <input type="text" class="form-control website_template_info<?php echo e($admin_template_info->template_slug); ?>_website_name" name="website_template_info[<?php echo e($admin_template_info->template_slug); ?>_template_name]" value="<?php echo e($user_tempalte_info->user_template_name); ?>" />
                    </div>
                </div>
            </div>
            
            <div class="wrapper center-block pt-2 p-3">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                    <?php $__currentLoopData = $template_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $admin_template_section_id = DB::table('admin_template_section')->where('admin_template_section_id', $section)->first()->id;
                            $template_sections_details = DB::table('admin_template_section_details')
                            ->where('admin_template_id',$admin_template_id)
                            ->where('admin_template_section_id', $admin_template_section_id)
                            ->get();

                        ?>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo e($section); ?>">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($section); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($section); ?>">
                                    <?php echo e(Helper::getAdminTemplateMenuName($admin_template_id, $section)); ?>

                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo e($section); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo e($section); ?>">
                                <div class="panel-body pb-2">

                                    <input type="hidden" class="form-control" name="section_name[]" value="<?php echo e($section); ?>">

                                    <div class="row">
                                        <?php $__currentLoopData = $template_sections_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-sm-3 mt-2 float-left">
                                                    <?php switch($section_details->block_type):
                                                        case ('text'): ?>
                                                            <?php echo $__env->make('website.template-process.blockType.text', ['block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            <?php break; ?>
                                                        <?php case ('textarea'): ?>
                                                            <?php echo $__env->make('website.template-process.blockType.textarea', ['block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            <?php break; ?>
                                                        <?php case ('image'): ?>
                                                            <?php echo $__env->make('website.template-process.blockType.image', ['block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            <?php break; ?>
                                                        <?php default: ?>
                                                    <?php endswitch; ?>
                                                </div>
                                                
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                
                                </div>
                            </div>
                        </div>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <input type="submit" class="btn btn-success" value="submit" />

                </div>
            </div>

        </form>


    </div>
</div>
<!-- /.content-wrapper -->


<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    
    <style>

        .panel-body{
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .content-wrapper {
            background-color: transparent;
        }

        .panel-heading {
            padding: 0;
            border:0;
        }
        .panel-title>a, .panel-title>a:active{
            display:block;
            padding:15px;
            color:#555;
            font-size:16px;
            font-weight:bold;
            text-transform:uppercase;
            letter-spacing:1px;
            word-spacing:3px;
            text-decoration:none;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f4f6f9
        }
        .panel-heading  a:before {
            font-family: 'Glyphicons Halflings';
            content: ">";
            float: right;
            transition: all 0.5s;
        }
        .panel-heading.active a:before {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        } 
    </style>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('javascript'); ?>

    <script>
        $( document ).ready(function() {

            $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
            });
    
            $('.panel-collapse').on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/dashboard/template/update.blade.php ENDPATH**/ ?>