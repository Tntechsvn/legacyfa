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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="{{asset('style.css')}}" rel="stylesheet" media="screen">
    
</head>
<body class="{{Route::currentRouteName()}}">
    <div class="site">
        <div class="container-fluid">
            <div class="row">
                <div class="sidebar" id="sidebar">
                    @include('layouts.nav')
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main">
                    @include('layouts.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="https://mojoaxel.github.io/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script>
      $('.parsley-form').parsley();
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var nav = $("#sidebar");
            var ct = $(".main");
            $(".nav-sidebar").click(function(){
                if(nav.hasClass('sidebar-fix')){
                    nav.removeClass('sidebar-fix');
                    ct.css('padding-left','215px')
                }else {
                   nav.addClass('sidebar-fix');
                   ct.css('padding-left','70px')
                }
            });
        });

    </script>
    @yield('script')
</body>
</html>
