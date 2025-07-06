<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Application de Coaching</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-black antialiased min-h-screen">
        <header class="w-full bg-white shadow-sm py-4">
            <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-green-600">Coaching<span class="text-black">App</span></a>
                </div>
                <nav class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-black hover:text-green-600 transition-colors">
                                Tableau de bord
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-black hover:text-green-600 transition-colors">
                                Connexion
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-medium bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">
                                    S'inscrire
                                </a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </header>

        <main class="container mx-auto px-4 md:px-6 py-12">
            <!-- Subscription Banner -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 mb-10 shadow-sm border border-green-200">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-6">
                        <h2 class="text-2xl font-bold text-green-800 mb-2">Accès Premium aux Vidéos de Coaching</h2>
                        <p class="text-green-700 mb-4">Débloquez l'accès à toutes nos vidéos exclusives avec un paiement unique !</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Accès illimité à toutes les vidéos</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Techniques et conseils exclusifs de nos coachs professionnels</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Paiement unique, accès à vie</span>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center md:text-right">
                        <div class="bg-white p-5 rounded-lg shadow-md border border-green-200 mb-4">
                            <div class="text-3xl font-bold text-green-600 mb-1">49,99 TND</div>
                            <div class="text-sm text-gray-500 mb-4">Paiement unique</div>
                            @auth
                                <a href="{{ route('subscription.checkout') }}" class="block w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded transition-colors">
                                    S'abonner maintenant
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="block w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded transition-colors">
                                    Créer un compte
                                </a>
                                <p class="text-xs text-gray-500 mt-2">Créez un compte pour vous abonner</p>
                            @endauth
                        </div>
                        {{-- <div class="text-sm text-gray-600">Satisfaction garantie ou remboursé pendant 30 jours</div> --}}
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-10">
                <!-- Left Column: Logos, Photo Menu, Contact -->
                <div class="md:w-1/3 space-y-8">
                    <!-- Logo Section -->
                    <div class="flex flex-col space-y-6">
                        <div class="flex justify-center space-x-4">
                            <!-- Logo 1 - Replace with your actual logo -->
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 font-bold">LOGO 1</span>
                            </div>
                            
                            <!-- Logo 2 - Replace with your actual logo -->
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 font-bold">LOGO 2</span>
                            </div>
                        </div>
                    </div>

                    <!-- Photo Menu -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4 text-green-600">Menu Photos</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Replace with your actual menu photos -->
                            <div class="aspect-square bg-gray-100 rounded-md flex items-center justify-center">
                                <span class="text-sm text-gray-500">Photo 1</span>
                            </div>
                            <div class="aspect-square bg-gray-100 rounded-md flex items-center justify-center">
                                <span class="text-sm text-gray-500">Photo 2</span>
                            </div>
                            <div class="aspect-square bg-gray-100 rounded-md flex items-center justify-center">
                                <span class="text-sm text-gray-500">Photo 3</span>
                            </div>
                            <div class="aspect-square bg-gray-100 rounded-md flex items-center justify-center">
                                <span class="text-sm text-gray-500">Photo 4</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4 text-green-600">Contactez-nous</h2>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>lotfi.guenaien@gmail.com</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>+216 (98) 939-834</span>
                            </div>
                            {{-- <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>123 Rue du Coaching, Ville, Pays</span>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Coaches Display -->
                <div class="md:w-2/3">
                    <h1 class="text-3xl font-bold mb-8 text-green-600">Nos Coachs</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($coaches as $coach)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="flex p-4">
                                <!-- Coach Photo -->
                                <div class="w-20 h-20 mr-4">
                                    @if($coach->photo)
                                        <img src="{{ asset('storage/' . $coach->photo) }}" alt="{{ $coach->name }}" class="w-full h-full object-cover rounded-full">
                                    @else
                                        <div class="w-full h-full bg-gray-200 rounded-full flex items-center justify-center">
                                            <span class="text-xl text-gray-500">{{ substr($coach->name, 0, 1) }}</span>
                                        </div>
                                    @endif
                                </div>
                                <!-- Coach Details -->
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold">{{ $coach->name }}</h3>
                                    @if($coach->specialties)
                                    <div class="flex flex-wrap gap-1 my-1">
                                        @foreach($coach->specialties as $specialty)
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">{{ $specialty }}</span>
                                        @endforeach
                                    </div>
                                    @endif
                                    <p class="text-sm text-gray-600 mt-1 line-clamp-3">{{ $coach->description }}</p>
                                    <a href="{{ route('coach.show', $coach) }}" class="inline-block mt-2 text-sm font-medium text-green-600 hover:text-green-700">
                                        En savoir plus →
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white border-t border-gray-200 mt-12">
            <div class="container mx-auto px-4 md:px-6 py-6">
                <div class="text-center">
                    <p class="text-sm text-gray-600">© {{ date('Y') }} CoachingApp. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
