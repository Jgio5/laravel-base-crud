<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font google --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- Css partial --}}
    @yield('css')

    <title>@yield('title', 'Nike') | Nike Store</title>
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>