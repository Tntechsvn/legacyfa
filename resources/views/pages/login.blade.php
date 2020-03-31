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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="{{asset('style.css')}}" rel="stylesheet" media="screen"> 
</head>
<body class="{{Route::currentRouteName()}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" title=""/></a>
                </div>

                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="radius_none" id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="radius_none" id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-group form-group-submit">
                        <button type="submit" class="btn radius_4">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script>
      $('.login-form').parsley();
    </script>
    @yield('script')
</body>
</html>
