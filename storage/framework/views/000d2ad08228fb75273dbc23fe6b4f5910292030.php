<label class="fw-bold"><?php echo e($block_label); ?></label>
<textarea class="form-control website_template_info" rows="4" cols="50" name="website_template_info[<?php echo e($block_class_name); ?>]"><?php if(isset($website_template_info[$block_class_name])): ?> <?php echo $website_template_info[$block_class_name]; ?> <?php endif; ?></textarea><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/template-process/blockType/textarea.blade.php ENDPATH**/ ?>