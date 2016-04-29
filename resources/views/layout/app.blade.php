<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formValidation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/formValidation.min.js') }}"></script>
    <script src="{{ asset('js/formValidationBootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!--
    <link rel="shortcut icon" href="secure/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="secure/images/favicon.ico" type="image/x-icon">
    -->

    <title>@yield('title')</title>

    @yield('head')

</head>
<body>

@yield('content')

</body>
</html>