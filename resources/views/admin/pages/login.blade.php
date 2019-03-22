<!doctype html>
<html lang="en">

<head>
    <title>:: Lucid :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
</head>

<body class="theme-cyan">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="Lucid">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="post" action="{{ route('admin.auth') }}">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Identifier</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="signin-email" placeholder="You'r Email OR Phone">
                                <small class="text-danger">{{$errors->first('identifier')}}</small>
                            </div>
                            <div class="form-group ">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" name="password" class="form-control" id="signin-password" placeholder="You'r Password">
                                <small class="text-danger">{{$errors->first('password')}}</small>
                            </div>
                            {{csrf_field()}}
                            {{--<div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>--}}
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            {{-- <div class="bottom">
                                 <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                                 <span>Don't have an account? <a href="page-register.html">Register</a></span>
                             </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
</html>
