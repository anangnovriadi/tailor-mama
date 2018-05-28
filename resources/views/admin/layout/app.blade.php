<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>@yield('pageTitle') - Taylor Mama</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('admin/assets/favicon.png') }}" type="image/x-icon" />

    <!--REQUIRED PLUGIN CSS-->
    <link href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/spinkit/spinkit.css') }}" rel="stylesheet" />

    <link src="{{ asset('bower_components/sweetalert/src/sweetalert.css') }}"></link>

    <!--REQUIRED THEME CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/themes/main_theme.css') }}" rel="stylesheet" />

    <!--THIS PAGE LEVEL CSS-->
    <link href="{{ asset('admin/plugins/unslider/css/unslider.css') }}./plugins/" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/chartist/css/chartist.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/boootstrap-datepicker/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-daterange/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/clockface/css/clockface.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet" />

    <!--Chat Css-->
    <link href="{{ asset('admin/assets/wchat/assets/css/style-light.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/wchat/assets/css/mobile.css') }}" rel="stylesheet" id="style" />

    <!-- EMOJI ONE JS -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/wchat/smiley/assets/sprites/emojione.sprites.css') }}" />
    <script src="{{ asset('admin/assets/wchat/smiley/js/emojione.min.js') }}"></script>

    {{-- DATA TABLES --}}
    <link href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/scroller.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" />
    @yield('add_css')

    <script type="text/javascript">
        // #################################################
        // # Optional

        // default is PNG but you may also use SVG
        emojione.imageType = 'png';
        emojione.sprites = false;

        // default is ignore ASCII smileys like :) but you can easily turn them on
        emojione.ascii = true;

        // if you want to host the images somewhere else
        // you can easily change the default paths
        emojione.imagePathPNG =  '{{ asset('admin/plugins/wchat/smiley/assets/png/index.html') }}';
        emojione.imagePathSVG = '{{ asset('admin/plugins/wchat/smiley/assets/svg/') }}';

        // #################################################
    </script>
    <!--#End# Chat Css-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="theme-indigo light layout-fixed">
<div class="wrapper">
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="sk-wave">
                <div class="sk-rect sk-rect1 bg-cyan"></div>
                <div class="sk-rect sk-rect2 bg-cyan"></div>
                <div class="sk-rect sk-rect3 bg-cyan"></div>
                <div class="sk-rect sk-rect4 bg-cyan"></div>
                <div class="sk-rect sk-rect5 bg-cyan"></div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> --}}
    
    @include('admin.layout.header')
    
    @include('admin.layout.sidebar')

    @include('admin.layout.sidebar-right')
    
    @yield('content')

    @include('admin.layout.footer')
</div>
    {{-- SWEAT ALERT --}}
    <script src="{{ asset('bower_components/sweetalert/src/sweetalert.js') }}"></script>
    {{-- END SWEAT ALERT --}}

    <!-- CORE PLUGIN JS -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/plugins/modernizr/modernizr.custom.js') }}"></script>
    <script src="{{ asset('admin/plugins/screenfull/dist/screenfull.js') }}"></script>
    <script src="{{ asset('admin/plugins/jQuery-Storage-API/jquery.storageapi.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/plugins/node-waves/waves.js') }}"></script>

    <!--THIS PAGE LEVEL JS-->
    <script src="{{ asset('admin/plugins/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('admin/plugins/skycon/skycons.js') }}"></script>
    <script src="{{ asset('admin/plugins/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admin/plugins/masonry/masonry.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/unslider/js/unslider-min.js') }}"></script>
    <!--Chat js-->
    <script src="{{ asset('admin/plugins/wchat/assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/plugins/wchat/chatjs/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/plugins/wchat/chatjs/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/plugins/wchat/chatjs/custom.js') }}"></script>
    <!-- #End# Chat js-->

    {{-- DATEPICKER --}}
    <script src="{{ asset('admin/plugins/momentjs/moment.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/boootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datetime-picker/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-daterange/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/clockface/js/clockface.js') }}"></script>
    <script src="{{ asset('admin/plugins/clockpicker/clockpicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/forms/date-time-picker-custom.js') }}"></script>
    {{-- END DATEPICKER --}}

    <script src="{{ asset('admin/assets/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/index_2.js') }}"></script>

    <!-- LAYOUT JS -->
    <script src="{{ asset('admin/assets/js/demo.js') }}"></script>
    <script src="{{ asset('admin/assets/js/layout.js') }}"></script>

    <script src="{{ asset('admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
    @yield('add_js')
</body>
</html>