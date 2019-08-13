<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('front_end.layout.master')
@section('home', 'active')

@section('content')



<body class="hold-transition login-page">

    <div class="container">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="login-box-body">
        <center>
        <img id="profile-img" class="profile-img-card" src="../../../img/logo.png"/>
      </center><br>
        <p class="login-box-msg">The World In Your Hand</p>

        <form method="POST" action="{{ route('login') }}" novalidate>
          
          @csrf
          
          <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan E-Mail" required autocomplete="email" autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" required autocomplete="current-password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
            @enderror 
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" class="btn btn-danger btn-block btn-flat">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <center>
        <a href="/register" class="text-center">Register a new membership</a>
        </center>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </div>

@endsection

<!-- jQuery 3 -->
  <script src="{{ asset('lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('lte/plugins/iCheck/icheck.min.js') }}"></script>
</body>
</html>