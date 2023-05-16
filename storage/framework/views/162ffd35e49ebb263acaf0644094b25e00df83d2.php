

<?php $__env->startPush('header'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<style>
.wizard-content .wizard>.steps>ul>li:after,
.wizard-content .wizard>.steps>ul>li:before {
    content: '';
    z-index: 9;
    display: block;
    position: absolute
}

.wizard-content .wizard {
    width: 100%;
    overflow: hidden
}

.wizard-content .wizard .content {
    margin-left: 0 !important
}

.wizard-content .wizard>.steps {
    position: relative;
    display: block;
    width: 100%
}

.wizard-content .wizard>.steps .current-info {
    position: absolute;
    left: -99999px
}

.wizard-content .wizard>.steps>ul {
    display: table;
    width: 100%;
    table-layout: fixed;
    margin: 0;
    padding: 0;
    list-style: none
}

.wizard-content .wizard>.steps>ul>li {
    display: table-cell;
    width: auto;
    vertical-align: top;
    text-align: center;
    position: relative
}

.wizard-content .wizard>.steps>ul>li a {
    position: relative;
    padding-top: 52px;
    margin-top: 20px;
    margin-bottom: 20px;
    display: block
}

.wizard-content .wizard>.steps>ul>li:before {
    left: 0
}

.wizard-content .wizard>.steps>ul>li:after {
    right: 0
}

.wizard-content .wizard>.steps>ul>li:first-child:before,
.wizard-content .wizard>.steps>ul>li:last-child:after {
    content: none
}

.wizard-content .wizard>.steps>ul>li.current>a {
    color: #2f3d4a;
    cursor: default
}

.wizard-content .wizard>.steps>ul>li.current .step {
    border-color: #009efb;
    background-color: #fff;
    color: #009efb
}

.wizard-content .wizard>.steps>ul>li.disabled a,
.wizard-content .wizard>.steps>ul>li.disabled a:focus,
.wizard-content .wizard>.steps>ul>li.disabled a:hover {
    color: #999;
    cursor: default
}

.wizard-content .wizard>.steps>ul>li.done a,
.wizard-content .wizard>.steps>ul>li.done a:focus,
.wizard-content .wizard>.steps>ul>li.done a:hover {
    color: #999
}

.wizard-content .wizard>.steps>ul>li.done .step {
    background-color: #009efb;
    border-color: #009efb;
    color: #fff
}

.wizard-content .wizard>.steps>ul>li.error .step {
    border-color: #f62d51;
    color: #f62d51
}

.wizard-content .wizard>.steps .step {
    background-color: #fff;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -24px;
    z-index: 10;
    text-align: center
}

.wizard-content .wizard>.content {
    overflow: hidden;
    position: relative;
    width: auto;
    padding: 0;
    margin: 0
}

.wizard-content .wizard>.content>.title {
    position: absolute;
    left: -99999px
}

.wizard-content .wizard>.content>.body {
    padding: 0 20px
}

.wizard-content .wizard>.content>iframe {
    border: 0;
    width: 100%;
    height: 100%
}

.wizard-content .wizard>.actions {
    position: relative;
    display: block;
    text-align: right;
    padding: 0 20px 20px
}

.wizard-content .wizard>.actions>ul {
    float: right;
    list-style: none;
    padding: 0;
    margin: 0
}

.wizard-content .wizard>.actions>ul:after {
    content: '';
    display: table;
    clear: both
}

.wizard-content .wizard>.actions>ul>li {
    float: left
}

.wizard-content .wizard>.actions>ul>li+li {
    margin-left: 10px
}

.wizard-content .wizard>.actions>ul>li>a {
    background: #009efb;
    color: #fff;
    display: block;
    padding: 7px 12px;
    border-radius: 4px;
    border: 1px solid transparent
}

.wizard-content .wizard>.actions>ul>li>a:focus,
.wizard-content .wizard>.actions>ul>li>a:hover {
    -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset;
    box-shadow: 0 0 0 100px rgba(0, 0, 0, .05) inset
}

.wizard-content .wizard>.actions>ul>li>a:active {
    -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset;
    box-shadow: 0 0 0 100px rgba(0, 0, 0, .1) inset
}

.wizard-content .wizard>.actions>ul>li>a[href="#previous"] {
    background-color: #fff;
    color: #333;
    border: 1px solid #d9d9d9
}

.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:focus,
.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:hover {
    -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset;
    box-shadow: 0 0 0 100px rgba(0, 0, 0, .02) inset
}

.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:active {
    -webkit-box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset;
    box-shadow: 0 0 0 100px rgba(0, 0, 0, .04) inset
}

.wizard-content .wizard>.actions>ul>li.disabled>a,
.wizard-content .wizard>.actions>ul>li.disabled>a:focus,
.wizard-content .wizard>.actions>ul>li.disabled>a:hover {
    color: #999
}

.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"],
.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus,
.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover {
    -webkit-box-shadow: none;
    box-shadow: none
}

.wizard-content .wizard.wizard-circle>.steps>ul>li:after,
.wizard-content .wizard.wizard-circle>.steps>ul>li:before {
    top: 45px;
    width: 50%;
    height: 3px;
    background-color: ##1363DE;
}

.wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,
.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,
.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before {
    background-color: #F3F3F3
}

.wizard-content .wizard.wizard-circle>.steps .step {
    width: 50px;
    height: 50px;
    line-height: 45px;
    border: 3px solid #F3F3F3;
    font-size: 1.3rem;
    border-radius: 50%
}

.wizard-content .wizard.wizard-notification>.steps>ul>li:after,
.wizard-content .wizard.wizard-notification>.steps>ul>li:before {
    top: 39px;
    width: 50%;
    height: 2px;
    background-color: #009efb
}

.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step {
    border: 2px solid #009efb;
    color: #009efb;
    line-height: 36px
}

.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step:after,
.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step:after {
    border-top-color: #009efb
}

.wizard-content .wizard.wizard-notification>.steps>ul>li.current:after,
.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:after,
.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:before {
    background-color: #F3F3F3
}

.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step {
    color: #FFF
}

.wizard-content .wizard.wizard-notification>.steps .step {
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 1.3rem;
    border-radius: 15%;
    background-color: #F3F3F3
}

.wizard-content .wizard.wizard-notification>.steps .step:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 0;
    left: 50%;
    margin-left: -8px;
    margin-bottom: -8px;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 8px solid #F3F3F3
}

