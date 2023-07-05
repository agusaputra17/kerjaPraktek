<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Datun</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-kejari.png') }}" type="image/x-icon">
    </head>
    <style>
        body {
            background-color: rgb(232, 255, 251);
        }
    </style>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{-- sidebar --}}
        @include('layout.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!-- header -->
            @include('layout.header')
            <!-- header -->
            @yield('content')
        </div>

    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
