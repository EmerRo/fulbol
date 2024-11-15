<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>@yield('title', 'Full Sports | Vive tu pasión por el deporte')</title>
    
    @viteReactRefresh




</head>
<body>
    @include('header')

    <main>
        @include('home')
        @include('features')
        @include('sports')
        @include('testimonials')
        @include('call-to-action')
    </main>

    @include('footer')
</body>
</html>