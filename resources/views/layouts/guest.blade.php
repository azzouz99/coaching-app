<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Application de Coaching') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-black antialiased min-h-screen">
        <header class="w-full bg-white shadow-md py-4">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <a href="/" class="px-4 py-2 bg-green-600 text-white font-medium rounded-md shadow hover:bg-green-700 transition-colors">
                            Accueil
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo 1" class="h-16">
                        </a>
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo2.png') }}" alt="Logo 2" class="h-16">
                        </a>
                    </div>
                    <div class="w-24">
                        <!-- Empty div to balance the layout -->
                    </div>
                </div>
            </div>
        </header>

        <div class="min-h-screen flex flex-col pt-10 sm:pt-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="w-full sm:max-w-md mx-auto px-6 py-8 bg-white shadow-md rounded-lg border border-gray-200">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <footer class="bg-white border-t border-gray-200 mt-12">
            <div class="container mx-auto px-4 md:px-6 py-6">
                <div class="text-center">
                    <p class="text-sm text-gray-600">© {{ date('Y') }} CoachingApp. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
