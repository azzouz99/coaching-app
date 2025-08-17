<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-8 bg-gray-50 min-h-screen">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 mb-8 border border-blue-100 relative overflow-hidden animate-fade-in">
        <!-- Background decoration - adjusted for RTL -->
        <div class="absolute top-0 ltr:right-0 rtl:left-0 w-32 h-32 bg-gradient-to-br from-blue-200 to-indigo-300 rounded-full -translate-y-16 ltr:translate-x-16 rtl:-translate-x-16 opacity-20"></div>
        <div class="absolute bottom-0 ltr:left-0 rtl:right-0 w-24 h-24 bg-gradient-to-br from-purple-200 to-pink-300 rounded-full translate-y-12 ltr:-translate-x-12 rtl:translate-x-12 opacity-20"></div>
        
        <div class="relative z-10 flex items-center ltr:space-x-4 rtl:space-x-reverse">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-lg animate-bounce-in">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div class="rtl:text-right">
                <h3 class="text-xl font-bold text-gray-900">{{ __('Bonjour') }} {{ auth()->user()->name ?? 'Utilisateur' }} ! 👋</h3>
                <p class="text-gray-600">{{ __('Découvrez nos Intervenants experts et commencez votre parcours de développement personnel')}}.</p>
            </div>
        </div>
    </div>

            <!-- Stats Cards Component -->
            <div class="mb-8 animate-slide-up">
                <livewire:stats-cards />
            </div>

            <!-- Quick Actions -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 animate-fade-in">
                <a href="#videos" class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-lg hover:border-green-200 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 group-hover:text-green-600 transition-colors">Vidéos Récentes</h4>
                            <p class="text-sm text-gray-600">Regardez les dernières vidéos</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
                
                <a href="#programs" class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-lg hover:border-blue-200 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Programmes</h4>
                            <p class="text-sm text-gray-600">Explorez nos programmes</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
                
                <a href="#favorites" class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-lg hover:border-purple-200 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">Favoris</h4>
                            <p class="text-sm text-gray-600">Vos coachs préférés</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
            </div> --}}

            <!-- Coaches Grid Component -->
            <div class="animate-slide-up">
                <livewire:coaches-grid />
            </div>
            

        </div>
    </div>
</x-app-layout>
