<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
    <div id="app">
        @include('layouts._nav')

        @if(session('access.denied.revisor.only'))
        <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
        @endif
        
        <main class="container py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{mix('js/app.js')}}"></script>

</body>

</html>
