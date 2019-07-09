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
<body>
<div class="container mx-auto">
    <div class="md:min-h-screen md:flex md:flex-col bg-purple-400">
        <header class="bg-red-400 p-3">
            <h1>My Site</h1>
        </header>
        <div class="md:flex md:flex-1">
            <aside class="bg-blue-400 p-3">
                Sidebar.
            </aside>
            <main class="bg-green-400 md:flex-1 p-3">
                <div class="md:flex md:flex-wrap">
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                    <div class="w-1/2 p-3 md:w-1/4">
                        <div class="bg-gray-500 p-3 md:mb-2">
                            <p> product feature.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer class="bg-black text-white p-3">
            Copyright 2019
        </footer>
    </div>
</div>

</body>
</html>