.wizard-content .wizard.vertical>.steps {
    display: inline;
    float: left;
    width: 20%
}

.wizard-content .wizard.vertical>.steps>ul>li {
    display: block;
    width: 100%
}

.wizard-content .wizard.vertical>.steps>ul>li.current:after,
.wizard-content .wizard.vertical>.steps>ul>li.current:before,
.wizard-content .wizard.vertical>.steps>ul>li.current~li:after,
.wizard-content .wizard.vertical>.steps>ul>li.current~li:before,
.wizard-content .wizard.vertical>.steps>ul>li:after,
.wizard-content .wizard.vertical>.steps>ul>li:before {
    background-color: transparent
}

@media (max-width:768px) {
    .wizard-content .wizard>.steps>ul {
        margin-bottom: 20px
    }

    .wizard-content .wizard>.steps>ul>li {
        display: block;
        float: left;
        width: 50%
    }

    .wizard-content .wizard>.steps>ul>li>a {
        margin-bottom: 0
    }

    .wizard-content .wizard>.steps>ul>li:first-child:before {
        content: ''
    }

    .wizard-content .wizard>.steps>ul>li:last-child:after {
        content: '';
        background-color: #009efb
    }

    .wizard-content .wizard.vertical>.steps {
        width: 15%
    }
}

@media (max-width:480px) {
    .wizard-content .wizard>.steps>ul>li {
        width: 100%
    }

    .wizard-content .wizard>.steps>ul>li.current:after {
        background-color: #009efb
    }

    .wizard-content .wizard.vertical>.steps>ul>li {
        display: block;
        float: left;
        width: 50%
    }

    .wizard-content .wizard.vertical>.steps {
        width: 100%;
        float: none;
    }
}

