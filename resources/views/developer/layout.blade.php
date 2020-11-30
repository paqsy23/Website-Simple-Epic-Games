<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  {{-- DataTables --}}
  <link rel="stylesheet" href="{{asset('vendor/datatables/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/datatables-plugins/responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
  <!-- bs-custom-file-input -->
  <script src="{{asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  @yield('header')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">{{$developer->name}}</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="{{url('developer/home')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Home
                    </p>
                  </a>
                </li>
                <li class="nav-header">GAME SETTINGS</li>
                <li class="nav-item">
                    <a href="{{url('developer/gamelist')}}" class="nav-link">
                      <i class="nav-icon fas fa-gamepad"></i>
                      <p>
                        Game List
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('developer/newGame')}}" class="nav-link">
                      <i class="nav-icon fas fa-gamepad"></i>
                      <p>
                        Insert New Game
                      </p>
                    </a>
                  </li>
                <li class="nav-header">ACCOUNT SETTINGS</li>
                <li class="nav-item">
                  <a href="{{url('developer/editprofile/'.$developer->id)}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Edit Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('developer/logout')}}" class="nav-link">
                    <i class="nav-icon fas fa-lock"></i>
                    <p>
                      Logout
                    </p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
@yield('content')

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- jQuery -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('vendor/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
{{-- Chart for home --}}
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
{{-- DateRangePicker --}}
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('vendor/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
{{-- TempusDominus --}}
<script src="{{asset('vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
@yield('script')
</body>
</html>
