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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans flex justify-center text-gray-900 antialiased">
        <div class="max-w-5xl w-full min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="p-4">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>
            @include('layouts.custom-navigation')
            <div class="w-full mt-6 px-6 py-4">
                {{ $slot }}
            </div>
            @include('layouts.custom-footer')
        </div>
    </body>
</html>
