<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Petotas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Petotas</title>
    <!-- Styles -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <h1>Petotas</h1>
    <a href="#">Entre/Cadastre-se</a>
</header>
@yield('content')

<!-- Scripts -->
</body>
</html>
