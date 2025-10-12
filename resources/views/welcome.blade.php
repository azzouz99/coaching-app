<!DOCTYPE html>
<html lang="{{ $htmlLang ?? app()->getLocale() }}"
      dir="{{ $htmlDir ?? (app()->getLocale()==='ar' ? 'rtl' : 'ltr') }}">
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
                {{ __('BIENVENUE') }}
            </h1>
            <p class="text-xl md:text-2xl mb-4 text-gray-800 animate-fade-in-up animation-delay-300">
                {{ __('Centre d\'Études et de Recherches en Médecine Islamique') }}
            </p>
            <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-700 leading-relaxed animate-fade-in-up animation-delay-600">
                {{ __('Découvrez une approche holistique de la santé qui unit corps et esprit selon les principes de la médecine islamique') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10 animate-fade-in-up animation-delay-900">
                <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    {{ __('Commencer maintenant') }}
                </a>
                <a href="#mission" class="bg-white/20 hover:bg-white/30 text-green-600 border border-green-600 px-8 py-4 rounded-lg text-lg font-semibold backdrop-blur-sm hover:backdrop-blur-md transition-all duration-300">
                    {{ __('En savoir plus') }}
                </a>
            </div>
        </div>
    </section>

        <!-- Video Section -->
        {{-- <section class="py-12 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4">
                <div class="rounded-2xl overflow-hidden shadow-2xl ring-1 ring-gray-300 border border-gray-200">
                    <video 
                        class="w-full h-auto"
                        loop
                        controls
                        poster="{{ asset('storage/thumbnails/cover.png') }}"
                    >
                        <source src="{{ asset('storage/videos/intro.mp4') }}" }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section> --}}



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
                                    {{ __('Notre objectif ultime') }}
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ __('Devenir la destination santé la plus fiable en mettant l\'accent sur le concept holistique de la médecine islamique, qui prend soin du corps et de l\'esprit.') }}</p>
                            </div>
                            
                            <!-- Notre mission -->
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-blue-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                                    {{ __('Notre mission') }}
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">{{ __('Créer un modèle de soins de santé intégrant une perspective islamique holistique pour soigner le corps et l\'esprit humains, en adhérant aux meilleures normes médicales internationales et en suivant les principes divins de traitement et d\'éthique.') }}</p>
                                <p class="text-gray-600 font-arabic text-right text-base bg-white/50 p-3 rounded-lg">( واقتفاء المعايير الربانية في الأخلاق والمعاملة )</p>
                            </div>
                            
                            <!-- Notre approche -->
                            <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-purple-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                                    {{ __('Notre approche') }}
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">{{ __('Cette formation est progressive, étape par étape, afin d\'inculquer à l\'étudiant des connaissances complètes pour mieux comprendre le patient, examiner ses antécédents et ajuster son équilibre.')}}</p>
                                <p class="text-gray-600 text-sm leading-relaxed mb-3">{{ __('Al-Razi, en médecine et en traitement, a toujours recommandé de commencer par l\'alimentation. Si le patient n\'en tire aucun bénéfice, il doit recourir à des médicaments « Si un homme sage peut soigner avec de la nourriture sans médicament, il a atteint le bonheur. »')}}</p>
                                <p class="text-gray-600 font-arabic text-right text-base bg-white/50 p-3 rounded-lg">إن استطاع الحكيم أن يعالج بالأغذية دون الأدوية فقد وافق السعادة</p>
                            </div>
                            
                            <!-- Le rôle du centre -->
                            <div class="bg-gradient-to-r from-amber-50 to-orange-50 p-6 rounded-xl shadow-sm">
                                <h2 class="text-lg font-bold text-amber-700 mb-3 flex items-center">
                                    <span class="w-2 h-2 bg-amber-600 rounded-full mr-3"></span>
                                    {{ __('Le rôle du centre') }}
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ __('Encourager le travail d\'équipe et organiser les soins de santé') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-gradient-to-b from-gray-50/50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/70 p-10 text-center">
      <!-- En-tête -->
      <h2 class="text-4xl font-bold text-green-700 mb-4">
        {{ __('Cours à distance – Première phase') }}
      </h2>
      <p class="text-xl font-bold text-green-700 leading-relaxed max-w-3xl mx-auto mb-8">
        {{ __('Nutrition et traitement de ses pathologies') }}
      </p>

      <!-- Corps du texte -->
      <div class="max-w-4xl mx-auto text-gray-700 text-base leading-relaxed space-y-5 text-justify bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-2xl shadow-md">
        <p>{{ __('Le début des cours, si Dieu le veut, aura lieu le dimanche 19 octobre 2025 à 9h00 (heure de Tunis).') }}</p>
        <p>{{ __('Nous entamerons, avec la bénédiction d’Allah, la série de médecine islamique en collaboration avec l’École Zaytounia de Médecine Islamique.') }}</p>
        <p>{{ __('Le lien d’accès à la plateforme d’enseignement en ligne vous sera envoyé par e-mail, à l’adresse utilisée lors de votre inscription.') }}</p>
        <p>{{ __('Le livret des cours ainsi que les vidéos enregistrées des conférences seront envoyés par courrier à tous les inscrits.') }}</p>
        <p>{{ __('Chaque semaine, une nouvelle conférence en vidéo sera disponible via Zoom, suivie d’une évaluation périodique pour chaque spécialité.') }}</p>
        <p>{{ __('À la fin de chaque semaine, une séance interactive de questions-réponses sur les leçons sera ouverte, si Dieu le veut.') }}</p>
        <p class="text-green-700 font-semibold text-center">
          {{ __('Nous demandons à Allah de vous accorder réussite et bénédiction.') }}
        </p>
      </div>

      <!-- Ligne décorative -->
      <div class="mt-10 flex justify-center">
        <div class="h-1 w-24 bg-gradient-to-r from-green-600 via-green-700 to-green-800 rounded-full"></div>
      </div>
    </div>
  </div>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column: Programme overview -->
                <div class="lg:w-1/3 space-y-8 order-2 lg:order-1">

                <!-- Programme card -->
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl shadow-xl border border-green-100 p-8 sticky top-8 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-3 bg-green-600 rounded-xl shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">
                                {{ __('Programme') }} <span class="text-green-600">{{ __('الزيتوني') }}</span>
                            </h3>
                            <div class="flex flex-col gap-1">
                                <p class="text-sm text-gray-500">{{ __('L\'école de médecine islamique') }}</p>
                                <p class="text-sm text-gray-500 font-arabic">{{ __('مدرسة الطب الإسلامي') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 text-gray-700">
                    <div>
                        <h4 class="font-bold text-red-700">{{ __('Phase 1 : ') }}{{ __('Nutrition et traitement de ses pathologies') }}</h4>
                        <p class="text-sm">{{ __('Nutrition selon une approche islamique') }}</p>
                    </div>

                    <ul class="space-y-2 text-sm leading-relaxed">
                        <li>• <span class="font-medium text-green-700">{{ __('Volume :') }}</span> {{ __('16 heures (1h/semaine, à distance)') }}</li>
                        <li>• <span class="font-medium text-green-700">{{ __('Calendrier :') }}</span> {{ __('à partir du dimanche 19 octobre 2025, sur 4 mois') }}</li>
                        <li>• <span class="font-medium text-green-700">{{ __('Certification :') }}</span> {{ __('attestation délivrée après l’évaluation finale') }}</li>
                        <li>• <span class="font-medium text-green-700">{{ __('Structure :') }}</span> {{ __('16 modules · 16 semaines') }}</li>
                        <li>• <span class="font-medium text-green-700">{{ __('Encadrement :') }}</span> {{ __('3 experts (médecins/pharmaciens) + 2 collaborateurs') }}</li>
                        <li>• <span class="font-medium text-green-700">{{ __('Ouvrage de référence :') }}</span> <em>{{ __('Série de la médecine prophétique — Nutrition et traitement de ses pathologies') }}</em></li>
                    </ul>

                    <div class="pt-3 border-t">
                        <h4 class="font-semibold text-red-700 mb-1">{{ __('Public concerné') }}</h4>
                        <ul class="list-disc list-inside text-sm space-y-1">
                        <li>{{ __('Étudiants du baccalauréat (instituts et facultés)') }}</li>
                        <li>{{ __('Techniciens et professionnels de santé') }}</li>
                        <li>{{ __('Spécialistes, médecins et pharmaciens') }}</li>
                        </ul>
                    </div>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-green-50 text-green-700 border border-green-200">{{ __('À distance') }}</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-emerald-50 text-emerald-700 border border-emerald-200">{{ __('16 semaines') }}</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-teal-50 text-teal-700 border border-teal-200">{{ __('Attestation') }}</span>
                    </div>
                </div>
                </div>

                <!-- Right Column: Detailed schedule -->
                <div class="lg:w-2/3 order-1 lg:order-2">
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                        <h3 class="text-2xl font-bold text-red-700">{{ __('Phase 1 : ') }}{{ __('Nutrition et traitement de ses pathologies') }}</h3>
                    <p class="text-sm text-gray-500 mb-6">{{ __('Nutrition selon l\'approche islamique') }}</p>



                    <!-- Timeline -->
                    <ol class="relative border-s border-gray-200 ps-4 space-y-6">
                    <!-- Séance 1 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 1 : Le 19 octobre 2025 à 09h00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span> {{ __('Science de la création : La cellule vivante et ses fonctions') }} — <span class="font-medium text-gray-600">{{ __('Dr. Yassine Malik') }}</span></li>
                        <li><span class="text-green-700">09:30 </span> {{ __('Thérapie par l\'argile') }} — <span class="font-medium text-gray-600">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 2 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 2 : Dimanche 26 octobre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Les nutriments') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li><span class="text-green-700">09:30 </span>{{ __('Aliments et nutrition en Islam') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 3 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 3 : Dimanche 2 novembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Sécurité alimentaire en Islam') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li><span class="text-green-700">09:30 </span>{{ __('Aliments et nutrition en Islam') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 4 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 4 : Dimanche 9 novembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Laitages et nutrition') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 5 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 5 : Dimanche 16 novembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Laits : vache, dromadaire, chèvre') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 6 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 6 : Dimanche 23 novembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Miel et dattes') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 7 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 7 : Dimanche 30 novembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:30 </span>{{ __('Blé et orge') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 8 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 8 : Dimanche 7 décembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Lipides & olives') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li><span class="text-green-700">09:30 </span>{{ __('Lipides & beurre') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 9 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 9 : Dimanche 14 décembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Lipides & samneh (beurre clarifié)') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li><span class="text-green-700">09:30 </span>{{ __('Graisse de bélier arabe & sciatique') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 10 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 10 : Dimanche 21 décembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Protéines et viandes') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li><span class="text-green-700">09:30 </span>{{ __('Métabolisme & fonctions des nutriments') }} — <span class="font-medium">{{ __('Dr. Yassine Malik') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 11 -->
                    <!-- Séance 11 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 11 : Dimanche 28 décembre 2025 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00</span>{{ __('Plantes aidant l\'organisme à résister au stress (ginseng)') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 12 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 12 : Dimanche 4 janvier 2026 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li>{{ __('Sédatifs nerveux à base de plantes : valériane, aubépine, rhodiole, passiflore…') }}</li>
                        </ul>
                    </li>

                    <!-- Séance 13 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 13 : Dimanche 11 janvier 2026 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li><span class="text-green-700">09:00 </span>{{ __('Neuro-médiateurs des plantes') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        <li>{{ __('Plantes pour stimuler la mémoire et la concentration : ginkgo biloba, sauge, thé vert') }}</li>
                        </ul>
                    </li>

                    <!-- Séance 14 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 14 : Dimanche 18 janvier 2026 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li>{{ __('Prise en charge de fond du patient Alzheimer') }} — <span class="font-medium">{{ __('(Dr. pharmacien) Lotfi Guenaien') }}</span></li>
                        </ul>
                    </li>

                    <!-- Séance 15 -->
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 15 : Dimanche 25 janvier 2026 à 09:00') }}</h4>
                        <ul class="text-sm text-gray-700 mt-1 space-y-1">
                        <li>{{ __('Traitement de la migraine par les plantes') }}</li>
                        </ul>
                    </li>              
                    <li>
                        <div class="absolute -start-1.5 mt-1.5 w-3 h-3 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                        <h4 class="font-semibold text-gray-900">{{ __('Séance 16 : Dimanche 1 février 2026 à 09:00') }}</h4>
                        <p class="text-sm text-gray-700 mt-1">{{ __('Épreuve d\'évaluation (test final)') }}</p>
                    </li>
                    </ol>
                </div>
                </div>

            </div>
            
            <!-- Call-to-action Section -->
            <div class="mt-20 py-12 bg-gradient-to-r from-green-50 via-white to-green-50 rounded-2xl border border-green-100">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Prêt à commencer votre voyage ?') }}</h3>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">{{ __('Rejoignez-nous dès maintenant et découvrez la richesse de la médecine islamique.') }}</p>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white bg-green-600 hover:bg-green-700 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        {{ __('Inscrivez-vous maintenant') }}
                        <svg class="w-5 h-5 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </main>

        @include('partials.footer')
    </body>
</html>
