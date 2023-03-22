<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])

    @stack('stylesheets')
    @stack('scripts')

    <title>Laravel</title>
</head>
<body>
    @yield('content')
</body>
</html>