.loader-bg {
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999999999;
}

.loader-bg h3 {
    position: fixed;
    color: #ff5e31;
    font-size: 24px;
}

.loader {
    width: 3em;
    height: 3em;
    font-size: 22px;
    box-sizing: border-box;
    border-top: 0.3em solid #505050;
    border-radius: 50%;
    position: relative;
    animation: rotating 2s ease-in-out infinite;
    --direction: 1;
}

.loader span {
    position: absolute;
    color: #FF5E31;
    width: inherit;
    height: inherit;
    text-align: center;
    line-height: 10em;
    font-family: sans-serif;
    animation: rotating 2s linear infinite;
}

.loader::before,
.loader::after {
    content: '';
    position: absolute;
    width: inherit;
    height: inherit;
    border-radius: 50%;
    box-sizing: border-box;
    top: -0.2em;
}

.loader:::before {
    border-top: 0.3em solid dodgerblue;
    transform: rotate(120deg);
}

.loader::after {
    border-top: 0.3em solid #ff5e31;
    transform: rotate(240deg);
}

@keyframes rotating {
    50% {
        transform: rotate(calc(180deg));
    }

    100% {
        transform: rotate(calc(360deg));
    }
}

.accordion-button {
    /* background: #ccc; */
    margin-bottom: 2%;
    border:1px solid #1363DE;
    font-size: 14px;
    font-weight: 700;
}
.accordion-button:focus {
	/* border:none; */
	box-shadow:none;
}
.accordion-item {
    margin-bottom: 2%;
}

.accordion-flush {
    padding: 0;
}

.accordion-body {
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
}
.accordion-body label {
	font-size: 14px;
	text-align: start;
	font-weight: 500 !important;
    color:#1363DE;
}
.content-wrapper {
    background-color: transparent;
}

.accordion-heading {
    padding: 0;
    border: 0;
}

.accordion-title>a,
.accordion-title>a:active {
    display: block;
    padding: 15px;
    color: #555;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    word-spacing: 3px;
    text-decoration: none;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f4f6f9
}

.accordion-heading a:before {
    font-family: 'Glyphicons Halflings';
    content: ">";
    float: right;
    transition: all 0.5s;
}

.accordion-heading.active a:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    transform: rotate(180deg);
}

.card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
    padding: 0px;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked+.card-input {
    box-shadow: 0 0 1px 1px #2ecc71;
}
</style>


