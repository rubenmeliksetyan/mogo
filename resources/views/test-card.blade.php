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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
{{--    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">--}}
</head>
<body class="flex items-center justify-center">
<div class="card flex rounded">
    {{--    Left side       --}}

    <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white">
        <a href="" class="card-skill-button no-underline text-xs rounded-full py-1 px-6">PHP</a>
        <img src="https://laracasts.com/images/series/2018/css-for-backend-developers.svg">
        <span class="card-difficulty text-sx">Intermediate difficulty</span>

    </div>

    {{--    right side    --}}

    <div class="card-right flex flex-col text-grey-darker p-6">
        <h3 class="card-title text-black-50 font-light text-3xl mb-3"><a href="" class="no-underline">Free Asap </a></h3>
        <p class="card-except flex-1 text-sm">
            Workshop time. We've been given a card design that needs to be converted to HTML and CSS. Piece by piece,
            let's construct it from scratch. As you'll find, yet again, flexbox comes to the rescue over and over.
        </p>
        <div class="card-meta flex">
            <div class="flex align-items-center mr-4">
                <img src="https://laracasts.com/images/icons/books.svg" class="mr-2">
                5 lessons
            </div>

            <div class="flex align-items-center">
                <img src="https://laracasts.com/images/icons/clock.svg" class="mr-2">
                53:10min
            </div>
        </div>
    </div>

</div>
</body>

</html>