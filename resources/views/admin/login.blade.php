<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin//css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/{{ asset('assets/admin/css?family=Source+Sans+Pro:300,400,600,700') }}" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/admin/img/favicon.png') }}">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"><img src="{{ asset('assets/admin/img/logo-dark.png') }}" alt="Klorofil Logo"></div>
                            <p class="lead">Login to your account</p>
                        </div>
                        <form class="form-auth-small" action="{{route('admin_logincheck') }}" method="post" >
                           @csrf
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="email"  name="email" placeholder="Email" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <div class="bottom">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                            </div>

                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit"  >SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>

                    <div class="content text">
                        <h1 class="heading">wellcom</h1>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

</html>
