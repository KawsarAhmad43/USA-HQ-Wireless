<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'Admin Panel')</title>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/8ceebf3f77.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/fontawesome-free/css/all.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/toastr/toastr.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  

  <style>
      @yield('style')
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-warning">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('/') }}back-end/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{$basic->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      @include('back-end.vendor.includes.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 |
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('/') }}back-end/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/') }}back-end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/') }}back-end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}back-end/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('/') }}back-end/dist/js/demo.js"></script>
<!-- Toastr -->
<script src="{{ asset('/') }}back-end/plugins/toastr/toastr.min.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('/') }}back-end/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('/') }}back-end/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('/') }}back-end/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('/') }}back-end/dist/js/pages/dashboard2.js"></script>
<!-- Summernote -->
<script src="{{ asset('/') }}back-end/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('/') }}back-end/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/') }}back-end/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
/*  */
<script src="https://kit.fontawesome.com/8ceebf3f77.js" crossorigin="anonymous"></script>
/*  */
@yield('links')
<script>
  @yield('script')
</script>

</body>
</html>
