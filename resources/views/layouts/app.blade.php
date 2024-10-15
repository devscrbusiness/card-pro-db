<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Profesionales - DbCard</title>{{-- {{ config('app.name', 'Laravel') }} --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" style="top: 0px; background-image: url('{{ asset('storage/background_picture/fondo-100.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="min-h-screen">
        @if(Auth::check())
            @if (isset($user))
                @include('layouts.navigation', ['user' => $user])
            @else
                @include('layouts.navigation')
            @endif
        @endif

        <!-- Page Heading -->
        @isset($header)
        <header class="shadow">
            <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main style="top: 0px;">
            {{ $slot }}
        </main>
    </div>
</body>

</html>