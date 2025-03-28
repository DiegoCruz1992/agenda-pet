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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.header')

            <div class="flex">
                <!-- Page Heading -->
                @if (isset($sidebar))
                    <aside class="bg-bg-primario-400 border-r-2 border-[#162c51] hidden md:block">
                        <div class="min-h-screen flex-1 md:py-6 shadow w-48">
                            {{ $sidebar }}
                        </div>
                    </aside>
                @endif

                <!-- Page Content -->
                <main class="bg-bg-primario-100 w-full p-4 md:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
