<!--
______                            _              _                                     _
| ___ \                          | |            | |                                   | |
| |_/ /___ __      __ ___  _ __  | |__   _   _  | |      __ _  _ __  __ _ __   __ ___ | |
|  __// _ \\ \ /\ / // _ \| '__| | '_ \ | | | | | |     / _` || '__|/ _` |\ \ / // _ \| |
| |  | (_) |\ V  V /|  __/| |    | |_) || |_| | | |____| (_| || |  | (_| | \ V /|  __/| |
\_|   \___/  \_/\_/  \___||_|    |_.__/  \__, | \_____/ \__,_||_|   \__,_|  \_/  \___||_|
                                          __/ |
                                         |___/
  ========================================================

  --------------------------------------------------------
  Laravel: v4.2
-->

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        Proposal
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="BirdEggegg">
    <meta name="description" content="">
    <!-- <meta http-equiv="Page-Enter" content="RevealTrans(duration=5,Transitionv=11)"> -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iconvault/iconvault-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('css/containter.css')}}">
    <link rel="stylesheet" href="{{ asset('css/register-login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    @yield('styles')
</head>
<body>
   @include('layouts.partials.nav') 
    <div class="container">
    @yield('body')
    </div>
   @include('layouts.partials.foot')
<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/headroom.js') }}"></script>
<script src="{{ asset('js/jquery.headroom.js') }}"></script>
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('js/location.array.js') }}"></script>
<!-- <script src="{{ asset('js/show.chart.js') }}"></script> -->
<!-- <script src="{{ asset('js/time.animation.js') }}"></script> -->
   @yield('scripts')
</body>
</html>
