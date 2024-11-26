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
    @php
        $bgs = array('https://gifdb.com/images/high/pixel-art-starry-night-background-tdtkgqs3ds5vmtrm.gif',
                    'https://i.pinimg.com/originals/f1/63/11/f16311fd0c32786525f471c685bc516e.gif',
                    'https://i.redd.it/uxifx7eyaenb1.gif',
                    'https://steamuserimages-a.akamaihd.net/ugc/920296549068062586/92595CBF81FBCDFDC0FD667DFC400E41F6956F44/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false');
        $background = $bgs[rand(0,3)];
    @endphp
    <body class="font-sans antialiased bg-cover" background="{{$background}}">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="bg-black bg-opacity-80">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
