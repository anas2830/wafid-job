<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #fff; /* White */
    color: #555555;
  }
  </style>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php echo $__env->make('googleAnalytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

  <div id="google_translate_element"></div>
  
<?php if(isset($section_name_array) && in_array('first_template_about_section', $section_name_array)): ?>
  <div class="container-fluid bg-1 text-center template_sections active_sections" type="<?php echo e($template_view); ?>" id="first_template_banner_section">
    <h3 class="first_template_banner_top_text">
      <?php if(isset($fill_up_info['first_template_banner_top_text'])): ?> 
        <span class="author_view"><?php echo e($fill_up_info['first_template_banner_top_text']); ?></span>
      <?php else: ?> 
        <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_banner_top_text]">banner top text?</span>
      <?php endif; ?>
    </h3>

    <div class="first_template_banner_middle_img_div">
      <?php if(isset($fill_up_info["'img'"]['first_template_banner_middle_img'])): ?>
        <img src="<?php echo e($fill_up_info["'img'"]['first_template_banner_middle_img']); ?>" class="img-circle first_template_banner_middle_img author_view" alt="custom" width="350" height="350">
      <?php else: ?>
        <img src="<?php echo e(Helper::getDynamicImage('bird.jpg', $template_info->id)); ?>" class="img-circle first_template_banner_middle_img <?php echo e($template_view); ?>_view" alt="Bird" width="350" height="350" type="image" 
        name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][first_template_banner_middle_img]">
      <?php endif; ?>
    </div>
    <h3 class="first_template_banner_bottom_text">
      <?php if(isset($fill_up_info['first_template_banner_bottom_text'])): ?> 
        <span class="author_view"><?php echo e($fill_up_info['first_template_banner_bottom_text']); ?></span>
      <?php else: ?> 
      <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_banner_bottom_text]">banner bottom text</span>
      <?php endif; ?>
    </h3>
  </div>
<?php endif; ?>

<?php if(isset($section_name_array) && in_array('first_template_about_section', $section_name_array)): ?>
  <div class="container-fluid bg-2 text-center template_sections active_sections" id="first_template_about_section"  type="<?php echo e($template_view); ?>">
    <h3 class="first_template_about_heading_text">
        <?php if(isset($fill_up_info['first_template_about_heading_text'])): ?> 
          <span class="author_view"><?php echo e($fill_up_info['first_template_about_heading_text']); ?></span>
        <?php else: ?>  
          <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_about_heading_text]">this is about section? </span>
        <?php endif; ?>
    </h3>
    <p class="first_template_about_content">
      <?php if(isset($fill_up_info['first_template_about_content'])): ?> 
        <span class="author_view"><?php echo e($fill_up_info['first_template_about_content']); ?></span>
      <?php else: ?> 
      <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_about_content]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
      <?php endif; ?>
    </p>
  </div>
<?php endif; ?>

<?php if(isset($section_name_array) && in_array('first_template_team_section', $section_name_array)): ?>
  <div class="container-fluid bg-3 text-center template_sections active_sections" id="first_template_team_section"  type="<?php echo e($template_view); ?>">
    <h3 class="first_template_team_heading_text">
      <?php if(isset($fill_up_info['first_template_team_heading_text'])): ?> 
        <span class="author_view"><?php echo e($fill_up_info['first_template_team_heading_text']); ?></span>
      <?php else: ?> 
        <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_team_heading_text]">this is team section?</span>
      <?php endif; ?>
    </h3>
    <p class="first_template_team_content">
        <?php if(isset($fill_up_info['first_template_team_content'])): ?> 
          <span class="author_view"><?php echo e($fill_up_info['first_template_team_content']); ?></span>
        <?php else: ?> 
          <span class="<?php echo e($template_view); ?>_view" type="text" name="<?php echo e($template_info->template_slug); ?>_website_template_info[first_template_team_content]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
        <?php endif; ?>
    </p>

    <?php if(isset($fill_up_info["'img'"]['first_template_bottom_img'])): ?>
      <img src="<?php echo e($fill_up_info["'img'"]['first_template_bottom_img']); ?>" class="img-circle first_template_bottom_img author_view" alt="custom" width="350" height="350">
    <?php else: ?>
      <img src="<?php echo e(Helper::getDynamicImage('bird.jpg', $template_info->id)); ?>" class="img-circle first_template_bottom_img <?php echo e($template_view); ?>_view" alt="Bird" width="350" height="350" type="image" name="<?php echo e($template_info->template_slug); ?>_website_template_info['img'][first_template_bottom_img]">
    <?php endif; ?>
  </div>

<?php endif; ?>


<script>
  var template_slug = "<?php echo e($template_info->template_slug); ?>";

  $('.template_sections').each(function(){
      var access_type = $(this).attr('type');
      var section_id = $(this).attr('id');
      if(access_type == "public"){
        var section_array = localStorage.getItem(template_slug+'_sections');
        var section_json_array = JSON.parse(section_array);
        if(section_json_array.some(item => item.section == section_id)){
          $(this).removeClass('d-none');
        }else{
          $(this).addClass('d-none');
          $(this).removeClass('active_sections');
        }
      }
  });

  $('.active_sections .public_view').each(function(){
    var name = $(this).attr('name');
    var type = $(this).attr('type');
    console.log('abc',name);
    switch (type) {
      case "text":
        if (localStorage.getItem(name) != '') {
          var value = localStorage.getItem(name);
          $(this).text(value);
        }
        break;
      case "image":
        if (localStorage.getItem(name) != '') {
          var value = localStorage.getItem(name);
          $(this).attr('src', value);
        }
        break;
    }
  });

  googleTranslateElementInit();

      function googleTranslateElementInit(){
        new google.translate.TranslateElement(
          {pageLanguage:'en'},
          'google_translate_element'
        )
      }
    
</script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\laravel-template-site\resources\views/website/template/first-template.blade.php ENDPATH**/ ?>