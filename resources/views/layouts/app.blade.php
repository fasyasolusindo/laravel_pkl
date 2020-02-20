<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Fasya', 'Fasya') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@if (Auth::guest())

@else

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                <p>Welcome, {{ Auth::user()->name }} <span class="caret"></span></p>
            </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <button type="submit" class="btn btn-success btn-sm" value="submit">Logout</button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
      
    </ul>
  </nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/FPS.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Fasya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Inventory
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Kelola Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Barang</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Kelola Peminjaman
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="checkin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check In</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="checkout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Peminjaman</p>
                </a>
              </li>
            </ul>
          <li class="nav-item">
            <a href="register" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Add User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @endif
    
    @yield('content')

    <!-- Scripts -->
    @if (Auth::guest())

@else
    <footer class="main-footer">
        <strong><center>Copyright &copy; 2019 <a href="#">PT Fasya Pratama Solusindo</a><center></strong>
    </footer>
    @endif
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="plugins/select2/js/select2.full.min.js"></script>
</body>
</html>
