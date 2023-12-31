<!DOCTYPE html>
<html lang="en">
<head>


  <?php  
    $site_info = App\Models\SiteInfo::first();
    $site_image = App\Models\SiteImage::first();

  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset($site_image->favicon)}}">

  @yield('title')
  @include('admin.layouts.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<!--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset($site_image->logo)}}" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  @include('admin.layouts.header')
  <!-- /.navbar -->
  @php $user = App\Models\Admin::where('id',Session::get('adminId'))->first(); @endphp
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">{{$site_info->site_name ?? ''}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{$user->image ?? ''}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session::get('adminName')}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      @include('admin.layouts.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://adminlte.io">Kids Control</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @yield('script')

  
  @include('admin/layouts.js')
</body>
</html>
