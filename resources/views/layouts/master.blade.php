<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoGo</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
