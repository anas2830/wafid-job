
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('super-admin')}}/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('super-admin')}}/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('website')}}/css/dataTables.min.css">

  <link rel="stylesheet" href="{{ asset('website')}}/css/sweet-alert.css">
  <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/plugins/summernote/summernote.css" />
  <link rel="stylesheet" href="{{ asset('website')}}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{ asset('website')}}/fonts/icomoon/style.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('super-admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('super-admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
      <span class="right badge badge-success"> @if(Auth::guard('admin')->check()) Admin @endif</span>
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php 
            if(Auth::guard('admin')->check()) {
              $path = "adminProfile";
            }
          ?>
          <img src="@if(empty(Auth::user()->photo_name)) {{ asset('super-admin')}}/dist/img/user2-160x160.jpg @else {{ asset('uploads/'.$path.'/thumb/'.Auth::user()->photo_name) }}  @endif" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item menu-open">
            <a href="#" class="nav-link @if($activeMenu == 'home' || $activeMenu == 'blog-post' ) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="@if(Auth::guard('admin')->check()) {{ url('/dashboard') }} @endif" class='nav-link @if($activeMenu == "home") active @endif'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>

        
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          @if(Auth::guard('admin')->check())
          <li class="nav-item">
            <a href="{{ url('/user-list') }}" class='nav-link @if($activeMenu == "user-list") active @endif'>
              <i class="far fa-circle nav-icon"></i>
              <p>User List</p>
            </a>
          </li>
          @endif 
        </ul> 

        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          @if(Auth::guard('admin')->check())
          <li class="nav-item">
            <a href="{{ url('/offers') }}" class='nav-link @if($activeMenu == "offers") active @endif'>
              <i class="far fa-circle nav-icon"></i>
              <p>Offers</p>
            </a>
          </li>
          @endif 
        </ul> 
        
        
        
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class='nav-link @if($activeMenu == "profile") active @endif' href="@if(Auth::guard('admin')->check()) {{ url('adminProfile') }} @endif">
                <i class="far fa-circle nav-icon"></i> <p>Profile</p>
            </a>
          </li>
        </ul>
        
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class='nav-link' href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">

                <i class="far fa-circle nav-icon"></i> <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    @yield('content')




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
<script src="{{ asset('super-admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('super-admin')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('super-admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('super-admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('super-admin')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->


<script src="{{ asset('super-admin')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('super-admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('super-admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('super-admin')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('super-admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('super-admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('super-admin')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('super-admin')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('super-admin')}}/dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ asset('website')}}/js/select2.min.js"></script>
<script type="text/javascript" src="{{ asset('website')}}/js/bootbox.js"></script>
<script type="text/javascript" src="{{ asset('website')}}/js/bootbox.locales.min.js"></script>
<script type="text/javascript" src="{{ asset('website')}}/js/custom_frame.js"></script>
<script src="{{ asset('website')}}/js/sweetAlert/sweet-alert.js"></script>
<script src="{{ asset('website')}}/js/sweetAlert/sweet-alert.min.js"></script>
  <script src="{{ asset('website')}}/plugins/summernote/summernote.min.js"></script>



    <!-- Per Page JS files -->
        @stack('javascript')
    <!-- /Per Page JS files -->
</body>
</html>