<div class="overlay single-page">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="post-entry text-center">
                    <div class="container">
                        <div class="panel">
                            <div class="panel-body wizard-content">
                                <form id="example-form" action="#" method="POST"
                                    class="tab-wizard wizard-circle wizard clearfix" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="template_id" value="<?php echo e($template_info->id); ?>" />

                                    <h6>Basic Seetings</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="second-template-img">
                                                    <img src="<?php echo e(asset('uploads/images/second-template-bg.png')); ?>"
                                                        class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="second-template-form-wrap">
                                                    <h5>Imput your logo and title</h5>
                                                    <p>Fill in the demo. It will take a couple of minutes. You only need
                                                        your own content </p>
                                                    <div class="template-form-content">
                                                        <div class="title-input">
                                                            <label>Website title</label>
                                                            <input type="text" placeholder="Lorem simply"
                                                                class="website_template_info <?php echo e($template_info->template_slug); ?>_website_name"
                                                                name="website_template_info[<?php echo e($template_info->template_slug); ?>_template_name]"
                                                                <?php if(isset($website_template_info[$template_info->template_slug.'_template_name'])): ?>
                                                            value="<?php echo e($website_template_info[$template_info->template_slug.'_template_name']); ?>"
                                                            <?php endif; ?>
                                                            />
                                                        </div>
                                                        <div class="logo-upload">
                                                            <label>imput your logo</label>
                                                            <input type="file"
                                                                class="website_template_info <?php echo e($template_info->template_slug); ?>_website_logo image"
                                                                name="website_template_info[<?php echo e($template_info->template_slug); ?>_template_logo]" />
                                                            <input type="hidden"
                                                                class="blob_image website_template_info"
                                                                name="website_template_info['img'][template_logo]"
                                                                <?php if(isset($website_template_info["'img'"]['template_logo'])): ?>
                                                                value="<?php echo e($website_template_info["'img'"]['template_logo']); ?>"
                                                                <?php endif; ?> />

                                                            <?php if(isset($website_template_info["'img'"]['template_logo'])): ?>
                                                            <div class="preview_image"
                                                                style="display: flex; margin-bottom:5%;margin-top:4px">
                                                                <img src="<?php echo e($website_template_info["'img'"]['template_logo']); ?>"
                                                                    style="height:100px;width:100px" />
                                                            </div>
                                                            <?php else: ?>
                                                            <div class="preview_image"
                                                                style="display: flex; margin-bottom:5%"></div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <h6>Section Selection</h6>
                                    <section>
                                        <br />
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-push-4">
                                                <div class="remove-section">
                                                    <?php $__currentLoopData = $template_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group">
                                                        <input type="checkbox"
                                                            title="<?php echo e($section->admin_template_section_id); ?>"
                                                            class="section_name" name="section_name[]"
                                                            value="<?php echo e($section->id); ?>" checked>
                                                        <label
                                                            for="name-2"><?php echo e($section->admin_template_section_name); ?></label>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <h6>Section content Selection</h6>
                                    <section>

                                    </section>

                                    <h6>Template View</h6>
                                    <section>

                                    </section>
                                    <?php if(!Auth::user()): ?>
                                    <h6>Select Plan</h6>
                                    <section>

                                        <div class="row d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="plan-card-text">
                                                        <h5>Select <span>best plan</span> for you</h5>
                                                        <p>Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam cupiditate veritatis in accusamus quisquam.a</p>   
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-5 col-lg-5 col-sm-5">
                                                <label>
                                                <div class="plan-card">
                                                        <input type="radio" name="user_plan" class="card-input-element"
                                                            value="<?php echo e($plan->id); ?>" />
                                                        <div class="card card-default card-input">
                                                            <div class="plan-number">
                                                                <span><?php echo e($plan->plan_type); ?></span>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="card-body-text">
                                                                    <h5><?php echo e($plan->plan_name); ?><br><span>Showbizz</span></h5>
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                                                </div>
                                                                <div class="plan-fuature">
                                                                    <ul>
                                                                        <li>4 Lorem</li>
                                                                        <li>Lorem Ipsum</li>
                                                                        <li>Lorem Ipsum is simply text</li>
                                                                        <li>Lorem Ipsum is text</li>
                                                                        <li>Lorem Ipsum text</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="price">
                                                                    <p>Price: <?php echo e($plan->plan_price); ?></p>
                                                                    <p>Free Trial: <?php echo e($plan->trial_days); ?></p>
                                                                </div>
                                                                </br>
                                                                <div class="go-btn-wrap">
                                                                    <span>Select Plan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                </label>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                    </section>
                                    <?php endif; ?>

                                    <h6>Finish</h6>
                                    <section>
                                        <div class="card" style="margin:5%">
                                            <div class="card-header"><?php echo e(__('Register')); ?></div>

                                            <div class="alert alert-dismissible" role="alert" id="Msg"
                                                style="display: none">
                                                <a href="#" class="close" data-dismiss="alert"
                                                    aria-label="close">&times;</a>
                                                <span id="text"></span>
                                            </div>

                                            <div class="card-body">
                                                <?php if(Auth::user()): ?>

                                                    

                                                    <input type="hidden" name="_token" id="register_token"
                                                        value="<?php echo e(csrf_token()); ?>">
                                                    You are already logged in. so please submit to store this template
                                                    <input type="hidden" id="auth_user_id" value="<?php echo e(Auth::user()->id); ?>" />

                                                <?php else: ?>
                                                <form id="register">

                                                    

                                                    <input type="hidden" name="_token" id="register_token"
                                                        value="<?php echo e(csrf_token()); ?>">
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">Name</label>
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control"
                                                                name="name" required autocomplete="name">
                                                            <span class="text-danger d-none" id="nameErrorMsg">name is
                                                                required</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="userName"
                                                            class="col-md-4 col-form-label text-md-right">User
                                                            Name</label>
                                                        <div class="col-md-6">
                                                            <input id="userName" type="text" class="form-control"
                                                                name="userName" required>
                                                            <span class="text-danger d-none"
                                                                id="userNameErrorMsg">username field is required</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label text-md-right">Email
                                                            Address</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control"
                                                                name="email" required>
                                                            <span class="text-danger d-none" id="emailErrorMsg">email
                                                                field is required</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password"
                                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control"
                                                                name="password" required>
                                                            <span class="text-danger d-none"
                                                                id="passwordErrorMsg">password field is required</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password-confirm"
                                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password"
                                                                class="form-control" name="password_confirmation">
                                                            <span class="text-danger d-none"
                                                                id="confirmpasswordErrorMsg">confirm password field is
                                                                required</span>
                                                            <span class="text-danger d-none"
                                                                id="passwordMatchErrorMsg">Password does not
                                                                match</span>
                                                        </div>
                                                    </div>

                                                </form>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>

