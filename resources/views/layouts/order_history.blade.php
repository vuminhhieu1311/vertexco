<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>E-garden</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <!-- Stylesheets -->
    <link href="{{ asset('garden-plant/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('garden-plant/css/style.css') }}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('garden-plant/css/bootstrap-margin-padding.css') }}" rel="stylesheet">
    <link href="{{ asset('garden-plant/css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    @yield('css')
<body>
    <div class="page-wrapper">
        @include('components.customer.header')
        @yield('content')
        @include('components.customer.footer')
    </div>
    <script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    </script>
    @include('sweetalert::alert')
    @yield('js')
</body>

</html>
