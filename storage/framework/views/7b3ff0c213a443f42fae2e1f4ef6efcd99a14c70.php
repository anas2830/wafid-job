<label class="fw-bold"><?php echo e($block_label); ?></label>
<input type="file" title="<?php echo e($block_class_name); ?>" class="form-control image" />
<input type="hidden" class="blob_image website_template_info" name="website_template_info['img'][<?php echo e($block_class_name); ?>]" <?php if(isset($website_template_info["'img'"][$block_class_name])): ?> value="<?php echo e($website_template_info["'img'"][$block_class_name]); ?>" <?php endif; ?> />

<?php if(isset($website_template_info["'img'"][$block_class_name])): ?>
    <div class="preview_image" style="display: flex; margin-bottom:5%;margin-top:4px">
        <img src="<?php echo e($website_template_info["'img'"][$block_class_name]); ?>" style="height:100px;width:100px"/>
    </div>
<?php else: ?> 
    <div class="preview_image" style="display: flex; margin-bottom:5%"></div>
<?php endif; ?>

<script src="<?php echo e(asset('super-admin')); ?>/plugins/jquery/jquery.min.js"></script>

<script>

    $('.image').on('change', function(e){
        previewImage( this );
    });

    function previewImage( image )
    {
        var fileImage   = image.files[0];
        var reader      = new FileReader();
        reader.addEventListener( "load", function() {
            $(image).addClass('hiii');
            $(image).next('.blob_image').val(reader.result);
            $(image).next().next('.preview_image').html('<img src='+reader.result+' style="height:100px;width:100px">');

        }, false );

        if ( fileImage )
        {
            reader.readAsDataURL( fileImage );
        }
    }

</script><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/template-process/blockType/image.blade.php ENDPATH**/ ?>