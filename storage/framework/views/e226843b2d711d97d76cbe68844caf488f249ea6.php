<table class="table table-bordered table-hover datatable-highlight data-list" id="offersTable">
    <thead>
        <tr>
            <th width="30%">Passport Copy</th>
            <th width="30%">Medical Report</th>
            <th width="30%">Bank Receipt</th>
        </tr>
    </thead>
    <tbody>

        <?php if(empty($user_documents)): ?>
            <tr>
                <td colspan="3">No Documents Here</td>
            </tr>
        <?php else: ?> 
            <tr>
                <td>
                    <?php if(isset($user_documents->passport_name)): ?>
                        <a target="_blank" href="<?php echo e(asset('uploads/userDocument/'.$user_documents->passport_name)); ?>" download><?php echo e($user_documents->passport_original_name); ?></a>
                    <?php else: ?> 
                        No File Found
                    <?php endif; ?>
                </td>
                <td>
                    <?php if(count($user_medical_document) > 0): ?>
                        <?php $__currentLoopData = $user_medical_document; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a target="_blank" href="<?php echo e(asset('uploads/userDocument/'.$document->medical_name)); ?>" download><?php echo e($document->medical_original_name); ?></a> </br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?> 
                        No File Found
                    <?php endif; ?>
                </td>
                <td>
                    <?php if(isset($user_documents->bank_name)): ?>
                        <a target="_blank" href="<?php echo e(asset('uploads/userDocument/'.$user_documents->bank_name)); ?>" download><?php echo e($user_documents->bank_original_name); ?></a>
                    <?php else: ?> 
                        No File Found
                    <?php endif; ?>
                </td>
            </tr> 
        <?php endif; ?>
       
    </tbody>
</table><?php /**PATH C:\laragon\www\wafid\resources\views/super-admin/user/documentList.blade.php ENDPATH**/ ?>