<table class="table table-bordered table-hover datatable-highlight data-list" id="templateTable">
    <thead>
        <tr>
            <th width="10%">SL.</th>
            <th width="30%">Menu name</th>
            <th width="30%">Section Name</th>
            <th width="30%">Section Id</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($all_sections)>0): ?>
            <?php $__currentLoopData = $all_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($section->admin_template_menu_name); ?></td>
                    <td><?php echo e($section->admin_template_section_name); ?></td>
                    <td><?php echo e($section->admin_template_section_id); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
            <tr>
                <td>No Sections</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/super-admin/template/viewSections.blade.php ENDPATH**/ ?>