<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Developer/Publisher | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Developer/Publisher</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Become A Developer/Publisher</p>
      <form action="{{url('/developer/register')}}" method="post">
        @csrf
        <div class="input-group mt-3">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          @error('name')
              <small class="text-danger">{{ $message }}</small>
          @enderror
        <div class="input-group mt-3">
          <input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('username')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group mt-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group mt-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group mt-3">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('confirmPassword')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        @if (Session::has('warning'))
            <div class="text-center mt-3"> <span style="color:red">{{ Session::get('warning') }}</span></div>
        @endif
        @if (Session::has('message'))
            <div class="text-center mt-3"> <span class="text-success">{{ Session::get('message') }}</span></div>
        @endif
        <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
        <p class="text-center mt-3">- OR -</p>
        <p class="mb-0 text-center">
            <a href="{{url('developer/login')}}" class="text-center">I'm Already a Developer/Publisher</a>
        </p>
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/js/adminlte.min.js')}}"></script>
</body>
</html>
