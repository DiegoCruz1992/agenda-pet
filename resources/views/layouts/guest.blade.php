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
    <body class="min-h-screen font-sans text-gray-900 antialiased flex items-center justify-center relative md:px-4">
        <img src="{{ asset('img/dog-banho.jpeg') }}" alt="imagem de fundo de um cachorro tomando banho" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="w-full h-screen md:h-auto md:w-[800px] flex justify-center gap-8 md:gap-0 flex-col md:grid md:grid-cols-2 rounded-lg shadow-md divide-x-2 divide-[#c1c1c1] border border-[#c1c1c1] bg-white bg-opacity-30 backdrop-blur-sm">
            <div class="col-span-1 p-4 h-[30%] md:h-auto">
                <img src="{{asset('logo-transparente.png')}}" alt="logo" class="w-full h-full object-cover md:object-contain">
            </div>

            <div class="w-full col-span-1 px-4 md:px-4 bg-transparent flex flex-col items-center justify-center">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
