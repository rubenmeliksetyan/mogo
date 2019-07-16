<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoGo</title>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-animations.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!--Header-->
@include('components.header')
<!-- Slider -->

@include('components.slider')
<!--About us block -->
@include('components.about')
<!-- Facts block -->
@include('components.facts')
<!--	Services block	-->
@include('components.service')
<!--	Unique design block	-->
@include('components.work')
<!--   What we do block		-->
@include('components.contact')
<!-- Quote block -->
@include('components.quote')
<!--Who we are block -->
@include('components.ourTeam')
<!-- Logos of companies -->

@include('components.logos')
<!-- Some of our work  -->
@include('components.someOfWork')
<!-- Quote second -->
@include('components.quoteSecond')
<!-- Happy clients section -->

@include('components.happyClients')
<!-- Our Story -->
@include('components.blog')
{{-- Map--}}
@include('components.map')
{{--Footer--}}
@include('components.footer')

<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
</body>
</html>
