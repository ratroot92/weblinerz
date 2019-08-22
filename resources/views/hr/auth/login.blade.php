<!doctype html>
<html lang="en">
<head>
<title>:: Employee:: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
</head>

<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-white.svg" alt="Lucid">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">HR ! Login to your account</p>

                         <!-- start of alert -->
@if(session('message'))


<div class="row">
<div class="col-md-12 text-danger font-weight-bold text-white alert alert-danger text-center" style="font-size: 14px;">
     {{session('message')}}
</div>
</div>
@endif
<!-- end of alert -->
                        </div>
                        <div class="body">
                        <form  method="POST" action="{{ URL::to('/loginAdmin') }}" >

                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>

                                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="a_email" value="{{ old('a_email') }}" id="a_email" placeholder="email" >

                                     @if ($errors->has('a_email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>

                                    <input type="password" id="a_password" name="a_password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password">

                                    @if ($errors->has('a_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('a_password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                        <span>Remember me</span>
                                    </label>
                                </div>

                                <input type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</input>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="{{ route('registerAdmin') }}">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2019 10:10:40 GMT -->
</html>
