<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/container.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/image.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/divider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/segment.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/button.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/transition.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- @include('inc.nav') --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{asset('js/mdb.min.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script src="assets/library/jquery.min.js"></script>
  <script src="{{ asset('js/transition.js') }}"></script>
  <script src="{{ asset('js/landing.js') }}"></script>


</body>
</html>
