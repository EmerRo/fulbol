<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>@yield('title', 'Full Sports | Vive tu pasión por el deporte')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @production
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        @endphp
        <script type="module" src="/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
        <link rel="stylesheet" href="/build/{{ $manifest['resources/css/app.css']['file'] }}">
    @endproduction
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