<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <x-ui.meta />
    <title>{{ config('app.name') }} | {{__('Organize your work and life, finally.') }}</title>
    <link rel="shortcut icon" href="{{ asset('/assets/css/backend-plugin.min.css?v=1.0.0') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend.css?v=1.0.0') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/remixicon/fonts/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/@icon/dripicons/dripicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}" />
</head>

<body class=" ">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        @yield('content')
    </div>
    <script src="{{ asset('/assets/js/backend-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('/assets/js/tree.js') }}"></script>
    <script src="{{ asset('/assets/js/table-treeview.js') }}"></script>
    <script src="{{ ('/assets/js/sweetalert.js') }}"></script>
    <script src="{{ ('/assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('/assets/js/slider.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
</body>

</html>