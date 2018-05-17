<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>@yield('pageTitle') - Taylor Mama</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('admin/assets/favicon.png') }}" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{ asset('admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    @yield('content')

    <!-- CORE PLUGIN JS -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/plugins/node-waves/waves.js') }}"></script>

    <!--THIS PAGE LEVEL JS-->
    <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/examples/login.js') }}"></script>

    <!-- LAYOUT JS -->
    <script src="{{ asset('admin/assets/js/demo.js') }}"></script>

</body>
</html>