<script>
var template_id = $("input[name=template_id]").val();
var template_name = "<?php echo e($template_info->template_name); ?>";
var template_slug = "<?php echo e($template_info->template_slug); ?>";

var sectionArray = [];


var form = $("#example-form");

form.steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    transitionEffect: "slideLeft",
    labels: {
        finish: "Submit"
    },
    onStepChanging: function(event, currentIndex, newIndex) {

        console.log(event);
        console.log('current', currentIndex);
        console.log('new', newIndex);

        switch (currentIndex) {
            case 0:
                var website_name = $('.' + template_slug + '_website_name').val();
                console.log(website_name);
                if (website_name == "") {
                    Toast.fire({
                        icon: 'error',
                        title: 'please select template name'
                    });
                    return false;
                } else {
                    return true;
                }
                break;
            case 1:
                $('.section_name').each(function() {
                    if (this.checked) {
                        sectionArray.push($(this).val());
                    }
                });
                return true;
                break;
            case 2:
                return true;
                break;
            case 3:
                return true;
                break;
            case 4:
                if (newIndex == 5) {
                    var plan_length = $("input[name='user_plan']").length;
                    if (plan_length > 0) {
                        if ($("input[name='user_plan']").is(':checked')) {
                            return true;
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'please select plan'
                            });
                            return false;
                        }
                    } else {
                        return true;
                    }
                } else {
                    return true;
                }
                break;
            case 5:
                return true;
                break;
        }

    },
    onStepChanged: function(event, currentIndex, priorIndex) {

        console.log(event);
        console.log({
            currentIndex
        });
        console.log({
            priorIndex
        });

        switch (currentIndex) {
            case 1:
                return true;
                break;
            case 2:
                console.log('this is section selection step');
                var formData = new FormData($('#example-form')[0]);
                var section_array = [];
                $('.section_name').each(function() {
                    if ($(this).prop('checked') == true) {
                        section_array.push({
                            'section': $(this).attr('title')
                        });
                    }
                });
                localStorage.setItem(template_slug + '_sections', JSON.stringify(section_array));
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(url('template-process-second-step')); ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "html",
                    success: function(response) {
                        console.log('aaa');
                        var loader_html =
                            '<div class="loader-bg"><h3>Loading...</h3><div class="loader"><span></span></div></div>';
                        $('#example-form-p-2').html(loader_html);
                        setTimeout(() => {
                            $('#example-form-p-2').html(response);
                        }, 1000);
                    },
                });
                break;
            case 3:

                console.log('this is template preview step');
                var formData = new FormData($('#example-form')[0]);

                var website_name = $('.' + template_slug + '_website_name').val();
                if (website_name == "") {
                    return false;
                } else {

                    $('.website_template_info').each(function() {
                        var key = $(this).attr('name');
                        var value = $(this).val();
                        localStorage.setItem(template_slug + '_' + key, value);
                    });

                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(url('template-process-third-step')); ?>",
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: "html",
                        success: function(response) {
                            console.log(response);
                            $('#example-form-p-3').html(response);
                        },
                    });
                }

                break;
            case 4:
                return true;
                break;
            case 5:
                return true;
                break;
        }

    },
    onFinished: function(event, currentIndex) {

        var name = $('#name').val();
        var userName = $('#userName').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();

        var isRegisterAjax = true;

        var template_name = $('.' + template_slug + '_website_name').val();


        if (name == "") {
            $('#nameErrorMsg').removeClass('d-none');
            isRegisterAjax = false;
        } else {
            $('#nameErrorMsg').addClass('d-none');
        }

        if (userName == "") {
            isRegisterAjax = false;
            $('#userNameErrorMsg').removeClass('d-none');
        } else {
            $('#userNameErrorMsg').addClass('d-none');
        }

        if (email == "") {
            isRegisterAjax = false;
            $('#emailErrorMsg').removeClass('d-none');
        } else {
            $('#emailErrorMsg').addClass('d-none');
        }

        if (password == "") {
            isRegisterAjax = false;
            $('#passwordErrorMsg').removeClass('d-none');
        } else {
            $('#passwordErrorMsg').addClass('d-none');
        }
        if (password_confirm == "") {
            isRegisterAjax = false;
            $('#confirmpasswordErrorMsg').removeClass('d-none');
        } else if (password_confirm != password) {
            isRegisterAjax = false;
            $('#confirmpasswordErrorMsg').addClass('d-none');
            $('#passwordMatchErrorMsg').removeClass('d-none');
        } else {
            $('#passwordMatchErrorMsg').addClass('d-none');
            $('#confirmpasswordErrorMsg').addClass('d-none');
        }

        if (isRegisterAjax) {

            $.ajax({
                type: "POST",
                url: "<?php echo e(route('template-process-user-sign-up')); ?>",
                headers: {
                    'X-CSRF-TOKEN': $('#register_token').val()
                },
                dataType: "json",
                data: {
                    name: name,
                    userName: userName,
                    email: email,
                    password: password,
                    confirm_password: password_confirm,
                    template_name: template_name,
                },
                success: function(data) {
                    console.log(data);
                    if (data.msgtype == "success") {

                        if ("<?php echo e(Auth::check()); ?>") {
                            var plan_id = data.plan_id;
                        } else {
                            // var plan_id = $("input[name='user_plan']").val();
                            var plan_id = $('input[name="user_plan"]:checked').val();
                        }

                        var formData = new FormData($('#example-form')[0]);
                        $.ajax({
                            type: "POST",
                            url: "<?php echo e(url('template-process-final-submit')); ?>?user_id=" +
                                data.user_id + "&plan_id=" + plan_id,
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                Toast.fire({
                                    icon: response.msgtype,
                                    title: response.messege
                                });
                                if (response.msgtype == "success") {
                                    window.location.href = '/user/dashboard';
                                }
                            },
                        });
                    } else {
                        Toast.fire({
                            icon: data.msgtype,
                            title: data.messege
                        });
                    }

                },
            });
        } else {
            return false;
        }
    }
});


$('.section_name').on('change', function() {
    if (this.checked) {
        sectionArray.push($(this).val());
    } else {
        console.log('remove');
        var index = sectionArray.indexOf($(this).val());
        sectionArray.splice(index, 1);
    }
    console.log(sectionArray);
});

$('.actions ul li').eq(1).on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
});

$('.image').on('change', function(e) {
    previewImage(this);
});

function previewImage(image) {
    var fileImage = image.files[0];
    var reader = new FileReader();
    reader.addEventListener("load", function() {
        $(image).addClass('hiii');
        $(image).next('.blob_image').val(reader.result);
        $(image).next().next('.preview_image').html('<img src=' + reader.result +
            ' style="height:100px;width:100px">');

    }, false);

    if (fileImage) {
        reader.readAsDataURL(fileImage);
    }
}
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\templete-create-corporate\resources\views/website/template-process/index.blade.php ENDPATH**/ ?>