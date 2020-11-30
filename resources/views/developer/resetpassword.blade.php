<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forgot Password</title>
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
          <p class="login-box-msg">We're here to handle your ignorance :) At least your'e not too lazy to open email</p>
          <form action="{{url('developer/resetPasswordToken')}}" method="post">
            @csrf
            <div class="input-group mt-2">
              <input type="password" class="form-control" name="password" placeholder="Your New Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <input type="hidden" name="email" value="{{$reset->email}}">
            <input type="hidden" name="token" value="{{$reset->token}}">
            <div class="input-group mt-2">
                <input type="password" class="form-control" name="confirmPassword" placeholder="Re-type Your New Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @error('confirmPassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            <div class="row mt-3">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
              </div>
              <!-- /.col -->
            </div>
            @if (Session::has('message'))
                <div class="text-center mb-3"> <span style="color:green">{{ Session::get('message') }}</span></div>
            @endif
            <p class="text-center mt-3">- OR -</p>
            <p class="mb-1 text-center">
                <a href="{{url('developer/login')}}">Login</a>
            </p>
            <p class="mb-0 text-center">
            <a href="{{url('developer/register')}}" class="text-center">Become a Developer/Publisher</a>
        </p>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
</body>
<!-- jQuery -->
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/js/adminlte.min.js')}}"></script>
</body>
</html>
