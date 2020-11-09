<!doctype html>
<html lang="en">

<head>
    <title>SMAN 2 Tangerang Selatan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset("admin/assets/vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel=" stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist-custom.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        @include('layouts.includes._navbar')
        @include('layouts.includes._sidebar')
        <!-- MAIN -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            @include('layouts.includes._panel')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>.
                    All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{asset("admin/assets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("admin/assets/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <script src="{{asset("admin/assets/scripts/klorofil-common.js")}}"></script>
</body>

</html>
