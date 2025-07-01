<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-6 text-white">
            <h2 class="font-bold text-2xl">
                {{ __('Tableau de Bord') }}
            </h2>
            <p class="text-blue-100 mt-2">{{ __('Bienvenue dans votre espace coaching') }}</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">{{ __('Total Coachs') }}</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $coaches->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">{{ __('Vidéos Disponibles') }}</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $coaches->whereNotNull('video')->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-purple-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">{{ __('Programmes Actifs') }}</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $coaches->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coaches Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">{{ __('Nos Coachs Experts') }}</h3>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500">{{ $coaches->count() }} {{ __('coachs disponibles') }}</span>
                    </div>
                </div>
                
                @if($coaches->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($coaches as $coach)
                            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-200">
                                <!-- Coach Photo -->
                                <div class="relative h-48 overflow-hidden">
                                    @if($coach->photo)
                                        <img src="{{ asset('storage/' . $coach->photo) }}" 
                                             alt="{{ $coach->name }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500">
                                            <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="absolute top-3 right-3">
                                        <span class="bg-white/90 backdrop-blur-sm text-gray-700 px-2 py-1 rounded-full text-xs font-medium">
                                            {{ __('Coach') }}
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Coach Info -->
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <h4 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">{{ $coach->name }}</h4>
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-green-400 rounded-full mr-1"></div>
                                            <span class="text-xs text-gray-500">{{ __('Actif') }}</span>
                                        </div>
                                    </div>
                                    
                                    @if($coach->description)
                                        <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                            {{ Str::limit($coach->description, 120) }}
                                        </p>
                                    @else
                                        <p class="text-gray-400 text-sm italic mb-4">
                                            {{ __('Aucune description disponible') }}
                                        </p>
                                    @endif

                                    <!-- Action Buttons -->
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-200 text-sm">
                                            {{ __('Voir le Profil') }}
                                        </button>
                                        
                                        @if($coach->video)
                                            <button class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-200 text-sm">
                                                {{ __('Voir les Vidéos') }}
                                            </button>
                                        @else
                                            <button class="flex-1 bg-gray-100 text-gray-400 font-medium py-2.5 px-4 rounded-lg text-sm cursor-not-allowed">
                                                {{ __('Pas de vidéo') }}
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- No Coaches Message -->
                    <div class="text-center py-12">
                        <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-2">{{ __('Aucun coach disponible') }}</h3>
                        <p class="text-gray-600 mb-6">{{ __('Les coachs seront bientôt disponibles. Revenez plus tard !') }}</p>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            {{ __('Actualiser la page') }}
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
