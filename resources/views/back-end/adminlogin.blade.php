<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'Admin::Login')</title>

  <!-- Font Awesome Icons -->
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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}">{{ $basic->name }}</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if($errors->any())
        <h3 style="color:red;font-size: 20px;text-align: center;">Incorrect login details!!!</h3>
      @endif
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

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
@yield('links')
<script>
  @yield('script')
</script>

</body>
</html>
