@extends('layouts.auth')

@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Admin</b>LTE</a>
</div>

<div class="register-box-body">
    <p class="login-box-msg">Đăng kí để sử dụng </p>

    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}



        <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
           @if ($errors->has('name'))
           <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{old('name')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>



    <div class="form-group has-feedback  {{ $errors->has('email') ? ' has-error' : '' }}">
       @if ($errors->has('email'))
       <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
    <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>


<div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">

    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
    <input type="password" class="form-control" placeholder="Password" name="password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
     @if ($errors->has('password_confirmation'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
      <div class="checkbox icheck">
        <label>
          <input type="checkbox" checked> I agree to the <a href="#">terms</a>
      </label>
  </div>
</div>
<!-- /.col -->
<div class="col-xs-4">
  <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Kí</button>
</div>
<!-- /.col -->
</div>
</form>

<br>
{{-- <div class="social-auth-links text-center">
  <p>- OR -</p>
  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
  Facebook</a>
  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
  Google+</a>
</div> --}}

<a href="{{route('login')}}" class="text-center">Đăng Nhập</a>
</div>
<!-- /.form-box -->
</div>

@endsection