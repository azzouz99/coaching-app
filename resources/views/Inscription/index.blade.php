<x-inscription-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-50 to-green-100 py-20">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Congrès International de Coaching 2025</h1>
                    <p class="text-xl text-gray-600 mb-6">25-27 Juillet 2025 • Tunis, Tunisie</p>
                    <p class="text-gray-600 mb-8">Rejoignez les meilleurs experts en coaching pour trois jours de conférences, ateliers et réseautage. Une opportunité unique de perfectionner vos compétences et d'élargir votre réseau professionnel.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ url('/inscription/coach') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors text-center">Inscription Coach</a>
                        <a href="{{ url('/inscription/etudiant') }}" class="inline-block bg-white text-green-600 border border-green-600 px-6 py-3 rounded-md font-medium hover:bg-green-50 transition-colors text-center">Inscription Étudiant</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/eef7ee/14532d?text=Congr%C3%A8s+de+Coaching+2025" alt="Congrès de Coaching" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Info Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Date & Lieu</h3>
                    <p class="text-gray-600">25-27 Juillet 2025<br>Centre de Conférences<br>Tunis, Tunisie</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Participants</h3>
                    <p class="text-gray-600">+ 30 Intervenants<br>+ 500 Professionnels<br>+ 200 Étudiants</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Programme</h3>
                    <p class="text-gray-600">15 Conférences<br>10 Ateliers Pratiques<br>5 Tables Rondes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">À propos du Congrès</h2>
                <div class="w-16 h-1 bg-green-600 mx-auto mb-6"></div>
            </div>
            
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/eef7ee/14532d?text=Notre+Congr%C3%A8s" alt="À propos du Congrès" class="rounded-lg shadow-md w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Le plus grand événement de coaching en Tunisie</h3>
                    <p class="text-gray-600 mb-4">Le Congrès International de Coaching est l'événement de référence pour tous les professionnels et étudiants dans le domaine du coaching et du développement personnel.</p>
                    <p class="text-gray-600 mb-4">Pour sa 5ème édition, nous vous proposons un programme riche et varié avec des intervenants de renommée internationale qui partageront leurs connaissances, expériences et les dernières tendances du secteur.</p>
                    <p class="text-gray-600 mb-6">Que vous soyez coach professionnel, en formation ou simplement intéressé par le développement personnel, ce congrès vous offrira des opportunités uniques d'apprentissage et de réseautage.</p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Conférences inspirantes</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Ateliers pratiques</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Networking</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Certification</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programme Section -->
    <section id="programme" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Programme du Congrès</h2>
                <div class="w-16 h-1 bg-green-600 mx-auto mb-6"></div>
                <p class="text-gray-600">Trois jours intenses d'apprentissage, de partage et de réseautage.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Day 1 -->
                <div class="mb-10">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 text-white text-lg font-semibold py-2 px-4 rounded">Jour 1 • 25 Juillet</div>
                        <div class="h-px flex-grow bg-gray-200 ml-4"></div>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                            <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                                <div class="mb-2 md:mb-0">
                                    <span class="text-green-600 font-semibold">09:00 - 10:30</span>
                                </div>
                                <div class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Séance Plénière</div>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Cérémonie d'Ouverture et Conférence Inaugurale</h3>
                            <p class="text-gray-600 mb-4">Discours de bienvenue et présentation des enjeux actuels du coaching par des experts internationaux.</p>
                            <div class="flex items-center">
                                <img src="https://placehold.co/100/eef7ee/14532d?text=A" alt="Intervenant" class="w-10 h-10 rounded-full mr-2">
                                <span class="text-gray-700 font-medium">Dr. Ahmed Benali, Président de l'Association Internationale de Coaching</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                            <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                                <div class="mb-2 md:mb-0">
                                    <span class="text-green-600 font-semibold">11:00 - 12:30</span>
                                </div>
                                <div class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Ateliers Parallèles</div>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Les Fondamentaux du Coaching Professionnel</h3>
                            <p class="text-gray-600 mb-4">Exploration des principes essentiels qui font un coaching efficace et éthique.</p>
                            <div class="flex items-center">
                                <img src="https://placehold.co/100/eef7ee/14532d?text=S" alt="Intervenant" class="w-10 h-10 rounded-full mr-2">
                                <span class="text-gray-700 font-medium">Sophia Haddad, Master Coach et Formatrice</span>
                            </div>
                        </div>
                        
                        <!-- Additional sessions would go here -->
                    </div>
                </div>
                
                <!-- Day 2 - Just showing preview -->
                <div class="mb-10">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 text-white text-lg font-semibold py-2 px-4 rounded">Jour 2 • 26 Juillet</div>
                        <div class="h-px flex-grow bg-gray-200 ml-4"></div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                            <div class="mb-2 md:mb-0">
                                <span class="text-green-600 font-semibold">09:00 - 10:30</span>
                            </div>
                            <div class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">Table Ronde</div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">L'Avenir du Coaching à l'Ère Numérique</h3>
                        <p class="text-gray-600 mb-4">Comment les nouvelles technologies transforment-elles la pratique du coaching et ouvrent de nouvelles perspectives?</p>
                        <div class="flex flex-wrap gap-2">
                            <div class="flex items-center">
                                <img src="https://placehold.co/100/eef7ee/14532d?text=M" alt="Intervenant" class="w-8 h-8 rounded-full mr-1">
                                <span class="text-gray-700 text-sm">Marc Durand</span>
                            </div>
                            <div class="flex items-center">
                                <img src="https://placehold.co/100/eef7ee/14532d?text=L" alt="Intervenant" class="w-8 h-8 rounded-full mr-1">
                                <span class="text-gray-700 text-sm">Leila Khadhraoui</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium">Voir le programme complet →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intervenants Section -->
    <section id="intervenants" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nos Intervenants</h2>
                <div class="w-16 h-1 bg-green-600 mx-auto mb-6"></div>
                <p class="text-gray-600">Découvrez les experts qui partageront leur savoir et leur expérience.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Intervenant 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/300x300/eef7ee/14532d?text=Ahmed+B." alt="Dr. Ahmed Benali" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Dr. Ahmed Benali</h3>
                        <p class="text-gray-500 text-sm mb-3">Président, Association Internationale de Coaching</p>
                        <p class="text-gray-600 text-sm mb-4">Plus de 20 ans d'expérience dans le coaching exécutif et la formation de coachs professionnels.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Intervenant 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/300x300/eef7ee/14532d?text=Sophia+H." alt="Sophia Haddad" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Sophia Haddad</h3>
                        <p class="text-gray-500 text-sm mb-3">Master Coach et Formatrice</p>
                        <p class="text-gray-600 text-sm mb-4">Spécialiste du coaching de vie et de la préparation mentale des sportifs de haut niveau.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Intervenants 3 & 4 with placeholder -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/300x300/eef7ee/14532d?text=Marc+D." alt="Marc Durand" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Marc Durand</h3>
                        <p class="text-gray-500 text-sm mb-3">Coach Digital et Entrepreneur</p>
                        <p class="text-gray-600 text-sm mb-4">Pionnier du coaching en ligne et fondateur de plusieurs plateformes de coaching digital.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://placehold.co/300x300/eef7ee/14532d?text=Leila+K." alt="Leila Khadhraoui" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Leila Khadhraoui</h3>
                        <p class="text-gray-500 text-sm mb-3">Coach d'Entreprise</p>
                        <p class="text-gray-600 text-sm mb-4">Experte en transformation organisationnelle et coaching de dirigeants dans des contextes multiculturels.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-green-600">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="#" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors">Voir tous les intervenants</a>
            </div>
        </div>
    </section>

    <!-- Lieu Section -->
    <section id="lieu" class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Lieu du Congrès</h2>
                <div class="w-16 h-1 bg-green-600 mx-auto mb-6"></div>
                <p class="text-gray-600">Le congrès se tiendra au Centre de Conférences de Tunis, un lieu moderne et facilement accessible.</p>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/eef7ee/14532d?text=Centre+de+Conf%C3%A9rences" alt="Centre de Conférences" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Centre de Conférences de Tunis</h3>
                    <p class="text-gray-600 mb-6">Situé au cœur de la capitale tunisienne, le Centre de Conférences offre un cadre idéal pour notre événement avec ses infrastructures modernes et son accessibilité.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <span class="block font-medium text-gray-700">Adresse</span>
                                <span class="text-gray-600">25 Avenue Habib Bourguiba, Tunis 1000, Tunisie</span>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <span class="block font-medium text-gray-700">Contact</span>
                                <span class="text-gray-600">+216 71 123 456</span>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <div>
                                <span class="block font-medium text-gray-700">Accès</span>
                                <span class="text-gray-600">À 15 minutes de l'aéroport Tunis-Carthage<br>Plusieurs lignes de bus et métro à proximité<br>Parking disponible sur place</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <a href="#" class="inline-flex items-center text-green-600 hover:text-green-800 font-medium">
                            <span>Voir sur Google Maps</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à participer au Congrès International de Coaching 2025 ?</h2>
            <p class="text-lg max-w-2xl mx-auto mb-8">Inscrivez-vous dès maintenant pour vivre une expérience enrichissante et réseauter avec des professionnels du monde entier.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ url('/inscription/coach') }}" class="inline-block bg-white text-green-700 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition-colors">Inscription Coach</a>
                <a href="{{ url('/inscription/etudiant') }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md font-medium hover:bg-green-900 transition-colors">Inscription Étudiant</a>
            </div>
        </div>
    </section>
</x-inscription-layout>