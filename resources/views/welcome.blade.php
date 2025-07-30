<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'CERMI') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-black antialiased min-h-screen">
      @include('partials.header')

    <section class="bg-gradient-to-b from-green-100 to-white py-24 text-center shadow-md shadow-green-800">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-black drop-shadow-2xl animate-fade-in-up">
                BIENVENUE
            </h1>
            <p class="text-xl md:text-2xl mb-4 text-gray-800 animate-fade-in-up animation-delay-300">
                Centre d'études et de Recherches En Médecine Islamique
            </p>
            <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-700 leading-relaxed animate-fade-in-up animation-delay-600">
                Découvrez une approche holistique de la santé qui unit corps et esprit selon les principes de la médecine islamique
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10 animate-fade-in-up animation-delay-900">
                <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    Commencer maintenant
                </a>
                <a href="#mission" class="bg-white/20 hover:bg-white/30 text-green-600 border border-green-600 px-8 py-4 rounded-lg text-lg font-semibold backdrop-blur-sm hover:backdrop-blur-md transition-all duration-300">
                    En savoir plus
                </a>
            </div>
        </div>
    </section>

        <!-- Video Section -->
        <section class="py-12 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4">
                <div class="rounded-2xl overflow-hidden shadow-2xl ring-1 ring-gray-300 border border-gray-200">
                    <video 
                        class="w-full h-auto"
                        loop
                        controls
                    >
                        <source src="{{ Storage::disk('s3')->temporaryUrl('intro.mp4', now()->addMinutes(60)) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>



        <!-- Mission Section -->
        <div id="mission" class="bg-gradient-to-b from-gray-50 to-white py-12">
            <div class="container mx-auto px-4 md:px-6">
                <!-- Centered Mission Statement -->
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-xl border border-gray-200/50">
                        <div class="space-y-6">
                            <!-- Notre objectif ultime -->
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-green-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                                    Notre objectif ultime
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed">Devenir la destination santé la plus fiable en mettant l'accent sur le concept holistique de la médecine islamique, qui prend soin du corps et de l'esprit.</p>
                            </div>
                            
                            <!-- Notre mission -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-blue-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                                    Notre mission
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">Créer un modèle de soins de santé intégrant une perspective islamique holistique pour soigner le corps et l'esprit humains, en adhérant aux meilleures normes médicales internationales et en suivant les principes divins de traitement et d'éthique.</p>
                                <p class="text-gray-600 font-arabic text-right text-base bg-white/50 p-3 rounded-lg">( واقتفاء المعايير الربانية في المعاملة والأخلاق)</p>
                            </div>
                            
                            <!-- Notre approche -->
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-purple-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                                    Notre approche
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">Cette formation est progressive, étape par étape, afin d'inculquer à l'étudiant des connaissances complètes pour mieux comprendre le patient, examiner ses antécédents et ajuster son équilibre.</p>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">Al-Razi, en médecine et en traitement, a toujours recommandé de commencer par l'alimentation. Si le patient n'en tire aucun bénéfice, il doit recourir à des médicaments « Si un homme sage peut soigner avec de la nourriture sans médicament, il a atteint le bonheur. »</p>
                                <p class="text-gray-600 font-arabic text-right text-base bg-white/50 p-3 rounded-lg">إن استطاع الحكيم أن يعالج بالأغذية دون الأدوية فقد وافق السعادة</p>
                            </div>
                            
                            <!-- Le rôle du centre -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-amber-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-amber-600 rounded-full mr-3"></span>
                                    Le rôle du centre
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed">Encourager le travail d'équipe et organiser les soins de santé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="container mx-auto px-4 md:px-6 py-12">
            <div class="flex flex-col md:flex-row gap-10">
                <!-- Left Column: Photo Menu, Contact -->
                <div class="md:w-1/3 space-y-8 order-2 md:order-1">

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
                    {{-- <div class="bg-white shadow-md rounded-lg p-6">
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
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>123 Rue du Coaching, Ville, Pays</span>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Right Column: Coaches Display -->
                <div class="md:w-2/3 order-1 md:order-2">
                    <div class="flex justify-between items-center mb-8">
                    <h1 class="text-3xl font-bold mb-8 text-green-600">Nos Intervenants</h1>
                            <a href="{{ route('dashboard') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                Voir tous →
                            </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($coaches as $coach)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="flex p-4">
                                <!-- Coach Photo -->
                                <div class="w-20 h-20 mr-4">
                                    @if($coach->photo)
                                        <img src="{{ Storage::disk('s3')->temporaryUrl($coach->photo, now()->addMinutes(60)) }}" alt="{{ $coach->name }}" class="w-full h-full object-cover rounded-full">
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

        @include('partials.footer')
    </body>
</html>
