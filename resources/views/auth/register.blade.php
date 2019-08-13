@extends('front_end.layout.master')
@section('home', 'active')

@section('content')

<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-box-body">
        <center>
          <img id="profile-img" class="profile-img-card" src="../../../img/logo.png"/>
        </center><br>
        <p class="login-box-msg">The World In Your Hand</p>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          
          <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
            
          <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          <div class="form-group has-feedback">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            

            <!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" class="btn btn-danger btn-block btn-flat">{{ __('Register') }}</button>
            </div>
            <!-- /.col -->
          </div>    
        </form>
        <center>
        <a href="/login" class="text-center">I already have a membership</a>
        </center>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
@endsection

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>