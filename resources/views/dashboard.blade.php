@extends('layouts.app')
 
@production
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}" defer></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
@section('content')
    @include('sections.header')
    <div class="flex">
        @include('sections.sidebar')
        @include('sections.main')
    </div>
    @include('sections.modal')
@endsection
