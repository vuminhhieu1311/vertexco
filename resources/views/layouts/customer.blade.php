<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>E-garden</title>
    <!-- Stylesheets -->
    <link href="{{ asset('garden-plant/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('garden-plant/css/style.css') }}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('garden-plant/css/bootstrap-margin-padding.css') }}" rel="stylesheet">
    <link href="{{ asset('garden-plant/css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        @include('components.customer.header')
        @yield('content')
        @include('components.customer.footer')
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>
    <script src="{{ asset('garden-plant/js/jquery.js') }}"></script>
    <script src="{{ asset('garden-plant/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('garden-plant/js/revolution.min.js') }}"></script>
    <script src="{{ asset('garden-plant/js/js-collection.js') }}"></script>
    <script src="{{ asset('garden-plant/js/script.js') }}"></script>
</body>

</html>
