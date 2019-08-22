<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2019 10:12:02 GMT -->
<head>
<title>:: Lucid HR :: Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
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
                            <p class="lead">HR Create an account</p>
                        </div>
                        <div class="body">
                            <form method="POST" class="form-auth-small" action="{{ route('hr.register') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Your email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a href="{{ route('hr.login') }}">Login</a></span>
                                </div>
                            </form>
                           <!--  <div class="separator-linethrough"><span>OR</span></div>
                            <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                            <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2019 10:12:02 GMT -->
</html>
