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
    <div class="site">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 sidebar">
                    @include('layouts.nav')
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 main">
                    @include('layouts.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @yield('script')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
