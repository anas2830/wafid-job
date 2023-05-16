<?php if($template_name_exists): ?>
    This template name already exists . please use another template name
<?php else: ?> 
    <div class="row">
        <div class="col-lg-12">
            <input type="hidden" name="template_id" value="<?php echo e($template_info->id); ?>" />
            <div class="preview-content-wrap">
                <div class="preview-text-wrap">
                    <h5><span>Now preview</span> your section</h5>
                    <p>Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam cupiditate veritatis in accusamus quisquam.a</p>
                </div>
                <div class="preview-img-wrap">
                    <!-- <div class="preview-img">
                        <img class="img-fluid" src="<?php echo e(asset('uploads/images/preview-bg.png')); ?>" class="preview" alt="preview">
                    </div>
                    <div class="preview-template-img">
                        <img class="img-fluid"  src="<?php echo e(asset('uploads/images/preview-temp3.png')); ?>" class="preview" alt="preview"> 
                    </div> -->
                    <div class="inner-wrapper">
                        <div class="desktop-wrapper">
                            <div class="desktop-inner">
                                <iframe id="frame" src="<?php echo e(route('public-template-preview', ['slug' => $template_info->template_url])); ?>" width="600" height="342"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/template-process/steps/third.blade.php ENDPATH**/ ?>