<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Petify</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Petify</title>
    <!-- Styles -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <a href="/"><img class="logo" src="/img/logo-08.png" alt="Petify"/></a>
   @if(!auth()->check())
    <a class="user" href="{{url('login')}}">Entre/Cadastre-se</a>
    @else
        <a class="user" href="{{url('home')}}">Bem vindo, {{auth()->user()->name}}</a>
    @endif
</header>
@yield('content')

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>
