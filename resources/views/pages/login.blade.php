<!doctype html>
<html lang="">
<head>
    <link rel="alternate" href="https://easyfood.vn/" hreflang="en" />
    <title>Legacyfa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="language" content="english">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/styles/github.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="{{asset('style.css')}}" rel="stylesheet" media="screen"> 
</head>
<body class="{{Route::currentRouteName()}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="login-layout radius_4">
                    <div class="logo-login">
                        <a href="{{route('home')}}"><img src="{{asset('images/logo-login.png')}}" alt="" title=""/></a>
                    </div>
                    <div class="title-page-login">
                        <h1 class="textcenter">Sign in</h1>
                        <h5 class="textcenter">Good morning! Sign into your account and let's get started!</h5>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}" data-parsley-validate>
                        @csrf
                        <div class="form-group login-style">
                            <input class="radius_none" id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required  placeholder="Email" data-parsley-trigger="change" required="">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="form-group login-style">
                            <input class="radius_none" id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password" data-parsley-trigger="change" required="">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="form-group login-checkbox-style">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="remember">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    <span>This is a public computer, do not cache my personal information.</span> 
                                </label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        @if(session('error'))
                        <!-- Alert Message -->
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        @php session()->forget('error') @endphp
                        <div class="form-group form-group-submit">
                            <button type="submit" class="btn radius_4">
                                Authenticate
                            </button>
                        </div>
                        <a class="link-forgot textcenter" href="JavaScript:;">Forgot password?</a>
                    </form>
                    <div class="bottom-login textcenter">
                            Copyright © 2020 Legacy FA Pte Ltd. All Rights Reserved.<br/>
                            Terms of Use | Privacy Policy
                        </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    @yield('script')
</body>
</html>
