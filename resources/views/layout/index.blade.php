<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>스타일뷰</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/icons.css') }} ">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <header id="topnav">
                <inno-header></inno-header>
                <inno-nav></inno-nav>
            </header>
            
            <inno-footer></inno-footer>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.core.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.app.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
</html>
