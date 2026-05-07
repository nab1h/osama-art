<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app-BNIzUq0t.css') }}">
</head>

<style>
    .achievement-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        display: block;
    }

    .achievement-image-wrapper {
        width: 150px;
        height: 150px;
        overflow: hidden;
    }

    .btn-toggle-on {
        background: linear-gradient(135deg, #22c55e, #16a34a);
        color: white;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 0 3px 10px rgba(34, 197, 94, 0.3);
    }

    .btn-toggle-off {
        background: linear-gradient(135deg, #9ca3af, #6b7280);
        color: white;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 0 3px 10px rgba(107, 114, 128, 0.2);
    }

    .btn-toggle-on:hover,
    .btn-toggle-off:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }
</style>

<body class="font-sans antialiased overflow-x-scroll">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="{{ asset('js/app-DsIK1Lmc.js') }}" defer></script>
</body>

</html>
