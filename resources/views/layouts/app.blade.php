<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Swiper caruosel -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
    <div id="app">
        @include('layouts._nav')
        
        @if(session('access.denied.revisor.only'))
        <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
        @endif
        
        
        @yield('content')
        
        
        @include('layouts._footer')
    </div>
    <!-- Scripts fontawasome -->
    <script src="https://kit.fontawesome.com/4885c16ff9.js" crossorigin="anonymous"></script>
    <!-- Scripts Swiper-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Scripts js-->
    <script src="{{mix('js/app.js')}}"></script>
    
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "cube",
          grabCursor: true,
          cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
    </script>
</body>

</html>
