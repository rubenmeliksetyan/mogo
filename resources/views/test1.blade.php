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
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
</head>
<body>
<header class="section">
    <div class="container">
        <div class="header-top">
            <h1>test</h1>
            <a href="#">Sign in</a>

        </div>
        <nav>
            <a href="#">Catalog</a>
            <a href="#">Series</a>
            <a href="#">Podcast</a>
            <a href="#">Discussions</a>

        </nav>
    </div>

</header>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>
            <div class="col">
                <div class="box">some callout text</div>
            </div>

        </div>
    </div>
</div>
</body>

</html>