<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-2xl">
                        {{ $coach->name }}
                    </h2>
                    <p class="text-blue-100 mt-2">{{ __('Coach Expert') }}</p>
                </div>
                <a href="{{ route('dashboard') }}" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg transition-colors">
                    {{ __('← Retour au tableau de bord') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Coach Profile Section -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Coach Photo and Info -->
                    <div class="lg:col-span-1">
                        <div class="text-center">
                            <div class="w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden shadow-lg">
                                @if($coach->photo)
                                    <img src="{{ asset('storage/' . $coach->photo) }}" 
                                         alt="{{ $coach->name }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500">
                                        <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $coach->name }}</h3>
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">{{ __('Coach Actif') }}</span>
                            </div>
                            <div class="flex justify-center space-x-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600">{{ $coach->video ? '1' : '0' }}</div>
                                    <div class="text-sm text-gray-600">{{ __('Vidéo') }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600">100%</div>
                                    <div class="text-sm text-gray-600">{{ __('Succès') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="lg:col-span-2">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">{{ __('À propos de ce coach') }}</h4>
                        @if($coach->description)
                            <p class="text-gray-600 leading-relaxed mb-6">{{ $coach->description }}</p>
                        @else
                            <p class="text-gray-500 italic mb-6">{{ __('Aucune description disponible pour ce coach.') }}</p>
                        @endif

                        <!-- Specialties -->
                        <div class="mb-6">
                            <h5 class="font-semibold text-gray-900 mb-3">{{ __('Spécialités') }}</h5>
                            <div class="flex flex-wrap gap-2">
                                @if($coach->specialties && count($coach->specialties) > 0)
                                    @foreach($coach->specialties as $index => $specialty)
                                        @php
                                            $colors = [
                                                'bg-blue-100 text-blue-800',
                                                'bg-green-100 text-green-800',
                                                'bg-purple-100 text-purple-800',
                                                'bg-red-100 text-red-800',
                                                'bg-yellow-100 text-yellow-800',
                                                'bg-indigo-100 text-indigo-800',
                                                'bg-pink-100 text-pink-800',
                                                'bg-gray-100 text-gray-800'
                                            ];
                                            $colorClass = $colors[$index % count($colors)];
                                        @endphp
                                        <span class="{{ $colorClass }} px-3 py-1 rounded-full text-sm">{{ $specialty }}</span>
                                    @endforeach
                                @else
                                    <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm italic">{{ __('Aucune spécialité définie') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Section -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h4 class="text-2xl font-bold text-gray-900 mb-6">{{ __('Vidéo de Formation') }}</h4>
                
                @if($coach->video)
                    <div class="bg-gray-900 rounded-lg overflow-hidden aspect-video">
                        <!-- Video Player Placeholder -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-800 to-gray-900">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white text-lg font-medium mb-2">{{ __('Vidéo de Formation') }}</h3>
                                <p class="text-gray-300 text-sm">{{ __('Cliquez pour lancer la vidéo') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Info -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <h5 class="font-semibold text-gray-900">{{ __('Vidéo de Formation avec') }} {{ $coach->name }}</h5>
                                <p class="text-sm text-gray-600">{{ __('Durée estimée: 45 minutes') }}</p>
                            </div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                                </svg>
                                {{ __('Lancer la vidéo') }}
                            </button>
                        </div>
                    </div>
                @else
                    <!-- No Video Available -->
                    <div class="text-center py-12 bg-gray-50 rounded-lg">
                        <div class="mx-auto w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">{{ __('Aucune vidéo disponible') }}</h3>
                        <p class="text-gray-600">{{ __('Ce coach n\'a pas encore de vidéo de formation disponible.') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
