<div class="row">

    <input type="hidden" name="template_id" value="<?php echo e($template_info->id); ?>" />


    <?php $__currentLoopData = $template_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
            $template_sections_details = DB::table('admin_template_section_details')
            ->where('admin_template_id',$template_info->id)
            ->where('admin_template_section_id', $section->id)
            ->get();
        ?>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo e($section->admin_template_section_id); ?>" aria-expanded="false" aria-controls="<?php echo e($section->admin_template_section_id); ?>">
                        <?php echo e($section->admin_template_section_name); ?>

                    </button>
                </h2>

                <div id="<?php echo e($section->admin_template_section_id); ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="row">
                            <?php $__currentLoopData = $template_sections_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-sm-3 mt-2">
                                    <?php switch($section_details->block_type):
                                        case ('text'): ?>
                                            <?php echo $__env->make('website.template-process.blockType.text', ['website_template_slug' => $template_info->template_slug, 'block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php break; ?>
                                        <?php case ('textarea'): ?>
                                            <?php echo $__env->make('website.template-process.blockType.textarea', ['website_template_slug' => $template_info->template_slug, 'block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php break; ?>
                                        <?php case ('image'): ?>
                                            <?php echo $__env->make('website.template-process.blockType.image', ['website_template_slug' => $template_info->template_slug, 'block_class_name' => $section_details->block_class_name, 'block_label' => $section_details->block_level, 'website_template_info' => $website_template_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php break; ?>
                                        <?php default: ?>
                                    <?php endswitch; ?>
                                </div>
            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/template-process/steps/second.blade.php ENDPATH**/ ?>