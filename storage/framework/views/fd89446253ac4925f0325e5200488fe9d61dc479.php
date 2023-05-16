<?php $__env->startSection('content'); ?>

<div class="profile-wraper">
    <div class="pageHeading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading-page">
                        <h1>You are welcome to wafid services</h1>
                        <p>You are requested to fulfill your requirements to complete your process. When your
                            requirement will be 100% successfull submision,we will check your documents and will make
                            sure your process </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-info-wrap">
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('message')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row">
            <form action="<?php echo e(route('user-dashboard')); ?>" method="POST" enctype="multipart/form-data" style="display: contents;">
                <?php echo csrf_field(); ?>
                <div class="col-lg-4 col-md-4 d-flex pr-4">
                    <div class="profile-photo-wrap align-self-stretch">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="profile_photo" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <?php if(isset($userInfo->photo_name)): ?>
                                    <div id="imagePreview" style="background-image: url(../../uploads/userProfile/<?php echo e($userInfo->photo_name); ?>);"></div>
                                <?php else: ?> 
                                    <div id="imagePreview" style="background-image: url(../../uploads/bg/profileDummy.jpg);"></div>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="profile-persone-info">
                            <p><strong>Name:</strong><?php echo e($userInfo->name); ?></p>
                            <p><strong>Job Title:</strong><?php echo e($userInfo->job_title); ?></p>
                            <p><strong>Id Number:</strong><?php echo e($userInfo->id_number); ?></p>
                            <p><strong>From:</strong><?php echo e($userInfo->from_country); ?></p>
                            <p><strong>To:</strong><?php echo e($userInfo->to_country); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 d-flex pl-4">
                    <div class="profile-all-wrap align-self-stretch">
                        <div class="progressbar">
                            <div class="progress-bar" data-percentage="55%">
                                <h4 class="progress-title-holder">
                                    <!-- <span class="progress-title">Photoshop</span> -->
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h4>
                                <?php 
                                $user_complete_step = $userInfo->complete_step;
                                $percent = $user_complete_step * 25;
                                ?> 
                                <div id="myProgress" style="background:#c5c1c1">
                                    <div id="myBar" style="width: <?php echo e($percent); ?>%;height: 30px;background-color: #04AA6D;text-align: center;line-height: 30px;color: white;"><?php echo e($percent); ?>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-input-wrap">
                            <div class="mb-3 mt-3">
                                <label for="passportCopyUpload" class="form-label">Step-1:Upload Passport Copy and Job
                                    Information <span class="help-block">( <code>extension: pdf, doc, docx )</code></span></label>
                                <input class="form-control" type="file" id="passportCopyUpload" name="passport_copy">
                                <?php if(isset($userDocument) && isset($userDocument->passport_original_name)): ?>
                                    <span style="color:#16a549"><?php echo e(@$userDocument->passport_original_name); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="medicalReportUpload" class="form-label">Step-2:Upload medical test report,police
                                    clearance and necessary documents <span class="help-block">( <code>extension: pdf, doc, docx )</code></span></label>
                                <input class="form-control" type="file" id="medicalReportUpload" name="medical_test[]" multiple>
                                <?php if(count($userMedicalDocument) > 0 ): ?>
                                    <?php $__currentLoopData = $userMedicalDocument; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medical_document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span style="color:#16a549"><?php echo e(@$medical_document->medical_original_name); ?></span></br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="bankTransferDocument" class="form-label">Step-3:Pay Your Service fee and Upload
                                    Bank receipt here. <span class="help-block">( <code>extension: pdf, doc, docx )</code></span></label>
                                <input class="form-control" type="file" id="bankTransferDocument" name="bank_receipt">
                                <?php if(isset($userDocument) && isset($userDocument->bank_original_name)): ?>
                                    <span style="color:#16a549"><?php echo e(@$userDocument->bank_original_name); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="update-info-btn-wrap">
                                <button class="btn" type="submit" id="upDateInfo" style="background: #16a549;color:white">Update Info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#blogTable').DataTable();
});

$("#updateProfile").submit(function(e) {
    e.preventDefault();
    var form = document.getElementById('updateProfile');
    var formdata = new FormData(form);

    $.ajax({
        type: "POST",
        url: "/profileUpdate",
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('#token').val()
        },
        data: formdata,
        success: function(data) {
            console.log('success');
            console.log(data);
            console.log(data.msgtype);

            if (data.msgtype == "success") {
                $('#Msg').removeClass('alert-danger');
                $('#Msg').addClass('alert-success');
                $('#text').text(data.messege);
                $('#Msg').show();
            } else {
                $('#Msg').removeClass('alert-success');
                $('#Msg').addClass('alert-danger');
                $('#text').text(data.messege);
                $('#Msg').show();
            }
        },
        error: function(response) {
            console.log('error');
            $('#nameErrorMsg').text(response.responseJSON.errors.name);
            $('#passwordErrorMsg').text(response.responseJSON.errors.password);
        }
    });
});
</script>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wafid\resources\views/website/dashboard.blade.php ENDPATH**/ ?>