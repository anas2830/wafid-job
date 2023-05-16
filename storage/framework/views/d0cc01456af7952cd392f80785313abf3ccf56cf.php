
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('super-admin')); ?>/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website')); ?>/css/dataTables.min.css">

  <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/sweet-alert.css">
  <link type="text/css" rel="stylesheet" href="<?php echo e(asset('website')); ?>/plugins/summernote/summernote.css" />
  <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/custom.css">

   <!-- Per Page css files -->
   <?php echo $__env->yieldPushContent('css'); ?>
   <!-- /Per Page css files -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e(asset('super-admin')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">

      <a href="<?php echo e(url('user/dashboard')); ?>">
        <img src="<?php echo e(asset('super-admin')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      </a>
      <a href="<?php echo e(url('/')); ?>" target="_blank">
        <span class="right badge badge-success"> Go to frontend  </span>
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('uploads/userProfile/thumb/'.Auth::user()->photo_name)); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
          <?php
            $plan_history_check = DB::table('user_plan_histories')->where('user_id',Auth::user()->id)->where('status',0)->first();
          ?>
          <?php if($plan_history_check): ?>
          <form method="post" action="<?php echo URL::to('paypal'); ?>" >
              <?php echo csrf_field(); ?>
            <input type="hidden" name="plan_id" value="<?php echo e($plan_history_check->plan_id); ?>"> 
            
            <a href="<?php echo e(url('/')); ?>" target="_blank">
              <span class="right badge badge-success"> <input type="submit" name="paynow" value="Pay Now"> </span>
            </a>
          </form>
          <?php else: ?>   
            <a href="#complete" target="_blank">
              <span class="right badge badge-success"> Payment Complete </span>
            </a>
          <?php endif; ?>


        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class='nav-link <?php if($activeMenu == "profile"): ?> active <?php endif; ?>' href="<?php echo e(route('user.profile')); ?>">
                <i class="far fa-circle nav-icon"></i> <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class='nav-link <?php if($activeMenu == "template"): ?> active <?php endif; ?>' href="<?php echo e(route('user.template')); ?>">
                <i class="far fa-circle nav-icon"></i> <p>Template</p>
            </a>
          </li>
        </ul>
        
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class='nav-link' href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">

                <i class="far fa-circle nav-icon"></i> <p>Logout</p>
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    <?php echo $__env->yieldContent('content'); ?>




  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/chart.js/Chart.min.js"></script>

<!-- daterangepicker -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('super-admin')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('super-admin')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('super-admin')); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('super-admin')); ?>/dist/js/demo.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/bootbox.js"></script>
<script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/bootbox.locales.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('website')); ?>/js/custom_frame.js"></script>
<script src="<?php echo e(asset('website')); ?>/js/sweetAlert/sweet-alert.js"></script>
<script src="<?php echo e(asset('website')); ?>/js/sweetAlert/sweet-alert.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/plugins/summernote/summernote.min.js"></script>



    <!-- Per Page JS files -->
        <?php echo $__env->yieldPushContent('javascript'); ?>
    <!-- /Per Page JS files -->
</body>
</html>
<?php /**PATH D:\xampp\htdocs\templete-create-corporate\resources\views/layouts/user.blade.php ENDPATH**/ ?>