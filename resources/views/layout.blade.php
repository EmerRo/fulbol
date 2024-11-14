<!DOCTYPE html>
<html lang="es">
<head>
     
    @production
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : null;
        @endphp
        @if($manifest)
            <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
            <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}" defer></script>
        @else
            <!-- Fallback en caso de que el manifiesto no exista -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <script type="module" src="{{ asset('js/app.js') }}" defer></script>
        @endif
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ícono del sitio -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <!-- Título dinámico -->
    <title>@yield('title', 'Full Sports | Vive tu pasión por el deporte')</title>
    <!-- CSS de Tailwind -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <!-- Encabezado común -->
    @include('header') <!-- Incluye el componente de encabezado -->

    <!-- Contenido principal -->
    <main>
        @include('home')
        @include('features')
        @include('sports')
        @include('testimonials')
        @include('call-to-action')
    </main>

    <!-- Pie de página común -->
    @include('footer') <!-- Incluye el pie de página -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
