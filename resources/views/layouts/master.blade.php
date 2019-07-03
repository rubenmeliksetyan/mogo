<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MoGo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('/fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/fontawesome.css') }}"
          rel="stylesheet">
    <link href="{{ asset('/fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('/fontawesome-free-5.9.0-web/fontawesome-free-5.9.0-web/css/solid.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    @include('components.header')
</header>
<div class="content">
    @include('components.banner')
    @include('components.about')
    @include('components.facts')
    @include('components.service')
    @include('components.work')
    @include('components.blog')
    @include('components.contact')
</div>

</body>

</html>