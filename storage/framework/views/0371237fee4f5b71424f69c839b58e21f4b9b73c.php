<style>
.modal-dialog {
    max-width: 700px;
}
</style>
<form class="form-horizontal form-validate-jquery" action="<?php echo e(url('offers', [$offers->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <div class="panel panel-flat">
        <div class="panel-body" id="modal-container">

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right required">Name</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus value="<?php echo e(@$offers->name); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right required">Description</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="short_desc" required autocomplete="name" autofocus value="<?php echo e(@$offers->short_desc); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Points</label>
                <div class="col-md-10">
                    <textarea class="summernote" class="form-control" name="points"><?php echo $offers->points; ?></textarea>
                </div>
            </div>

        </div>
    </div>
</form>

<script type="text/javascript">
	 $(document).ready(function() {
        $('.summernote').summernote({
            tabsize: 2,
            height: 200,
        });
    });
</script><?php /**PATH C:\laragon\www\wafid\resources\views/super-admin/offers/edit.blade.php ENDPATH**/ ?>